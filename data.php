<?php
require_once 'function.php';
function addFormToDataBase() {
    if(isset($_POST['name']) && isset($_POST['img']) && isset($_POST['brand']) && isset($_POST['price'])) {
        $name = $_POST['name'];
        $img = $_POST['img'];
        $brand = $_POST['brand'];
        $limited = isset($_POST['limited']) ? 1 : 0;
        $price = $_POST['price'];
        $db = getDBConnection();
        $query = $db->prepare("INSERT INTO `playing_cards` (`name`, `brand`, `price`, `img`, `limited`) VALUES ('$name', '$brand', '$price', '$img', '$limited');");
        $query->execute();
    }
}
?>