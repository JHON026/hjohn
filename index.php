<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: connexion.php");
    exit(); 
  }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
    <head>
        <title>index</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body> 
        <nav>
            <label class="bobo">Yalgahou</label>
            <h3 style="text-align: center;margin-top: 2px;margin-left: 100px; color: aqua;">Good food with Yalgahou!</h3>
            <ul>
        <li><a href="inscription.php">Diconnecting</a></li>
                <!--les contacts-->
            <li><a href="#squ">About of?</a></li>
            <!--les nourriture-->
                <li><a href="#nourri">Foods</a></li>
                <!--les actueille-->
            <li><a href="index.php">Home</a></li>

            </ul>
        </nav>

         <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre tableau de bord.</p>
    
    </div>
    <h2 id="nourri">The foods</h2>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>
    <p>Nous parlons aujourd"hui beaucoup de choses a lquelle nous nous interessont et voir ce qu'il ce passe merci a votre attention!</p>

    <?php
require('nourri.php');
?>
    </body> 
</html>