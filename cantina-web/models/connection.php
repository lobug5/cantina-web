<?php
class Connection
{
    public static function getConexao()
    {
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "cantina_web";

        try {
            $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            echo "entrou no catch" . $e->getmessage();
            return null;
        }
    }
}
