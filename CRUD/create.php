<?php
    include "lib.php";

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $contents = $_POST['contents'];

        $sql = "insert into post (title,contents) values('$title','$contents')";
        $result = mysqli_query($connect,$sql);

        if($result) {
            ?>
            <script>
                location.href="board.php";
            </script>
            <?php
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Enter your Name" name="title" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Contents</label>
                <input type="text" class="form-control" placeholder="Enter your Password"
                name="contents" autocomplete="off" style="height:100px;">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>