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

    $selected_parking = $_GET['select_parking'];
    $selected_vote = $_GET['vote'];
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

        <div class="container">
            <!-- form -->
            <div class="flex">
                <form action="" method="GET">
                    <select class="form-select" aria-label="Default select example" name="select_parking">
                        <option selected value="default">Parcheggio</option>
                        <option value="1">sì</option>
                        <option value="0">no</option>
                    </select>

                    <select class="form-select" aria-label="Default select example" name="vote">
                        <option selected value="default">Stelle</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>

                    <button type="submit">cerca</button>
                </form>

                
            </div>

            <!-- table -->
            <table class="table border">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">parcheggio</th>
                        <th scope="col">Voto</th>
                        <th scope="col">distanza dal centro (km)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php        
                        //controllo se sono stati selezionate le opzioni
                        if ($selected_vote !== "default" && $selected_parking !== "default") {

                            for ($i = 0; $i < count($hotels); $i++ ) {
                                $hotel = $hotels[$i];
                                // $table_index = $i + 1;
                                $hotel_name = $hotel['name'];
                                $hotel_description = $hotel['description'];
                                $hotel_parking = $hotel['parking'] ? 'sì' : 'no';
                                $hotel_vote = $hotel['vote'];
                                $hotel_distance = $hotel['distance_to_center'];
    
                                //stampo gli hotel in base ai parcheggi e alle stelle
                                if ((($selected_parking == 1 && $hotel['parking']) || ($selected_parking == 0 && !$hotel['parking'])) && $hotel_vote == $selected_vote) {
                                    echo "     
                                        <tr>
                                            <td>$hotel_name</td>
                                            <td>$hotel_description</td>
                                            <td>$hotel_parking</td>
                                            <td>$hotel_vote</td>
                                            <td>$hotel_distance</td>
                                        </tr>
                                    ";
                                } 
                            };
                        } else {
                            for ($i = 0; $i < count($hotels); $i++ ) {
                                $hotel = $hotels[$i];
                                $table_index = $i + 1;
                                $hotel_name = $hotel['name'];
                                $hotel_description = $hotel['description'];
                                $hotel_parking = $hotel['parking'] ? 'sì' : 'no';
                                $hotel_vote = $hotel['vote'];
                                $hotel_distance = $hotel['distance_to_center'];
    
                                echo "     
                                    <tr>
                                        <td>$hotel_name</td>
                                        <td>$hotel_description</td>
                                        <td>$hotel_parking</td>
                                        <td>$hotel_vote</td>
                                        <td>$hotel_distance</td>
                                    </tr>
                                    ";
                            };
                        }
                    ?>
                </tbody>
            </table>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
    /* .table_container{
        margin: 0 auto;
        max-width: 1200px
    } */
</style>