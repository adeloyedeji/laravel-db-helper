<?php
namespace App;

use PDO;
use App\setup\Init;

class DbToModel {

    private $init;
    public function __construct(string $serverName, string $userName, string $password, string $dbName)
    {
        $this->init = new Init();
        $this->initialize($serverName, $userName, $password, $dbName);
    }

    public function initialize(string $serverName, string $userName, string $password, string $dbName) : void
    {
        $this->init->setServerName($serverName);
        $this->init->setUserName($userName);
        $this->init->setPassword($password);
        $this->init->setDbName($dbName);
        $dbHandle = $this->init->connect($this->init->getServerName(), $this->init->getUserName(), $this->init->getPassword(), $this->init->getDbName());
        $this->init->setDbHandle($dbHandle);
        if ($this->init->getDbHandle() instanceof \PDO) {
            // db connection was successful.
        } else {
            echo "Db Connection failed!\n";
            exit;
        }
    }

    public function getDatabaseTables() : array
    {
        $query = "SHOW TABLES";
        $sql = $this->init->getDbHandle()->prepare($query);
        $sql->execute();
        $result = $sql->fetchAll();
        return $result;
    }

    public function getColumnsInTable(string $tableName) : array
    {
        $query = "EXPLAIN $tableName";
        $sql = $this->init->getDbHandle()->prepare($query);
        $sql->execute();
        $result = $sql->fetchAll();
        return $result;
    }

    public function writeFileOpeningProperties(string $className) : string {
        $fillable = '$fillable';
        $properties = "<?php\n\n";
        $properties .= "namespace App;\n\n";
        $properties .= "use Illuminate\Database\Eloquent\Model;\n\n";
        $properties .= "class $className extends Model {\n";
        $properties .= "\tprotected $fillable = [\n";
        return $properties;
    }

    public function writeFileClosingProperties() : string {
        $properties = "\t];\n";
        $properties .= "}\n";
        return $properties;
    }
}