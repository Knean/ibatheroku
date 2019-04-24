<?php 
echo "hello world this is version 2";
echo "<P> PASSWORD IS " . getenv('DB_PASSWORD');

class DBike{
    public $number;
    public $name;
}

$listOfBikes = [];
$limit = getenv("LOOP")
for ($i = 0; $i< $limit; $i++){
    $bike = new DBike;
    $bike->number = $i;
    $bike->name="Name $i";
    $listOfBikes[] = $bike;
}

/* print_r($listOfBikes); */
header('Content-Type: application/json');

$jsonOutput = json_encode($listOfBikes);

echo $jsonOutput;