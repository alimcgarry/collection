<?php
    $db = new PDO('mysql:host=db; dbname=collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT * FROM `playing_cards`;");
    $query->execute();
    $cardSets = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playing Card Collection</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>My Playing Cards</h1>
</header>
<main>
    <div class="container grid">
        <?php
            foreach ($cardSets as $cardSet) {
                echo "<div class='card__wrapper'>";
                echo "<div class='card'>";
                if ($cardSet['limited']) {
                    echo "<div class='card__limited'>Limited Edition</div>";
                }
                echo "<div class='card__img' style='background-image:linear-gradient(0deg, rgba(254, 236, 233, 0.25), rgba(254, 236, 233, 0.25)),url({$cardSet['img']});'/></div>";
                echo "<div class='card__content'>";
                echo "<h2 class='card__title'>{$cardSet['name']}</h2>";
                echo "<p class='card__brand'>{$cardSet['brand']}</p>";
                echo "<span class='card__price'>£{$cardSet['price']}</span>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        ?>
    </div>
</main>
</body>
</html>