<?php

   //
   // This example uses data from the Sample Datasets in MongoDB Atlas
   // To load, and use this sample data, see https://docs.atlas.mongodb.com/sample-data/available-sample-datasets/
   //

      require_once __DIR__ . './vendor/autoload.php';
      $client = new MongoDB\Client("mongodb://localhost:27017");
      echo $client;
      $collection = $client->companydb->Demo;
      $query = array('validated' => true);
      $cursor = $collection->find($query);
      foreach ($cursor as $document) {
        echo "<div class='profile'>";
        echo "<h2>" . $document['name'] . "</h2>";
        echo "<p>" . $document['bio'] . "</p>";
        echo "</div>";
    }
?>