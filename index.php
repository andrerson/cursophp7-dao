<?php 
    require_once("config.php");

    // $sql = new Sql();
    // $usuairos = $sql->select("SELECT * FROM tb_usuarios ");

    // echo json_encode($usuairos);
    
    
    // carrega um usuario
    // $root = new Usuario();

    // $root->loadByid(3);

    // echo $root;


    // carrega uma lista de usuarios

    // $lista = Usuario::getList();

    // echo json_encode($lista);


    // carrega uma lista de usuarios buscando pelo login


//     $search = Usuario::search("jo");

//     echo json_encode($search);


//     carrega um usuarios usando o login e a senha

    $usuario = new Usuarios();
    $usuario->login("root","123");

    echo $usuario;

    
 ?>
