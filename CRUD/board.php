<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <a href="create.php"><button class="btn btn-primary my-5">Create</button></a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Num</th>
                    <th scope="col">Title</th>
                    <th scope="col">User</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "lib.php";

                    $sql = "select * from post order by idx desc";
                    $result = mysqli_query($connect,$sql);

                    while($data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> <?= $data["idx"] ?> </td>
                    <td> <a href="#"><?= $data["title"] ?></a> </td>
                    <td> <?= $_SESSION["user"] ?> </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>