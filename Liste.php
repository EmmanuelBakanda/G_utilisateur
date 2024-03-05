<?php 
  include "connexion.php";
  if (isset($_GET['Matri_ele'])){
    $Matri_ele=($_GET['Matri_ele']);
    $supprimer=mysqli_query($con,"DELETE FROM eleve WHERE `Matri_ele`='Matri_ele'");
  }

  $selectt= "select * from eleve";
  $query=mysqli_query($con,$selectt);

  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styless.css">
</head>
<body class="body-liste">
    <div class="header">
        <!--<h2>Liste des élèves en Ordre avec les frais.</h2>-->
    </div>
    <div class="tableau" >
        <div class="header-2">

        </div>
       <table>
        <tr class="title">
            <th>Matri</th>
            <th>Nom</th>
            <th>Postnom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Montant</th>
            <th>Montant</th>
            <th>Reste</th>
            <th>Action</th>
        </tr>
        <?php 
          $num=mysqli_num_rows($query);
          if ($num>0) {
            while ($result=mysqli_fetch_assoc($query)) {
                echo"
                <tr class='contenu'>
            <td>".$result['Matri_ele']."</td>
            <td>".$result['Nom_ele']."</td>
            <td>".$result['Postnom_ele']."</td>
            <td>".$result['Prenom_ele']."</td>
            <td>".$result['Sexe_ele']."</td>
            <td>".$result['Montant']."</td>
            <td>".$result['Montant_Total']."</td>
            <td>".$result['Reste']."</td>
            <td>
               <a href='Liste.php?Matri_ele=".$result['Matri_ele']."' class='btn'>Supprimer</a>
            </td>
        </tr>
        ";
            }
          }
        ?>
        
       </table>
    </div>
</body>
</html>