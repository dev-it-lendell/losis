document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM fully loaded and parsed');

    let selectedUserId = null;

    function loadUsers() {
    console.log('Loading users...');
    fetch('functions/users_list.php')
        .then(response => {
            console.log('Response status:', response.status);
            console.log('Response headers:', response.headers);
            return response.text();
        })
        .then(text => {
            console.log('Raw response text:', text);
            try {
                return JSON.parse(text);
            } catch (error) {
                console.error('Error parsing JSON:', error);
                throw new Error('Invalid JSON response: ' + text);
            }
        })
        .then(data => {
            console.log('Parsed users data:', data);
            if (data.status === 'success') {
                document.querySelector('.users-list').innerHTML = data.data;
                addClickListenersToUsers();
            } else {
                console.error('Error loading users:', data.message, data.debug);
                document.querySelector('.users-list').innerHTML = 'Error loading users: ' + data.message;
            }
        })
        .catch(error => {
            console.error('Error loading users:', error);
            document.querySelector('.users-list').innerHTML = 'Error loading users. Please try again.';
        });
}

    function updateUsersList(users) {
        console.log('updateUsersList called with:', users);
        let output = "";
        const currentUserId = '<?php echo $_SESSION["user_id"]; ?>';
        console.log('Current user ID:', currentUserId);
    
        users.forEach(user => {
            const userImagePath = user.user_image ? `../../LOSIS/profilepictures_/${user.user_id}/${user.user_image}` : "../profilepictures_/default.jpg";
            let lastMessage = 'No message available';
            
            console.log('Processing user:', user);
            
            if (user.last_msg) {
                console.log('Last message:', user.last_msg);
                console.log('Last message sender ID:', user.last_msg_sender_id);
                
                if (user.last_msg_sender_id === currentUserId) {
                    lastMessage = `YOU: ${user.last_msg}`;
                } else {
                    lastMessage = `${user.username}: ${user.last_msg}`;
                }
                
                console.log('Formatted last message:', lastMessage);
            } else {
                console.log('No last message for this user');
            }
    
            // Remove message length limit for debugging
            // lastMessage = lastMessage.length > 28 ? lastMessage.substring(0, 28) + '...' : lastMessage;
    
            output += `
                <a href="#" data-id="${htmlspecialchars(user.user_id)}">
                    <div class="content">
                        <img src="${htmlspecialchars(userImagePath)}" alt="">
                        <div class="details">
                            <span>${htmlspecialchars(user.username)}</span>
                            <p>${htmlspecialchars(lastMessage)}</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fa fa-circle"></i></div>
                </a>
            `;
        });
    
        const usersList = document.querySelector('.users-list');
        if (usersList) {
            usersList.innerHTML = output;
            console.log('Users list updated');
        } else {
            console.error('Could not find .users-list element');
        }
    
        addClickListenersToUsers();
    }

    function addClickListenersToUsers() {
        console.log('Adding click listeners to users');
        const users = document.querySelectorAll('.users-list a');
        users.forEach(user => {
            user.addEventListener('click', function(e) {
                e.preventDefault();
                selectedUserId = this.getAttribute('data-id');
                const userName = this.querySelector('.details span').textContent;
                const userImage = this.querySelector('img').src;
                console.log('User clicked:', selectedUserId);
                updateChatHeader(userName, userImage);
                getChat(selectedUserId);

                // Remove 'active' class from all users and add it to the selected one
                users.forEach(u => u.classList.remove('active'));
                this.classList.add('active');
            });
        });
    }

    function updateChatHeader(name, imageSrc) {
        const chatHeader = document.querySelector('.chat-header');
        chatHeader.querySelector('img').src = imageSrc;
        chatHeader.querySelector('.name').textContent = name;
        chatHeader.querySelector('.status').textContent = 'Online'; // You may want to update this dynamically
    }

    function getChat(userId) {
        console.log('Getting chat for user ID:', userId);
        fetch('functions/get_chat.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'incoming_id=' + userId
        })
        .then(response => {
            console.log('Response status:', response.status);
            console.log('Response headers:', response.headers);
            return response.text();
        })
        .then(text => {
            console.log('Raw response text:', text);
            try {
                return JSON.parse(text);
            } catch (error) {
                console.error('Error parsing JSON:', error);
                throw new Error('Invalid JSON response: ' + text);
            }
        })
        .then(data => {
            console.log('Parsed chat data:', data);
            if (data.status === 'success') {
                document.querySelector(".chat-box").innerHTML = data.data;
                scrollToBottom();
            } else {
                console.error('Error fetching chat:', data.message, data.debug);
                document.querySelector(".chat-box").innerHTML = 'Error loading chat: ' + data.message;
            }
        })
        .catch(error => {
            console.error('Error getting chat:', error);
            document.querySelector(".chat-box").innerHTML = 'Error loading chat. Please try again.';
        });
    }

    function scrollToBottom() {
        const chatBox = document.querySelector(".chat-box");
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    function sendMessage(e) {
        e.preventDefault();
        const messageInput = document.querySelector('.chat-input input[name="message"]');
        const message = messageInput.value.trim();

        if (!selectedUserId) {
            console.error('No user selected');
            return;
        }

        if (message === '') {
            console.error('Message is empty');
            return;
        }

        const formData = new FormData();
        formData.append('incoming_id', selectedUserId);
        formData.append('message', message);

        fetch('functions/insert_chat.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log('Send message response:', data);
            if (data.status === 'success') {
                messageInput.value = '';
                getChat(selectedUserId);
                loadUsers(); // Refresh user list to update latest message
            } else {
                console.error('Error sending message:', data.message);
            }
        })
        .catch(error => console.error('Error sending message:', error));
    }

    function searchUsers() {
        const searchTerm = document.querySelector('.search input').value.toLowerCase();
        const users = document.querySelectorAll('.users-list a');
        
        users.forEach(user => {
            const username = user.querySelector('.details span').textContent.toLowerCase();
            if (username.includes(searchTerm)) {
                user.style.display = '';
            } else {
                user.style.display = 'none';
            }
        });
    }

    // Load users when the page loads
    loadUsers();

    // Refresh user list every 10 seconds
    setInterval(loadUsers, 10000);

    // Add event listener for sending messages
    document.querySelector('.chat-input').addEventListener('submit', sendMessage);

    // Add event listener for search input
    document.querySelector('.search input').addEventListener('input', searchUsers);

    // Add event listener for search button
    document.querySelector('.search button').addEventListener('click', searchUsers);
});