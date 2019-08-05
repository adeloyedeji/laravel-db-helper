<?php

namespace App\setup;

use \PDO;

class Init {

    private $serverName;
    private $userName;
    private $password;
    private $dbName;

    private $dbHandle;
    
    public function __construct()
    {
    }
    /**
     * Get the value of serverName
     */ 
    public function getServerName() : string
    {
        return $this->serverName;
    }

    /**
     * Set the value of serverName
     *
     * @return  self
     */ 
    public function setServerName(string $serverName)
    {
        $this->serverName = $serverName;

        return $this;
    }

    /**
     * Get the value of dbHandle
     */ 
    public function getDbHandle() : PDO
    {
        return $this->dbHandle;
    }

    /**
     * Set the value of dbHandle
     *
     * @return  self
     */ 
    public function setDbHandle(PDO $dbHandle)
    {
        $this->dbHandle = $dbHandle;

        return $this;
    }

    /**
     * Get the value of userName
     */ 
    public function getUserName() : string
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * @return  self
     */ 
    public function setUserName(string $userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of dbName
     */ 
    public function getDbName() : string
    {
        return $this->dbName;
    }

    /**
     * Set the value of dbName
     *
     * @return  self
     */ 
    public function setDbName(string $dbName)
    {
        $this->dbName = $dbName;

        return $this;
    }

    public function connect(string $host, string $userName, string $password, string $dbName) : PDO
    {
        try {
            return new PDO("mysql:host=$host;dbname=$dbName", $userName, $password, array(PDO::ATTR_PERSISTENT => true));
        } catch(PDOException $ex) {
            echo "Error!: " . $ex->getMessage() . "<br>";
        }
        return null;
    }
}