<?php 
    require_once("config.php");

    $sql = new Sql();
    $usuairos = $sql->select("SELECT * FROM tb_usuarios ");

    echo json_encode($usuairos); 
?>