<?php
    include "lib.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connect,$username);
    $password = mysqli_real_escape_string($connect,$password);

    $query = "INSERT INTO login(username,password) VALUES('$username','$password')";
    $result = mysqli_query($connect,$query);

    if(!$result) {
        ?> 
        <script>alert("회원가입 오류!"); location.href="sign_up.html"</script>
        <?php
    }
    else {
        ?>
        <script>location.href="login.html"</script>
        <?php
    }
    
?>