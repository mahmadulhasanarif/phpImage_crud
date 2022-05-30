
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php
    include 'database.php';
    $id = $_POST['id'];
    $sql = "SELECT `id`, `name`, `email`, `image` FROM `students` WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    while($result = mysqli_fetch_assoc($query)){
?>
    <div class="container">
        <div style="margin-top: 25px;" class="col-lg-6 m-auto ">
        <div class="card-header bg-success">
            <h3 class="text-center text-white ">Create Student Data</h3>
        </div>
        <form action="update.php?id=<?=$result['id']?>" method="POST"  enctype="multipart/form-data">
            <div class="card">
                <input type="hidden" name="id" value="<?=$result['id'];?>">
                <label>Name: </label>
                <input type="text" name="name" class="form-control" value="<?=$result['name'];?>"><br>
                <label>Email: </label>
                <input type="email" name="email" class="form-control" value="<?=$result['email'];?>">
                <img src="upload/<?=$result['image']?>" alt="" width="100px">
                <label>Image: </label>
                <input type="file" name="image" class="form-control" value="<?=$result['image'];?>">
            </div>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
        </div>
    </div>
    <?php
}
?>
</body>

</html>
