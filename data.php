<?php
require_once 'function.php';
function addFormToDataBase() {
    if(isset($_POST['name']) && isset($_POST['img']) && isset($_POST['brand']) && isset($_POST['price'])) {
        $nameInput = $_POST['name'];
        $imgInput = $_POST['img'];
        $brandInput = $_POST['brand'];
        $limitedInput = isset($_POST['limited']) ? 1 : 0;
        $priceInput = $_POST['price'];
        $db = getDBConnection();
        $query = $db->prepare("INSERT INTO `playing_cards` (`name`, `brand`, `price`, `img`, `limited`) VALUES (:name, :brand, :price, :img, :limited);");
        $query->execute([
            ':name' => $nameInput,
            ':img' => $imgInput,
            ':brand' => $brandInput,
            ':limited' => $limitedInput,
            ':price' => $priceInput,
        ]);
    }
}
?>