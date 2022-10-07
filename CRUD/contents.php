<?php
    include "lib.php";

    if(isset($_GET['idx'])) {
        $idx = $_GET['idx'];
        $sql = "select * from post where idx=$idx";

        $result = mysqli_query($connect,$sql);
        $data = mysqli_fetch_array($result);
    }
    else {
        die("idx 값을 넣어주세요 :)");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <style>
        .btn{
            text-decoration: none;
            font-size:1rem;
            color:white;
            padding:10px 20px 10px 20px;
            margin:20px;
            display:inline-block;
            border-radius: 10px;
            transition:all 0.1s;
            text-shadow: 0px -2px rgba(0, 0, 0, 0.44);
            
        }
        .btn:active{
            transform: translateY(3px);
        }
        .btn.blue{
            background-color: #ff521e;
            border-bottom:5px solid #c1370e;
        }
    </style>
</head>
<body>
    <div class="container" style="text-align: center;">
        <h1 style="color:gray">PHP CRUD Board</h1>
        <p><strong>번호 : <?= $data['idx'] ?></strong></p>
        <p><strong>제목 : <?= $data['title'] ?></strong> </p>
        <p><strong>내용 : <?= $data['contents'] ?></strong> </p>

        <a class="btn blue" href=""><strong>Delete</strong></a>
    </div>
</body>
</html>