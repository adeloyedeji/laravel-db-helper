<?php
namespace App;

use PDO;
use App\setup\Init;

class DbManager {

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
        if (!$this->init->getDbHandle() instanceof \PDO) {
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
    
    public function getTableData(string $tableName) : array {
        $query = "select * from $tableName";
        $sql = $this->init->getDbHandle()->prepare($query);
        $sql->execute();
        $result = $sql->fetchAll();
        return $result;
    }


    public function writeFileOpeningProperties(string $className, string $tableName) : string {
        $fillable = '$fillable';
        $table = '$table';
        $properties = "<?php\n\n";
        $properties .= "namespace App;\n\n";
        $properties .= "use Illuminate\Database\Eloquent\Model;\n\n";
        $properties .= "class $className extends Model {\n";
        $properties .= "\tprotected $table = '" . $tableName . "';\n";
        $properties .= "\tprotected $fillable = [\n";
        return $properties;
    }

    public function writeFileClosingProperties() : string {
        $properties = "\t];\n";
        $properties .= "}\n";
        return $properties;
    }

    public function writeSeederProperties(string $tableName, string $content) {
        $properties = "<?php\n\n";
        $properties .= "namespace Database\Seeders;\n\n";
        $properties .= "use Illuminate\Database\Seeder;\n\n";
        $properties .= "class ".$tableName."TableSeeder extends Seeder\n{\n";
        $properties .= "\tpublic function run()\n{\n";
        $properties .= "\t\t\$rows = [\t";
        $properties .= $content."\n";
        $properties .= "\t\t];\n";
        $properties .= "\t\tforeach (\$rows as \$row) {\n";
        $properties .= "\t\t\tDB::table('".$tableName."')->insert(\$row);\n";
        $properties .= "\t\t}\n\t}\n}";
        return $properties;

    }

    public function writeMigrationsProperties(string $upContent,string $className,string $downContent) {
        $properties = "<?php\n\n";
        $properties .= "use Illuminate\Database\Migrations\Migration;\n";
        $properties .= "use Illuminate\Database\Schema\Blueprint;\n";
        $properties .= "use Illuminate\Support\Facades\Schema;\n\n";
        $properties .= "class {$className} extends Migration\n{\n";
        $properties .= "\t/**\n\t* Run the migrations.\n\t*\n\t* @return void\n\t*/\n";
        $properties .= "\tpublic function up()\n\t{\n";
        $properties .= $upContent;
        $properties .= "\t}\n\n";
        $properties .= "\t/**\n\t* Reverse the migrations.\n\t*\n\t* @return void\n\t*/\n";
        $properties .= "\tpublic function down()\n\t{\n";
        $properties .= $downContent;
        $properties .= "\t}\n}";

        return $properties;
    }
}