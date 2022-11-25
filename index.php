<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

$parkingFilter = $_GET["parkingFilter"] ?? "";
$ratingFilter = $_GET["ratingFilter"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="parking-filter">Filtra per Parcheggi</label>
        <select name="parkingFilter" id="parking-filter">
            <option value="">Entrambi</option>
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
        <label for="rating-filter">Filtra per Voto</label>
        <select name="ratingFilter" id="rating-filter">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit">Filtra</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <?php foreach ($hotels[0] as $key => $description) { ?>
                    <th scope="col"><?php echo $key; ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($hotels as $hotel) {
                if ($parkingFilter === "" && $ratingFilter === "") {
                    echo "<tr>";
                    foreach ($hotel as $key => $item) {
                        if ($key === "name") {
                            echo "<th scope='row'>$item</th>";
                        } else {
                            echo "<td>$item</td>";
                        }
                    }
                    echo "</tr>";
                } else {
                    if ($parkingFilter != "" && $ratingFilter != "") {
                        if ($hotel['parking'] == $parkingFilter && $hotel['vote'] == $ratingFilter) {
                            echo "<tr>";
                            foreach ($hotel as $key => $item) {
                                if ($key === "name") {
                                    echo "<th scope='row'>$item</th>";
                                } else {
                                    echo "<td>$item</td>";
                                }
                            }
                            echo "</tr>";
                        }
                    } else {
                        if ($parkingFilter === "") {
                            if ($ratingFilter == $hotel['vote']) {
                                echo "<tr>";
                                foreach ($hotel as $key => $item) {
                                    if ($key === "name") {
                                        echo "<th scope='row'>$item</th>";
                                    } else {
                                        echo "<td>$item</td>";
                                    }
                                }
                                echo "</tr>";
                            }
                        } else {
                            if ($parkingFilter == $hotel['parking']) {
                                echo "<tr>";
                                foreach ($hotel as $key => $item) {
                                    if ($key === "name") {
                                        echo "<th scope='row'>$item</th>";
                                    } else {
                                        echo "<td>$item</td>";
                                    }
                                }
                                echo "</tr>";
                            }
                        }
                    }
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>