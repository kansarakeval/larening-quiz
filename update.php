<?php
    include("connection.php");
    @$id = $_GET['id'];

    if($id!=null)
    {
        $query ="SELECT * FROM quiz WHERE id = '$id'";
        $res = mysqli_query($conn,$query);

        $data = mysqli_fetch_assoc($res);
    }

    if(isset($_POST['update']))
    {
        $qus = $_POST['qus'];
        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];
        $D = $_POST['D'];
        $category = $_POST['category'];

        $uQuery ="UPDATE quiz SET qus='$qus',A='$A',B='$B',C='$C',D='$D',category='$category' WHERE id= '$id'";
        $res = mysqli_query($conn,$uQuery);

        if($res)
        {
            header("Location:quiz.php");
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larening Quiz Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <form style="padding:20px" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quiz Qus</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="qus" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quiz A</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="A" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quiz B</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="B" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quiz C</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="C" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quiz D</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="D" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product Category</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="category" aria-describedby="emailHelp">
        </div>
       
        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
