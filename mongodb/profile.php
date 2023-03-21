<?php
    require __DIR__ . './vendor/autoload.php';
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $collection = $client->companydb->Demo;
   $Demo = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($userId)]);
?>