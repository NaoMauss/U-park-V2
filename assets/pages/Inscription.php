<?php
include '../php/header.php';
?>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/page-css/inscription.css">
    <title>Inscription</title>
</head>
<body>
    <div class="contener">
            <p class="inscription_title">Inscription</p>
            
            <form action="">
                <input type="text" placeholder="Nom de famille">
                <input type="text" placeholder="Prénom">
                <input type="email" placeholder="Adresse e-mail ">
                <input type="password" placeholder="Mot de passe">
                <input class="connexion" type="submit" value="Inscription">
            </form>
        <div class="google_connexion">
            <img src="img/google.svg" alt="">
            <p>Connectez-vous avec Google</p>
        </div>
        <div class="apple_connexion">
            <img src="img/apple.svg" alt="">
            <p>Connectez-vous avec Apple</p>
        </div>
    </div>
    <?php 
        include_once('footer.php')
    ?>
    
</body>
</html>