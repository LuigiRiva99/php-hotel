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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="table_container">
            <table class="table border m-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">parcheggio</th>
                        <th scope="col">Voto</th>
                        <th scope="col">distanza dal centro (km)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i = 0; $i < count($hotels); $i++) {
                            $hotel = $hotels[$i];
                            $table_index = $i + 1;
                            $hotel_name = $hotel['name'];
                            $hotel_description = $hotel['description'];
                            $hotel_parking = $hotel['parking'];

                            if ($hotel_parking){
                                $hotel_parking = 'sì';
                            } else {
                                $hotel_parking = 'no';
                            };

                            $hotel_vote = $hotel['vote'];
                            $hotel_distance = $hotel['distance_to_center'];
                            
                            echo "     

                            <tr>
                                <th scope=\"row\">$table_index</th>
                                <td>$hotel_name</td>
                                <td>$hotel_description</td>
                                <td>$hotel_parking</td>
                                <td>$hotel_vote</td>
                                <td>$hotel_distance</td>
                            </tr>

                            ";
                        };
                    ?>
                </tbody>
            </table>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
    .table_container{
        margin: 0 auto;
        max-width: 1200px
    }
</style>