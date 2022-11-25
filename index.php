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

// foreach ($hotels as $hotel) {
//     foreach ($hotel as $key => $item) {
//         echo "$key - $item <br/>";
//     };
// };

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
    <table class="table">
        <thead>
            <tr>
                <?php foreach ($hotels[0] as $key => $description) { ?>
                    <th scope="col"><?php echo $key; ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) { ?>
                <tr>
                    <?php foreach ($hotel as $key => $item) { ?>
                        <?php if ($key === "name") { ?>
                            <th scope="row"><?php echo $item; ?></th>
                        <?php } else { ?>
                            <?php if ($key === "parking") { ?>
                                <?php if ($item === true) { ?>
                                    <td>Si</td>
                                <?php } else { ?>
                                    <td>No</td>
                                <?php } ?>
                            <?php } else { ?>
                                <td><?php echo $item; ?></td>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>