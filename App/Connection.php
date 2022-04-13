<?php

namespace App;

class Connection {

    public static function getDb(){

        try{

            $conn = new \PDO(
                "mysql:host=localhost;dbname=quintanda_online;charset=utf8",
                "root",
                ""
            );

            return $conn;
        }catch(\PDOException $e){

            '<p>'.$e->getMessage().'</p>';

        }
    }
}





?>