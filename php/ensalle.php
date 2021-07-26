<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cinéma Rodia - Haut-Cloques</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require "header.php"; ?>
    <main>
        <section>
            <h2>Liste des films</2>
                <?php
                // Tableau des films diffusés dans le cinéma
                $movies = [
                    'Star wars : La menace fantôme',
                    'Star wars : L\'attaque des clones',
                    'Star wars : La revanche des Sith',
                    'Pokemon : Le pouvoir est en toi'
                ];

                $nbMovies = count($movies);
                ?>

                <!-- Version avec boucles -->
                <h3>Version avec while</h3>
                <ul>
                    <?php
                    $incrementPourMaBoucleWhileMovies = 0;

                    while ($incrementPourMaBoucleWhileMovies < 4) {
                        echo '<li>' . $movies[$incrementPourMaBoucleWhileMovies] . '</li>';

                        $incrementPourMaBoucleWhileMovies = $incrementPourMaBoucleWhileMovies + 1;
                    }
                    ?>
                </ul>
                <h3>Version avec foreach</h3>
                <ul>
                    <?php
                    foreach ($movies as $movie) {
                        echo '<li>' . $movie . '</li>';
                    }
                    ?>
                </ul>
                <h3>Version avec for</h3>
                <ul>
                    <?php
                    for ($movieNumber = 0; $movieNumber < $nbMovies; $movieNumber++) {
                        echo '<li>' . $movies[$movieNumber] . '</li>';
                    }
                    ?>
                </ul>

                <!-- Ajouter ici le tableau PHP des salles -->
                <h2>Salles</h2>
                <?php
                // [...]
                $rooms = [
                    'Athéna',
                    'Dyonisos',
                    'Hadès',
                    'Zeus'
                ];

                $nbRooms = count($rooms);
                ?>
                <ul>
                    <h3>Version avec for</h3>
                    <?php
                    for ($roomNumber = 0; $roomNumber < $nbRooms; $roomNumber++) {
                        echo '<li>' . $rooms[$roomNumber] . '</li>';
                    }
                    ?>

                    <h3>Version avec foreach</h3>
                    <?php
                    foreach ($rooms as $room) {
                        echo '<li>' . $room . '</li>';
                    }
                    ?>

                    <h3>Version avec while</h3>
                    <?php
                    $incrementPourMaBoucleWhileRooms = 0;

                    while ($incrementPourMaBoucleWhileRooms < 4) {
                        echo '<li>' . $rooms[$incrementPourMaBoucleWhileRooms] . '</li>';

                        // Once the room is shown, add +1 to the increment
                        $incrementPourMaBoucleWhileRooms = $incrementPourMaBoucleWhileRooms + 1;
                    }
                    ?>
                </ul>
                <h2>Consommations</h2>
                <?php
                // [...]
                $extras = [
                    [
                        'Popcorn',
                        'L',
                        2.9
                    ],
                    [
                        'Popcorn',
                        'XL',
                        4
                    ],
                    [
                        'Chips',
                        '50g',
                        2.5
                    ],
                    [
                        'M&M\'s',
                        '100g',
                        4
                    ],
                    [
                        'Soda',
                        '33cl',
                        3.2
                    ],
                    [
                        'Evian',
                        '33cl',
                        3
                    ]
                ];
                ?>
                <?php
                foreach ($extras as $extrasProductNameAndSize) {

                    echo '<ul>';
                    foreach ($extrasProductNameAndSize as $extrasProductPrice) {
                        echo '<li>' . $extrasProductPrice . '</li>';
                    }
                    echo '</ul>';
                }
                ?>
    </main>
    <?php require "footer.php"; ?>
</body>

</html>