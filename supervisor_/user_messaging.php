<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';
?>

<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Messaging</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Messaging</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="messaging-container">
                <div class="users-list-container">
                    <div class="search">
                        <input type="text" placeholder="Search Messenger">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="users-list">
                        <!-- Your user list will be populated here -->
                    </div>
                </div>
                <div class="chat-container">
                    <div class="chat-header">
                        <img src="../images/icons/default.png" alt="">
                        <div class="user-info">
                            <span class="name">Select a user</span>
                            <span class="status">to start chatting</span>
                        </div>
                    </div>
                    <div class="chat-box">
                        <!-- Conversation will be loaded here -->
                    </div>
                    <form action="#" class="chat-input">
                        <input type="text" class="incoming_id" name="incoming_id" hidden>
                        <input type="text" name="message" class="input-field" placeholder="Aa" autocomplete="off">
                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'modals.php';
?>