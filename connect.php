<?php
$conn = new mysqli('localhost', 'root', '', 'kalam_academy');

if(!$conn)
{
    die(mysqli_error($conn));
}
?>