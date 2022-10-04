<?php
    include "lib.php";

    if(isset($_GET['idx'])) {
        $idx = $_GET['idx'];
        $sql = "select * from post where idx=$idx";

        $result = mysqli_query($connect,$sql);
        $data = mysqli_fetch_array($result);

        print_r($data);
    }
    else {
        die("idx 값을 넣어주세요 :)");
    }


?>