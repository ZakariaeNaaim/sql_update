<?php
$con= mysqli_connect('localhost','root','','crud') or die(mysqli_error($con) );   //create connection

if(isset($_POST['valider']))
{   if(!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['prenom']))   //check if inputs are empty
    {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];

        $query = "INSERT into Users values('$id','$nom','$prenom) ";
        $run = mysqli_query($con,$query) or die(mysqli_error($con));
        if($run){
            echo "Utilisateur est ajouté";
        }
        else{
            echo "utilisateur est non ajouté";
        }
} else{
    echo "all fields are required";
}}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update User</title>
</head>
<body>
    <form style="margin-top:15%" action="" method="post">
        <div class="container">
  <div class="form-group">
    <label for="exampleFormControlInput1">ID</label>
    <input type="text" class="form-control" id="id" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Nom</label>
    <input type="text" class="form-control" id="nom" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">prenom</label>
    <input type="text" class="form-control" id="prenom" >
  </div>
  
             <div>
              <a style="margin-top:10px" class="btn btn-primary" href="index.php">Retour</a>
              <input style="margin-top:10px" class="btn btn-primary" type="submit" value="valider" name="valider">
              </div>
    </div>
</form>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
           
</body>
</html>