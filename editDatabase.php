<?php
require_once 'data.php';
$validData = validateFormData();
editDatabase($validData);
?>