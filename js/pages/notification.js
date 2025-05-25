let notificationInterval;
let lastNotificationCount = 0;

function startFetchingNotifications() {
    fetchNotifications();
    notificationInterval = setInterval(fetchNotifications, 5000);
}

function stopFetchingNotifications() {
    clearInterval(notificationInterval);
}

function fetchNotifications() {
    fetch('fetch_notifications.php')
        .then(response => response.json())
        .then(data => {
            console.log('Fetched notifications:', data);
            if (data.success) {
                displayNotifications(data.data);
                updateNotificationCount(data.data.length);
                toggleMarkAllReadButton(data.data.length > 0);
            } else {
                console.error('Error fetching notifications:', data.error);
            }
        })
        .catch(error => {
            console.error('Error fetching notifications:', error);
        });
}

function displayNotifications(notifications) {
    const notifContainer = document.getElementById('supervisornotif');
    if (!notifContainer) {
        console.error('Notification container not found');
        return;
    }

    if (notifications.length === 0) {
        notifContainer.innerHTML = '<li class="no-notifications"><i class="fa fa-bell-slash"></i> No new notifications</li>';
        return;
    }

    let notifHtml = '';
    notifications.forEach(notif => {
        notifHtml += `
            <li data-notif-id="${notif.notif_id}" class="notification-item ${notif.is_new ? 'new-notification' : ''}">
                <a href="#" class="notification-link">
                    <div class="notification-content">
                        <h4>${notif.notif_subject}</h4>
                        <p>${notif.notif_text}</p>
                        <span class="notification-time">${formatDate(notif.notif_datetime)}</span>
                    </div>
                </a>
            </li>
        `;
    });

    notifContainer.innerHTML = notifHtml;
    addNotificationClickListeners();
}

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleString('en-US', { 
        year: 'numeric', 
        month: 'short', 
        day: 'numeric', 
        hour: '2-digit', 
        minute: '2-digit'
    });
}

function updateNotificationCount(count) {
    const countElement = document.getElementById('notification-count');
    if (countElement) {
        countElement.textContent = count;
        countElement.style.display = count > 0 ? 'block' : 'none';
    }

    if (count > lastNotificationCount) {
        playNotificationSound();
    }

    lastNotificationCount = count;
}

function toggleMarkAllReadButton(show) {
    const markAllReadLi = document.querySelector('.mark-all-read-li');
    if (markAllReadLi) {
        markAllReadLi.style.display = show ? 'block' : 'none';
    }
}

function playNotificationSound() {
    // You can implement a sound effect here if desired
    console.log('New notification received!');
}

function addNotificationClickListeners() {
    const notificationLinks = document.querySelectorAll('.notification-link');
    notificationLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const notifId = this.closest('.notification-item').dataset.notifId;
            markNotificationAsRead(notifId);
        });
    });
}

function markNotificationAsRead(notifId) {
    console.log('Marking notification as read:', notifId);
    const formData = new FormData();
    formData.append('notif_id', notifId);

    fetch('fetch_notifications.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log('Server response:', data);
        if (data.success) {
            console.log('Notification marked as read');
            const notifElement = document.querySelector(`.notification-item[data-notif-id="${notifId}"]`);
            if (notifElement) {
                notifElement.classList.remove('new-notification');
                notifElement.classList.add('read-notification');
            }
            updateNotificationCount(lastNotificationCount - 1);
            toggleMarkAllReadButton(lastNotificationCount > 0);
        } else {
            console.error('Error marking notification as read:', data.error || data.message);
        }
    })
    .catch(error => {
        console.error('Error marking notification as read:', error);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    startFetchingNotifications();
    
    const markAllReadButton = document.querySelector('.mark-all-read');
    if (markAllReadButton) {
        markAllReadButton.addEventListener('click', markAllNotificationsAsRead);
    }
});

function markAllNotificationsAsRead() {
    fetch('fetch_notifications.php', {
        method: 'POST',
        body: JSON.stringify({ action: 'mark_all_read' }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('All notifications marked as read');
            
            // Update all notification items to read status
            const notificationItems = document.querySelectorAll('#supervisornotif .notification-item');
            notificationItems.forEach(item => {
                item.classList.remove('new-notification');
                item.classList.add('read-notification');
            });
            
            // Update notification count
            updateNotificationCount(0);
            
            // Hide the "Mark all as read" button
            toggleMarkAllReadButton(false);
            
            // Optionally, you can add a temporary message
            const notifContainer = document.getElementById('supervisornotif');
            if (notifContainer) {
                notifContainer.innerHTML = '<li class="no-notifications"><i class="fa fa-check"></i> All notifications marked as read</li>';
                // Clear the message after a few seconds
                setTimeout(() => {
                    fetchNotifications(); // Refresh the notification list
                }, 3000);
            }
        } else {
            console.error('Error marking all notifications as read:', data.error || data.message);
        }
    })
    .catch(error => {
        console.error('Error marking all notifications as read:', error);
    });
}

window.addEventListener('beforeunload', stopFetchingNotifications);