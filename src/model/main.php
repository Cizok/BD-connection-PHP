<?php
    include("./../vendor/autoload.php");
    use App\model\users;
    use App\persistence\ConnectionFactory;

    //$name = new users ("dudinha");


    if($conn = $conn = ConnectionFactory::getConnection()){
        $sql= "select * from users";
        $conn->prepare($sql);
    }

    echo print_r($conn, true);