<?php
    include 'database.php';
    $id = $_GET['id'];
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        if (!$image !=''){
            $image = $_FILES['image']['name'];
            $tmp_image = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmp_image, 'upload/'. $image);
            $sql = "UPDATE `students` SET `name`='$name',`email`='$email',`image`='$image' WHERE id='$id'";
        }else{
            $sql = "UPDATE `students` SET `name`='$name',`email`='$email' WHERE id='$id'";
        }
        $query = mysqli_query($conn, $sql);
        if($query){
            header('location: index.php');
        }
    }
?>