<?php
$start = microtime();

require __DIR__ . '/vendor/autoload.php';

use App\DbToModel;
use App\setup\Inflector;

$obj = new DbToModel("localhost", "root", "", "testdb");

$result = $obj->getDatabaseTables();

if (count($result) > 0)
{
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
    mkdir("models", 0777, true);
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
                if (file_put_contents("models/$laravelModelName.php", $modelFileContent) !== false)
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
else 
{
    echo "Seems like this is a new database with no tables :)";
}
echo "Done. Program ran successfully in " . ($start - microtime()) . "milliseconds.";
exit;