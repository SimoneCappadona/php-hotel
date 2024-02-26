<?php
include_once './php/result.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- My-css -->
    <link rel="stylesheet" href="./style/style.css">

    <title>HotelPhP</title>
</head>
<body >
<header>
    <h1 class='text-center container'>HOTEL SELEZIONATI</h1>
    </header>
    <main class='container'>
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Hotel Name</th>
      <th scope="col">Hotel Description</th>
      <th scope="col">Private Parking</th>
      <th scope="col">Hotel Vote</th>
      <th scope="col">Distance</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($hotels as $hotel) : ?>
        <tr>
            <td class='text-primary'><?= $hotel['name']?></td>
            <td class='text-success'><?= $hotel['description']?></td>
            <td class='text-info'><?= $hotel['parking']?></td>
            <td class='text-danger'><?= $hotel['vote']?></td>
            <td class='text-warning'><?= $hotel['distance_to_center']?></td>
            <?php endforeach ?>
</body>
</html>