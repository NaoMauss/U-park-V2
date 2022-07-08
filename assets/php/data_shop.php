<?php
    $inserte = $pdo->prepare('SELECT * FROM shop');
    $inserte->execute();
    $shop = $inserte->fetchAll(PDO::FETCH_ASSOC);

    foreach($shop as $shop) {

        // s pour shop bande d'idiots
        $sid = $shop['shopId'];
        $sname = $shop['shopName'];
        $spic = $shop['shopPic'];
        $splace = $shop['shopAdress'];

        echo "<div class="result">
        <div class="logo_recent">
            <img src="$spic" alt="">
        </div>
        <div class="texte">
            <div style="margin-bottom: 5px;">$sname</div>
            <div>$splace</div>
        </div>
        </div>";
    }

?>