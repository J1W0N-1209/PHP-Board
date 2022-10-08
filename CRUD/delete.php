<?php 
    include "lib.php";

    $idx = $_GET['idx'];
    $sql = "delete from post where idx=$idx";
    $result = mysqli_query($connect,$sql);
?>

<script>
    location.href="board.php";
</script>