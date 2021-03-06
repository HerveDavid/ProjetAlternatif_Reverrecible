<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Vues/Style/main.css">
    <title>Points de collecte - Reverrecible</title>
  </head>
  <body>
    <header>
      <nav>
      <ul>
        <li id="logoMenu"><a href="mainCTRL.php"><img src="../Vues/Style/Logo.png" alt="logo"></a></li>
        <li><a href="quisommesnousCTRL.php"><h3>QUI SOMMES NOUS ?</h3></a></li>
        <li><a href="consigneCTRL.php"><h3>CONSIGNE</h3></a></li>
        <li><a href="contactCTRL.php"><h3>CONTACT</h3></a></li>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn"><h3>AUTRES</h3></a>
          <div class="dropdown-content">
            <a href="donsCTRL.php">DONS</a>
            <a href="inventaireDesProduitsConsignesCTRL.php">INVENTAIRE DES PRODUITS CONSIGNÉS</a>
            <a href="#">DÉFI RAMÈNE TA BOUTEILLE !</a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="separateurTop"></div>
    </header>
    <h1>INVENTAIRE DES PRODUITS CONSIGNES</h1>
    <div class="separateur"></div>
    <article>
      <div class="sousArticle">
        <p>Cartographie reprenant les produits consignés que vous nous avez communiqué via le formulaire ci-dessous. Cette carte est enrichie au fur et à mesure que les réponses nous parviennent. Merci à vous !</p>
        <iframe id="cartePoints" src="https://www.google.com/maps/d/embed?mid=1JTCHzdf6wfmZNGgoP9sYmGgFzMy48SMe" width="640" height="480"></iframe>
      </div>
    </article>
    <?php require 'footer.php' ?>
  </body>
</html>
