<?php
$con= mysqli_connect('localhost','root','','crud') or die(mysqli_error($con));   //create connection
$query = "select * from users";                      
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

if(isset($_GET['id'])){     // jiha khasa b delete
    $id=$_GET['id'];
    $query="DELETE from users where id='$id'";
    mysqli_query($con,$query) or die(mysqli_error($con));
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        h1{margin-top:7%;
            margin-bottom:100px;
            margin-left:40%;
        }

    </style>
</head>
<body>

    <form action="" method="GET">
    <div class="container">
    <h1>CRUD</h1>
    
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>prenom</th>
            <th>Actions</th>
        </tr>
     <?php 
     foreach ($rows as $row) { ?>
        <tr>
            <td><?=$row['id']?></td>  <!-- appel dial columns  -->
            <td><?=$row['nom']?></td>
            <td><?=$row['prenom']?></td>
            <td>
              <a class="btn btn-primary" href="affichage.php?id=<?=$row['id']?>">View</a>  <!-- sayabna lien kidina page afficher oflien kitzad flakhar id dial employe li warakna 3Lih-->
              <a class="btn btn-warning" href="edit.php?id=<?=$row['id']?>">Update</a>
              <a class="btn btn-danger" href="index.php?id=<?=$row['id']?>" onclick=" return confirm('are you sure?')">Delete</a>  <!-- onclick zadnaha bach ndiru confirmation-->
              <a class="btn btn-primary" href="ajouter.php">Ajouter</a>
            </td>
        </tr>
       
            
      <?php } ?>
      </div></form>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>