<?php
include '../conf/conf_pdo.php';
if (isset($_GET['id'])) {
    $delete = $_GET['id'];
    $sql = "DELETE FROM cargories WHERE id =" . $delete;
    $stm = $pdo->query($sql);
    
} 

header('Location: ../layout/categories.php');