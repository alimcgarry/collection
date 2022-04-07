<?php
    require_once 'function.php';
    $db = getDBConnection();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        header("Location: index.php");
    }
    
    $id = $_GET['id'];
    $deck = getSpecificDeck($db, $id);
    $checked = $deck['limited'] ? "checked" : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playing Card Collection</title>
    <link rel="stylesheet" href="style.css">
    <script async src="script.js"></script>
</head>
<body>
<div class="edit">
    <div class="form__container">
        <div class="form__header">
            <h1 class="form__title">Edit Your Deck</h1>
            <p class="form__subtitle">Use the form below to edit the information about your deck</p>
        </div>
        <form method="post" class="form" action="editDatabase.php">
            <input name="action" type="hidden" value="edit">
            <input name="id" type="hidden" value="<?=$id?>"/>
            <label>Name
            <input name="name" type="text" value="<?=$deck['name']?>"/>
            </label>
            <label>Image Url
            <input name="img" type="url" value="<?=$deck['img']?>"/>
            </label>
            <label>Brand
            <input name="brand" type="text" value="<?=$deck['brand']?>"/>
            </label>
            <label class="checkbox">Limited Edition
            <input name="limited" type="checkbox" <?=$checked?>/>
            </label>
            <label>Price
            <input name="price" type="number" value="<?=$deck['price']?>"/>
            </label>
            <input type="submit">
        </form>
    </div>
</div>
</body>
</html>