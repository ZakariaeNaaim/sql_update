<?php
$con= mysqli_connect('localhost','root','','crud') or die(mysqli_error($con));   //create connection
$id = $_GET['id'];
$query = "SELECT * from users where id='$id'";                      
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);  // 7a9ach katreturni ghir une ligne
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        h1{
            margin-top:7%;
            margin-bottom:100px;
            margin-left:40%;
        }

    </style>
</head>
<body>
     
<div class="container">
    <h1>CRUD</h1>
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>prenom</th>
            <th></th>
        </tr>
   
        <tr>
            <td><?=$row['id']?></td>  <!-- daba n afficher ga3 les donne li bghit  -->
            <td><?=$row['nom']?></td>
            <td><?=$row['prenom']?></td>
        </tr>
        <tr>
    </table>

              <a class="btn btn-primary" href="index.php">Return</a>
            

       
     </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
