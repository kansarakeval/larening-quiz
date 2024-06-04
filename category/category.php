<?php 
    include("../connection.php");

    $query ="SELECT * FROM category";
    $res = mysqli_query($conn,$query);

    //Delete
 
    
    if(isset($_GET['id']))
    {
        $id =$_GET['id'];
        $queryDelete = "DELETE FROM category WHERE id='$id'" ;
        mysqli_query($conn,$queryDelete);
        header("Location:category.php");
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
     <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Category</th> 
                <th>Delete</th>
                <th>Update</th>
            </tr>

        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($res)) {?>
                <tr>
                    <td><?php print($data['id']);?></td>
                    <td><?php print($data['category']);?></td>
                    <td><a href="/LARENING QUIZ/category/category.php?id=<?php print($data['id']);?>">delete</a></td>
                    <td><a href="/LARENING QUIZ/category/cupdate.php?id=<?php print($data['id']);?>">Update</a></td>
                </tr>
            <?php }?>

        </tbody>
     </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>