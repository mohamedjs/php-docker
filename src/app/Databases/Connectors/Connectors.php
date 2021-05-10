<?php

namespace App\Connectors;

interface Connectors
{    
    /**
     * Method connection
     *
     * @param string  $host 
     * @param string  $username 
     * @param string  $password 
     * @param array   $option 
     *
     * @return void
     */
    public function connection($host, $database, $username, $password, $option=[]);
}