<?php 
     /*Pour empêcher les utilisateurs d'accéder à d'autres fichiers sans passer par la page de connexion, vous pouvez utiliser la gestion de sessions en PHP. Voici les étapes à suivre :

     1. Sur chaque page où vous souhaitez restreindre l'accès, vous devez inclure le code suivant en haut du fichier PHP, avant tout autre contenu :
     */
     session_start();
     
     // Vérifier si l'utilisateur est connecté
     if (!isset($_SESSION['']) || $_SESSION['logged_in'] !== true) {
         // Rediriger vers la page de connexion
         header("Location:/");
         exit;
     }
     
    //2 Dans votre page de connexion (par exemple, "login.php"), après avoir vérifié les informations d'identification de l'utilisateur, vous pouvez définir une variable de session pour marquer l'utilisateur comme connecté. Par exemple :
    /*
     session_start();
     
     // Vérifier les informations d'identification de l'utilisateur
     if ($credentials_are_valid) {
         // Marquer l'utilisateur comme connecté
         $_SESSION['logged_in'] = true;
     
         // Rediriger vers la page d'accueil ou toute autre page sécurisée
         header("Location: home.php");
         exit;
     } else {
         // Afficher un message d'erreur ou effectuer une autre action appropriée
     }
     ?>
     
     Ainsi, lorsque l'utilisateur accède à une page restreinte, le code vérifiera d'abord si la variable de session $_SESSION['logged_in'] est définie et évaluée à true. Si ce n'est pas le cas, l'utilisateur sera redirigé vers la page de connexion.
     
     Assurez-vous de placer le code de vérification de session sur toutes les pages que vous souhaitez protéger, y compris les fichiers d'inclusion (par exemple, les en-têtes, les pieds de page, etc.)
*/ss
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/logo-sonas.png">
    <title>Acceuil</title>
</head>
<body>
    <header >
        <img src="image/logo-sonas.png" class="logo" alt="">
        <div class="menutoggle" onclick="toggleMenu();"></div>
        <ul class="navbar">
            <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
            <li><a href="#banniere" onclick="toggleMenu();">Apropos</a></li>
            <li><a href="#banniere" onclick="toggleMenu();">Payement</a></li>
            <li><a href="Liste.html" onclick="toggleMenu();">Liste</a></li>
            
        </ul>
    </header>
    <section class="banniere" id="banniere">
        <div class="container">
            <h2>Assurance Incendie</h2>
            <p class="p1">Pour qu’on puisse déclarer qu’il y a incendie, il faut qu’il y ait présence de flamme ou du feu.</p>
            
            <a href="#apropos"><input type="submit" class="explore" value="Explore Now!"></a>
        </div>
    </section>
    <div class="container-1">
        <h4 class="mt-3">Description du produit</h4>
        <p class="p3">

          Pour qu’on puisse déclarer qu’il y a incendie, il faut qu’il y ait présence de flamme ou du <br>Cette assurance est rendue obligatoire par la loi à l’article 210 du Code des assurances.
          <br>
          L’assurance incendie a pour objet de garantir l’assuré contre les dommages matériels causer aux biens assurés par<br> un evenement garanti ainsi que les frais et pertes qui en résulte.
          <br>

          Ils couvrent égalament les conséquences pécunières<br> des responsabilités encourues par l’assuré du fait du sinistre.

        </p>
    </div>
</hr>
        <div class="container-img">
            <img src="image/img-inc-02.jpg" alt="">
            <img src="image/img-inc-01.jpg" alt="">
            <img src="image/img-inc-02.jpg" alt="">
    </div>
    <div class="container-4">
    <div class="objet">
        <h4>
            Objet
        </h4>
        <p class="">
            L’assurance contre l’incendie couvre le bâtiment, et s’il échait, les biens contenus dans celui-ci,contre la foudre, les explosions, les dégâts d’électricité, la chute d’avions.
            
            Sont visés par la loi, les bâtiments à usage administratif, culturel, sanitaire ou scolaire, salles de spectacles et / ou loisirs, les immeubles de rapport, ceux à usage industriel, agro-industriel, artisanal ou commercial en général.
            
            Quoi que facultative, l’assurance des bâtiments privés s’avère indispensable, compte tenu du risque d’incendie auquel ils sont exposés. L’assurance contre l’incendie couvre par ailleurs la responsabilité civile de l’assuré pour les dommages matériels et corporels causés aux tiers, le chômage immobilier, les frais de pompiers.
            
            Certains risques étant exclus de la couverture incendie, il appartient donc à l’assuré d’en  obtenir la liste au moment de la souscription.
        </p>
    </div>

    <div class="Mission">
        <h4>
           Mission
        </h4>
        <p class="">
            La société nationale d'assurence SONAS Sa a pour mission
La vente des assurances et le règlement des sinistres; cette vente des assurances, fait intervenir 3 personnes ci -après : La Société Nationale d'Assurance, elle-même et ses agences; Les courtiers avec les maisons de courtage; Les producteurs indépendants.
        </p>
    </div>
    </div>
    <div class="container-5">
        <p>N'hésiter pas à nous Contacter au cas d'un Problème.</p>
        <a href=""><input type="submit" value="Veuillez nous Contacter!"></a>

    </div>
    <footer>
        <div>
            <p><span class="s">SO</span><span class="n">N</span><span class="A">AS</span>, Copyright<span class="copy"> &copy 2023</span></p></div>
        </div>
    </footer>
</body>
</html>
<script>
      function toggleMenu(){
          const menutoggle=document.querySelector('.menutoggle');
          const navbar= document.querySelector('.navbar');
          menutoggle.classList.toggle('active');
          navbar.classList.toggle('active');
      }
</script>

