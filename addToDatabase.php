<?php
    require_once 'data.php';
//    addFormToDataBase();
    $validData = validateFormData();
    addToDatabase($validData);
?>