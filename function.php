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
    $query = $db->prepare("SELECT `id`, `name`, `brand`, `price`, `img`, `limited`, `deleted` FROM `playing_cards`;");
    $query->execute();
    $cardSets = $query->fetchAll();
    return $cardSets;
}

function getSpecificDeck($db, $id) {
    $query = $db->prepare("SELECT `id`, `name`, `brand`, `price`, `img`, `limited` FROM `playing_cards` WHERE `id` = $id;");
    $query->execute();
    $deck = $query->fetch();
    return $deck;
}

/**
 * Returns a string containing the HTML to display all the cards given in an array
 * @param $cardSets
 * @return string
 */
function displayAllCards(array $cardSets): string
{
    if (empty($cardSets)) echo "You have no decks in your collection";
    $str = "";
    foreach ($cardSets as $cardSet) {
        if (empty($cardSet)) return false;
        if ($cardSet['deleted'] == 1) continue;
        $str .= "<div class='card__wrapper'>";
        $str .= "<div class='card'>";
        if ($cardSet['limited']) {
            $str .= "<div class='card__limited'>Limited Edition</div>";
        }
        $str .= "<div class='card__img' role='img' style='background-image:linear-gradient(0deg, rgba(254, 236, 233, 0.25), rgba(254, 236, 233, 0.25)),url({$cardSet['img']});'/></div>";
        $str .= "<div class='card__content'>";
        $str .= "<h2 class='card__title'>{$cardSet['name']}</h2>";
        $str .= "<p class='card__brand'>{$cardSet['brand']}</p>";
        $str .= "<span class='card__price'>£{$cardSet['price']}</span>";
        $str .= "<a href='editPage.php?id={$cardSet['id']}'>Edit</a>";
        $str .= "<a href='deleteDatabaseItem.php?id={$cardSet['id']}'>Delete</a>";
        $str .= "</div>";
        $str .= "</div>";
        $str .= "</div>";
    }
    return $str;
}

?>
