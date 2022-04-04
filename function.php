<?php
function getDBConnection()
{
    $db = new PDO('mysql:host=db; dbname=collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

$db = getDBConnection();

function getAllCards($db)
{
    $query = $db->prepare("SELECT `name`, `brand`, `price`, `img`, `limited` FROM `playing_cards`;");
    $query->execute();
    $cardSets = $query->fetchAll();
    return $cardSets;
}

function displayAllCards($cardSets)
{
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
}
?>
