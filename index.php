<!-- Include php -->
<?php
include_once './php/result.php'
    ?>
<!-- Filter per parcheggio -->
<?php
if (isset($_GET['parking'])) {
    $checked = 'checked';

    $filtered_hotels = [];

    foreach ($hotels as $hotel) {
        if ($hotel['parking'])
            $filtered_hotels[] = $hotel;
    }
    $hotels = $filtered_hotels;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- my-css -->
    <link rel="stylesheet" href="style.css">

    <title>HotelPhP</title>
</head>

<body>
    <header>
        <!-- Title -->
        <h1 class='text-center container text-light'>HOTEL SELEZIONATI</h1>
        <div class="offset-2 radio-group text-light">
            <!-- Form filter parcheggio si/no -->
            <form action="" methods="GET">
                <div class="m-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="parking" name="parking" <?= $checked ?? '' ?>>
                        <label class="form-check-label" for="parking">
                            Mostra gli Hotel che hanno il parcheggio
                        </label>
                    </div>
                    <!-- Button per confermare la scelta -->
                    <button type="submit" class="btn btn-sm btn-primary m-3">Conferma</button>
                </div>
            </form>
        </div>
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
                <?php foreach ($hotels as $hotel): ?>
                    <tr>
                        <td class='text-primary'>
                            <?= $hotel['name'] ?>
                        </td>
                        <td class='text-success'>
                            <?= $hotel['description'] ?>
                        </td>
                        <td class='text-info'>
                            <?= $hotel['parking'] ?>
                        </td>
                        <td class='text-danger'>
                            <?= $hotel['vote'] ?>
                        </td>
                        <td class='text-warning'>
                            <?= $hotel['distance_to_center'] ?>
                        </td>
                    <?php endforeach ?>
</body>

</html>