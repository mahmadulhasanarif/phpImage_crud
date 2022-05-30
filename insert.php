<?php
    include 'database.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_image, "upload/". $image);

        $sql = "INSERT INTO `students`( `name`, `email`, `image`) VALUES ('$name','$email','$image')";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            header('location: index.php');
        }
    }
?>