
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   require __DIR__ . './vendor/autoload.php';
$client = new MongoDB\Client("mongodb://localhost:27017");
echo $client;
   $collection = $client->companydb->Demo;
   // echo 'Document inserted with ID: ';
    $document = [
        'email' => $_POST['email'],
        'pass' => $_POST['password'],
        'age' => $_POST['age'],
        'DOb'=> $_POST['dob'],
        'contact'=> $_POST['contact']
    ];
    $result = $collection->insertOne($document);
}

?>
