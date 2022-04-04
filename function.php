<?php
/**
 * Creates connection to the card collection database
 * @return PDO
 */
function getDBConnection():PDO
{
    $db = new PDO('mysql:host=db; dbname=collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * Returns all data required to display all the card sets
 * @param $db
 * @return array
 */
function getAllCards(PDO $db):array
{
    $query = $db->prepare("SELECT `name`, `brand`, `price`, `img`, `limited` FROM `playing_cards`;");
    $query->execute();
    $cardSets = $query->fetchAll();
    return $cardSets;
}

/**
 * Returns a string containing the HTML to display all the cards given in an array
 * @param $cardSets
 * @return string
 */
function displayAllCards(array $cardSets): string
{
    $str = "";
    foreach ($cardSets as $cardSet) {
        $str .= "<div class='card__wrapper'>";
        $str .= "<div class='card'>";
        if ($cardSet['limited']) {
            $str . "<div class='card__limited'>Limited Edition</div>";
        }
        $str .= "<div class='card__img' style='background-image:linear-gradient(0deg, rgba(254, 236, 233, 0.25), rgba(254, 236, 233, 0.25)),url({$cardSet['img']});'/></div>";
        $str .= "<div class='card__content'>";
        $str .= "<h2 class='card__title'>{$cardSet['name']}</h2>";
        $str .= "<p class='card__brand'>{$cardSet['brand']}</p>";
        $str .= "<span class='card__price'>£{$cardSet['price']}</span>";
        $str .= "</div>";
        $str .= "</div>";
        $str .= "</div>";
    }
    return $str;
}
?>
