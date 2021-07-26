<?php
$con= mysqli_connect('localhost','root','','crud') or die(mysqli_error($con) );   //create connection
$id = $_GET['id'];
$query = "SELECT * from users where id='$id'";                      
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);  
if(isset($_POST['valider']))
{
  
    extract(($_POST));  //extraire les données de la form
    $query="UPDATE users set nom='$nom', prenom='$prenom' where id='$id'";
    mysqli_query($con,$query) or die(mysqli_error($con));
    header(("location:index.php"));
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div  class="container">
    <form method="post">
    <table>
        <tr>
            <th>ID</th> <th><?=$row['id']?> </th>
        </tr>
        <tr>
            <td>Nom</td><td><input type="text" id="nom" name="nom" value="<?=$row['nom'] ?>"> </td>
        </tr>
        <tr>
            <td>prenom</td><td><input type="text" id="prenom" name="prenom" value="<?=$row['prenom'] ?>"> </td>
        </tr>
        <tr>
             <td>
              <a class="btn btn-primary" href="index.php">Retour</a>
              <input class="btn btn-primary" type="submit" value="valider" name="valider">
             </td>
        </tr>

    </table>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
           
</body>
</html>
