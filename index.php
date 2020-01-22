<?php
require __DIR__ . '/vendor/autoload.php';

use App\DbManager;
use App\setup\Inflector;

$val = getopt("s:m:h:");

$database = isset(getopt(null, ["database:"])['database'])? getopt(null, ["database:"])['database'] : NULL;

$password = isset(getopt(null, ["password:"])['password'])? getopt(null, ["password:"])['password'] : "";

$host = isset(getopt(null, ["host:"])['host'])? getopt(null, ["host:"])['host'] : "localhost";

$username = isset(getopt(null, ["username:"])['username'])? getopt(null, ["username:"])['username'] : NULL;

$path = isset(getopt(null, ["path:"])['path'])? getopt(null, ["path:"])['path']: ".";


$welcomeNote  = "********************************************\n";
$welcomeNote .= "LARAVEL DB HELPER\n";
$welcomeNote .= "usage: php index.php -help, to display help\n";
$welcomeNote .= "********************************************\n";
$welcomeNote .= " --database \tName of database [required] \n\n";
$welcomeNote .= " --username \tSetting up database username [required]\n\n";
$welcomeNote .= " --host \tdatabase host [default: localhost] \n\n";
$welcomeNote .= " --password \tDatabase password [default: ]\n\n";
$welcomeNote .= " --path \tPath to store DB result [default: current-directory ]\n\n";
$welcomeNote .= " -model \tFor generating models from Database\n\n";
$welcomeNote .= " -seeder \tFor generating database seeders from Database\n\n";
$welcomeNote .= " -help \t\tTo display this menu\n\n";

$welcomeNote .= "********************************************\n";
$welcomeNote .= "Example usage:\n\n";
$welcomeNote .= "php index.php --database=myDBName --username=root\n";
$welcomeNote .= " \t--password=pass123 --host=localhost --path=C://users/username/laravel\n";
$welcomeNote .= "\t-seeder -model \n\n";
$welcomeNote .= "usage: php index.php -help, to display help\n";
$welcomeNote .= "********************************************\n";

if($val == [] || !isset($username) || !isset($database) ) {

    echo $welcomeNote;
die();
}
$start = microtime();




$obj = new DbManager($host, $username, $password, $database);

$result = $obj->getDatabaseTables();

if (count($result) > 0)
{
    if($val['m'] == "odel") {
        if (is_dir(__DIR__."models"))
        {
            $dir = 'models';
            $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
            $files = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);
            foreach($files as $file) {
                if ($file->isDir()) {
                    rmdir($file->getRealPath());
                } else {
                    unlink($file->getRealPath());
                }
            }
            rmdir(__DIR__.$dir);
        }
        $dir = $path . "/models";
        mkdir($dir, 0777, true);
        foreach ($result as $r)
        {
            foreach($r as $o => $v)
            {
                $columns = $obj->getColumnsInTable($v);
                if (count($columns) > 0)
                {
                    // create the model file
                    $laravelModelName = Inflector::singularize(str_replace(" ", "", ucwords(str_replace("_", " ", $v))));
                    
                    // create the file content
                    $modelFileContent = $obj->writeFileOpeningProperties($laravelModelName, $v);
                    foreach($columns as $c => $v)
                    {
                        $modelFileContent .= "\t\t'" . $v['Field'] . "', \n";
                    }
                    $modelFileContent .= $obj->writeFileClosingProperties();

                    // write the file content to folder models.
                    if (file_put_contents($dir."/".$laravelModelName.".php", $modelFileContent) !== false)
                    {
                        echo "Model: $laravelModelName was successfully created.\n";
                    }
                    else 
                    {
                        echo "Unable to create model: $laravelModelName.\n";
                    }
                }
            }
        }
    }
    


   
    if($val['s'] == "eeder") {
        //generate seeders;
        if (is_dir(__DIR__."seeders"))
        {
            $dir = 'seeders';
            $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
            $files = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);
            foreach($files as $file) {
                if ($file->isDir()) {
                    rmdir($file->getRealPath());
                } else {
                    unlink($file->getRealPath());
                }
            }
            rmdir(__DIR__.$dir);
        }
        $dir = $path . "/seeders";
        mkdir($dir, 0777, true);

        foreach ($result as $table)
        {
            
            foreach($table as $key => $tableName)
            {
            
                $columns = $obj->getColumnsInTable($tableName);
                $tableData = $obj->getTableData($tableName);
                if (count($columns) > 0)
                {
                    $columnField = array();
                    foreach($columns as $column) {
                    $columnField[] = $column['Field'];
                    
                    }
                
                    $i = 0;
                    $content="";
                    foreach($tableData as $data) {
                        $content .= "\n\t\t\t[\n";
                    foreach($columnField as $singleColumn) {
                            $content .= "\t\t\t\t'".$singleColumn."' => '".$data[$i]."',\n";
                            $i++;
                            if($i == count($columnField)) $i = 0;
                    }
                    $content .= "\n\t\t\t],\n";
                    
                    
                    }  
                    if($content != "")$content = $obj->writeSeederProperties($tableName,$content);
                    if (file_put_contents($dir."/".$tableName."TableSeeder.php", $content) !== false)
                    {
                        echo "Seeders: ".$tableName. "TableSeeder was successfully created.\n";
                    }
                    else 
                    {
                        echo "Unable to create model: $laravelModelName.\n";
                    }             
                }
            }
        }
    }

    if($val['h'] == "elp") {
        echo $welcomeNote;
        die();
    }

    
}
else 
{
    echo "Seems like this is a new database with no tables :)";
}
echo "Done. Program ran successfully in " . ($start - microtime()) . "milliseconds.\n";
exit;