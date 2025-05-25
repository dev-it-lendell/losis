<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';
?>

<link rel="stylesheet" href="../assets/css/messaging.css">

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
            <div class="wrapper">
                <section class="chat-area">
                  <header>
                    <?php
                        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                        $sql = mysqli_query($conn, "SELECT a.user_id, CONCAT(a.fname, ' ', a.lname, ' ', a.suffix) AS username, a.team_, a.user_image, b.client_id, b.client_name, b.acronym_, b.site_, b.supervisor_, b.team_, c.user_id, c.messagestatus_, d.supervisor_id, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS userfullname, d.team_ FROM tbl_client AS a LEFT JOIN client_list AS b ON a.team_ = b.team_ LEFT JOIN tbl_users AS c ON a.user_id = c.user_id LEFT JOIN supervisor_list AS d ON b.team_ = d.team_ WHERE a.user_id = '{$user_id}' GROUP BY a.user_id UNION ALL SELECT a.user_id, CONCAT(a.fname, ' ', a.lname, ' ', a.suffix) AS username, a.assigned_team, a.user_image, b.client_id, b.client_name, b.acronym_, b.site_, b.supervisor_, b.team_, c.user_id, c.messagestatus_, d.supervisor_id, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS userfullname, d.team_ FROM tbl_supervisor AS a LEFT JOIN client_list AS b ON a.assigned_team = b.team_ LEFT JOIN tbl_users AS c ON a.user_id = c.user_id LEFT JOIN supervisor_list AS d ON b.supervisor_ = d.supervisor_id WHERE a.user_id = '{$user_id}' GROUP BY a.user_id UNION ALL SELECT a.user_id, CONCAT(a.fname, ' ', a.lname, ' ', a.suffix) AS username, a.assigned_team_one, a.user_image, b.client_id, b.client_name, b.acronym_, b.site_, b.supervisor_, b.team_, c.user_id, c.messagestatus_, d.operations_id, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS userfullname, d.team_one FROM tbl_operations AS a LEFT JOIN client_list AS b ON a.assigned_team_one = b.team_ LEFT JOIN tbl_users AS c ON a.user_id =  c.user_id LEFT JOIN operations_list AS d ON CONCAT(a.fname, ' ', a.lname, ' ', a.suffix) = CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) WHERE a.user_id = '{$user_id}' GROUP BY a.user_id");
                        if (mysqli_num_rows($sql) > 0) {
                            $row = mysqli_fetch_assoc($sql);
                        } else {
                            header("location: user_messaging.php");
                        }
                        if ($row['messagestatus_'] == '1') {
                            $msgstatus = "Active Now";
                        } else if ($row['messagestatus_'] == '0') {
                            $msgstatus = "Offline Now";
                        } else {
                            $msgstatus = "";
                        }
                    ?>
                    <a href="user_messaging.php" class="back-icon"><i class="fa fa-arrow-left"></i></a>
                    <?php
                        echo '<img src="../profilepictures_/'. $row['user_id'].'/'. $row['user_image'].'" alt="">'
                    ?>
                    <div class="details">
                      <span><?php echo $row['username'] ?></span>
                      <p><?php echo $msgstatus; ?></p>
                    </div>
                  </header>
                  <div class="chat-box">
                  </div>
                  <form action="#" class="typing-area">
                    <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                    <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
                    <button><i class="fa fa-paper-plane-o"></i></button>
                  </form>
                </section>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const form = document.querySelector(".typing-area"),
    incoming_id = form.querySelector(".incoming_id").value,
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector("button"),
    chatBox = document.querySelector(".chat-box");

    form.onsubmit = (e)=>{
        e.preventDefault();
    }

    inputField.focus();
    inputField.onkeyup = ()=>{
        if(inputField.value != ""){
            sendBtn.classList.add("active");
        }else{
            sendBtn.classList.remove("active");
        }
    }

    sendBtn.onclick = ()=>{
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "functions/insert_chat.php", true);
        xhr.onload = ()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
              if(xhr.status === 200){
                  inputField.value = "";
                  scrollToBottom();
              }
          }
        }
        let formData = new FormData(form);
        xhr.send(formData);
    }
    chatBox.onmouseenter = ()=>{
        chatBox.classList.add("active");
    }

    chatBox.onmouseleave = ()=>{
        chatBox.classList.remove("active");
    }

    setInterval(() =>{
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "functions/get_chat.php", true);
        xhr.onload = ()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
              if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                  }
              }
          }
        }
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("incoming_id="+incoming_id);
    }, 500);

    function scrollToBottom(){
        chatBox.scrollTop = chatBox.scrollHeight;
    }
</script>

<?php
    include 'modals.php';
?>