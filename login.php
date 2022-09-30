<?php

    session_start();

    $connect = mysqli_connect("localhost","root","kangji875","login");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connect,$username);
    $password = mysqli_real_escape_string($connect,$password);

    $query = "select * from login where username='$username' and password='$password'";
    $result = mysqli_query($connect,$query);
    $data = mysqli_fetch_array($result);

    if(!$data && !$_SESSION['username']) {
        ?>
        <script>
            alert("로그인 실패 !");
            location.href="login.html";
        </script>
        <?php
    }

    $_SESSION['username'] = $data[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Quicksand:300,400|Lato:400,300|Coda|Open+Sans);

        /* 
        * Art by @jofpin 
        * 2014
        */
        body {
        background: #f8f5f0;
        font-family: "Open sans", sans-serif;
        }
        a {
        text-decoration: none;
        color: #3498db;
        }
        .content-profile-page {
        margin: 1em auto;
        width: 44.23em;
        }

        .card {
        background: #fff;
        border-radius: 0.3rem;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        border: .1em solid rgba(0, 0, 0, 0.2);
        margin-bottom: 1em; 
        }

        .profile-user-page .img-user-profile {
            margin: 0 auto;
        text-align: center; 
        }
        .profile-user-page .img-user-profile .profile-bgHome {
            border-bottom: .2em solid #f5f5f5;
        width: 44.23em;
        height: 16em;
        }
        .profile-user-page .img-user-profile .avatar {
            margin: 0 auto;
        background: #fff;
        width: 7em;
        height: 7em;
        padding: 0.25em;
        border-radius: .4em;
        margin-top: -10em;
        box-shadow: 0 0 .1em rgba(0, 0, 0, 0.35);
        }
        .profile-user-page button {
            position: absolute;
        font-size: 13px;
        font-weight: bold;
        cursor: pointer;
        width: 7em; 
        background: #3498db;
        border: 1px solid #2487c9;
        color: #fff;
        outline: none;
        border-radius: 0 .6em .6em 0;
        padding: .80em;
        }

        .profile-user-page button:hover {
        background: #51a7e0;
        transition: background .2s ease-in-out;
        border: 1px solid #2487c9;
        }
        .profile-user-page .user-profile-data, .profile-user-page .description-profile {
        text-align: center;
        padding: 0 1.5em; 
        }
        .profile-user-page .user-profile-data h1 {
        font-family: "Lato", sans-serif;
        margin-top: 0.35em;
        color: #292f33;
        margin-bottom: 0; 
        }
        .profile-user-page .user-profile-data p {
            font-family: "Lato", sans-serif;
        color: #8899a6; 
        font-size: 1.1em;
        margin-top: 0;
        margin-bottom: 0.5em; 
        }
        .profile-user-page .description-profile {
        color: #75787b;
        font-size: 0.98em; 
        }
        .profile-user-page .data-user {
            font-family: "Quicksand", sans-serif;
        margin-bottom: 0;
        cursor: pointer;
        padding: 0;
        list-style: none;
        display: table;
        width: 100.15%; 
        }
        .profile-user-page .data-user li {
        margin: 0;
        padding: 0;
        width: 33.33334%;
        display: table-cell;
        text-align: center;
        border-left: 0.1em solid transparent; 
        }
        .profile-user-page .data-user li:first-child {
        border-left: 0; 
        }
        .profile-user-page .data-user li:first-child a {
        border-bottom-left-radius: 0.3rem; 
        }
        .profile-user-page .data-user li:last-child a {
        border-bottom-right-radius: 0.3rem; 
        }
        .profile-user-page .data-user li a, .profile-user-page .data-user li strong {
        display: block; 
        }
        .profile-user-page .data-user li a {
        background-color: #f7f7f7;
        border-top: 1px solid rgba(242,242,242,0.5);
        border-bottom: .2em solid #f7f7f7;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.4),0 1px 1px rgba(255,255,255,0.4);
        padding: .93em 0;
        color: #46494c; 
        }
        .profile-user-page .data-user li a strong, .profile-user-page .data-user li a span {
        font-weight: 600;
        line-height: 1; 
        }
        .profile-user-page .data-user li a strong {
        font-size: 2em; 
        }
        .profile-user-page .data-user li a span {
        color: #717a7e; 
        }
        .profile-user-page .data-user li a:hover {
        background: rgba(0, 0, 0, 0.05);
        border-bottom: .2em solid #3498db;
        color: #3498db; 
        }
        .profile-user-page .data-user li a:hover span {
        color: #3498db; 
        }

        
        
    </style>
</head>
<body>
<div class="content-profile-page">
   <div class="profile-user-page card">
      <div class="img-user-profile">
        <img class="profile-bgHome" src="https://37.media.tumblr.com/88cbce9265c55a70a753beb0d6ecc2cd/tumblr_n8gxzn78qH1st5lhmo1_1280.jpg" />
        <img class="avatar" src="https://http.cat/207" alt="allan"/>
           </div>
          <button>Follow</button>
          <div class="user-profile-data">
            <h1><?php echo $_SESSION['username']?></h1>
            <p>Web Hacking !</p>
          </div> 
          <div class="description-profile"> Web Hacking || Web Develope</div>
       <ul class="data-user">
        <li><a><strong>61.780</strong><span>Posts</span></a></li>
        <li><a><strong>33.480</strong><span>Followers</span></a></li>
        <li><a><strong>3.546</strong><span>Following</span></a></li>
       </ul>
      </div>
    </div>


</body>
</html>

<!-- Copyright (c) 2022 by Allan (https://codepen.io/Araujoo/pen/yLvegN) -->