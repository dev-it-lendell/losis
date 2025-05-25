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
				<section class="users">
					<header>
						<div class="content">
			                <?php 
			                    echo '<img src="../profilepictures_/'.$admid.'/'.$adm_userimage.'" /alt="">';
			                ?>
			                <div class="details">
					            <span><?php echo $adm_name; ?></span>
					            <p><?php echo $admmsgstatus; ?></p>
			                </div>
						</div>
					</header>
					<div class="search">
				        <span class="text">Select an user to start chat</span>
				        <input type="text" placeholder="Enter name to search...">
				        <button><i class="fa fa-search"></i></button>	
					</div>
					<div class="users-list"></div>
				</section>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    const searchBar = document.querySelector(".search input"),
    searchIcon = document.querySelector(".search button"),
    usersList = document.querySelector(".users-list");

    searchIcon.onclick = ()=>{
      searchBar.classList.toggle("show");
      searchIcon.classList.toggle("active");
      searchBar.focus();
      if(searchBar.classList.contains("active")){
        searchBar.value = "";
        searchBar.classList.remove("active");
      }
    }

    searchBar.onkeyup = ()=>{
      let searchTerm = searchBar.value;
      if(searchTerm != ""){
        searchBar.classList.add("active");
      }else{
        searchBar.classList.remove("active");
      }
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "functions/search_users.php", true);
      xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
              let data = xhr.response;
              usersList.innerHTML = data;
            }
        }
      }
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.send("searchTerm=" + searchTerm);
    }

    setInterval(() =>{
      let xhr = new XMLHttpRequest();
      xhr.open("GET", "functions/users_list.php", true);
      xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
              let data = xhr.response;
              if(!searchBar.classList.contains("active")){
                usersList.innerHTML = data;
              }
            }
        }
      }
      xhr.send();
    }, 500);
</script>