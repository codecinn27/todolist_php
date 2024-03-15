<?php
    require "conn.php";

    if(isset($_POST['submit'])){
        $task = $_POST['mytask'];
        $insert = $conn->prepare("INSERT INTO tasks (name) VALUES (:name)");
        $insert->execute(['name' => $task]);

        // redirect to index page
        header("location: index.php");
    }
?>