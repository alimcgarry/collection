<?php
    require_once 'function.php';
    $db = getDBConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playing Card Collection</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9b98b550ee.js" crossorigin="anonymous"></script>
    <script defer src="script.js"></script>
</head>
<body>
<header class="container">
    <h1 class="header__title">My Playing Cards</h1>
    <button class="header__btn">Add Deck</button>
</header>
<div class="errors container">
        <?php
        if (isset($_GET['error'])) {
            echo "<div class='errors__content'>";
            echo "<h1 class='error__title'>Oops...</h1>";
            echo "<p class='error__subtitle'>There was a problem submitting your form, {$_GET['error']}</p>";
            if ($_GET['action'] === 'edit') {
                echo "<a class='link' href='editPage.php?id={$_GET['id']}'><button class='error__btn btn--edit'>Try Again</button></a>";
            } elseif ($_GET['action'] === 'add') {
                echo "<button class='error__btn btn--add'>Try Again</button>";
            }
            echo "</div>";
        }
        ?>
</div>

<div class="container">
    <form class='sort__form' method="get" action="sortBy.php">
    <select name="sort" class="sort__select">
        <option value="default">Default</option>
        <option <?php if (isset($_GET['sort'])  && $_GET['sort'] == "high_to_low") echo "selected"?> value="high_to_low">Price, High to Low</option>
        <option <?php if (isset($_GET['sort'])  && $_GET['sort'] == "low_to_high") echo "selected"?> value="low_to_high">Price, Low to High</option>
    </select>
        <input value="Sort By" type="submit">
    </form>
</div>

<main>
    <div class="container grid">
        <?php
        if (isset($_GET['sort'])  && $_GET['sort'] == 'default') {
            $cardSets = getAllCards($db);
        } elseif(isset($_GET['sort'])  && $_GET['sort'] == 'low_to_high') {
            $cardSets = getAllCardsPriceAscending($db);
        } else {
            $cardSets = getAllCardsPriceDescending($db);
        }

        $cardSetsString = displayAllCards($cardSets);
        echo $cardSetsString;
        ?>
    </div>
</main>

<div class="modal hidden">
    <div class="form__container">
        <div class="form__header">
            <h1 class="form__title">Add a Deck</h1>
            <p class="form__subtitle">Use the form below to add another deck of cards to your collection</p>
        </div>
        <form method="post" class="form" action="addToDatabase.php">
            <input name="action" type="hidden" value="add">
            <label>Name
            <input name="name" type="text"/>
            </label>
            <label>Image Url
            <input name="img" type="url"/>
            </label>
            <label>Brand
            <input name="brand" type="text"/>
            </label>
            <label class="checkbox">Limited Edition
            <input name="limited" type="checkbox"/>
            </label>
            <label>Price
            <input name="price" type="number"/>
            </label>
            <input type="submit">
        </form>
    </div>
</div>
</body>
</html>