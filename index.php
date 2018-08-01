<?php 
    require_once("config.php");

    // $sql = new Sql();
    // $usuairos = $sql->select("SELECT * FROM tb_usuarios ");

    // echo json_encode($usuairos);
    
    
    $root = new Usuario();

    $root->loadByid(3);

    echo $root;
?>