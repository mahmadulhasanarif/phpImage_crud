<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div style="margin-top: 60px;" class="col-lg-12">
        <div class=" bg-success">
            <h1 class="text-center text-white col-lg-12">Student Data Table <a href="create.php" style="float: right; margin-top: 8px;" class="text-center btn btn-info ">Create Student Data</a></h1>
            </div>
            <table class="table table-striped table-success">
                <tr class="text-center">
                    <th style="width: 10%;">ID</th>
                    <th style="width: 15%;">Name</th>
                    <th style="width: 25%;">Email</th>
                    <th style="width: 30%;">Image</th>
                    <th style="width: 20;">Action</th>
                </tr>
                <tbody>
                <?php
                    include 'database.php';
                    $sql = "SELECT * FROM `students`";
                    $query = mysqli_query($conn, $sql);
                    while($result = mysqli_fetch_assoc($query)){
                ?>
                    <tr class="text-center">
                        <td><?=$result['id']?></td>
                        <td><?=$result['name']?></td>
                        <td><?=$result['email']?></td>
                        <td>
                            <img src="upload/<?=$result['image']?>" style="width: 70px; height: 35px">
                        </td>
                        <td class="row">
                            <div class="col-lg-6">
                            <form action="edit.php" method="post">
                                <input type="hidden" name="id" value="<?= $result['id'] ?>">
                                <button class="btn btn-warning" type="submit">Edit</button>
                            </form>
                            </div>
                            <div class="col-lg-6">
                            <a class="btn btn-danger" href="delete.php?id=<?=$result['id']?>">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php     
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>