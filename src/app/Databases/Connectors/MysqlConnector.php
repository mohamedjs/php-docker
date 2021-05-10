<?php

namespace App\Connectors;

use PDO;

class MysqlConnector implements Connectors
{    
    /**
     * Method connection
     *
     * @param string  $host 
     * @param string  $database 
     * @param string  $password 
     * @param string  $password 
     * @param array   $option 
     *
     * @return void
     */
    public function connection($host, $database, $username, $database, $password, $option=[])
    {
        $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    }
}