<?php
    session_start();
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=g_pro', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8', PDO::ERRMODE_WARNING));
    }
    catch(PDOException $e)
    {
        die("une erreur");
    }
    $nom= ($_POST["nom"]);
    $mdp= ($_POST["mdp"]);
        $req_user = $bdd->prepare("SELECT * FROM login WHERE nom = ? AND mdp = ?");
        $req_user->execute(array($nom, $mdp));
        $user_exist = $req_user->rowCount();
           
         $user_info = $req_user->fetch();
         $_SESSION['nom'] = $user_info['nom'];
         $_SESSION['mdp'] = $user_info['mdp'];
         if ($user_info) {
            header("Location:Acceuil.php?id_user=".$_SESSION['id_user']);
         } else {
            echo'error';
         }
     
?>