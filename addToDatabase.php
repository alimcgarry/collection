<?php
    require_once 'data.php';
    $validData = validateFormData();
    addToDatabase($validData);
?>