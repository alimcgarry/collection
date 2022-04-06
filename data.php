<?php
require_once 'function.php';

/**
 * Takes the user's input and trims it, then removes potentially malicious HTML
 * @param string $userInput
 * @return string
 */
function cleanUserInput(string $userInput): string {
    $trimmedUserInput = trim($userInput);
    $cleanedUserInput = htmlspecialchars($trimmedUserInput);
    return $cleanedUserInput;
}



/**
 * Checks that all form inputs are set, then add's form data to mySQL database
 * @return NULL
 */
function addFormToDataBase() {
    if(isset($_POST['name']) && isset($_POST['img']) && isset($_POST['brand']) && isset($_POST['price'])) {
        $nameInput = cleanUserInput($_POST['name']);
        if (strlen($nameInput) == 0) {
            header('Location: index.php?error=name cannot be empty!');
            exit();
        }
        $imgInput = cleanUserInput($_POST['img']);
        $brandInput = cleanUserInput($_POST['brand']);
        if (strlen($brandInput) == 0) {
            header('Location: index.php?error=brand cannot be empty!');
            exit();
        }
        $limitedInput = isset($_POST['limited']) ? 1 : 0;
        $priceInput = $_POST['price'];
        if (!is_numeric($priceInput) ||  $priceInput <= 0) {
            header('Location: index.php?error=price must be a number!');
            exit();
        }
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
    header("Location: index.php");
}
?>