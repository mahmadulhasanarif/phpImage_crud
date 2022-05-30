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
    <div class="container ">
        <div class="col-lg-6 m-auto "><br><br>
        <div class="card-header bg-success">
            <h3 class="text-center text-white ">Create Student Data</h3>
        </div>
        <form action="insert.php" method="post"  enctype="multipart/form-data">
            <div class="card">
                <label>Name: </label>
                <input type="text" name="name" class="form-control"><br>
                <label>Email: </label>
                <input type="email" name="email" class="form-control">
                <label>Image: </label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
        </div>
    </div>
</body>

</html>