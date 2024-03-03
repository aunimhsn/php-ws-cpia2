<?php
    # Déclaration du tableau 
    $cars = [
        ['brand' => 'Audi', 'model' => 'A1', 'type' => 'citadine'],
        ['brand' => 'Volkswagen', 'model' => 'Passat', 'type' => 'berline'],
        ['brand' => 'Volkswagen', 'model' => 'Golf', 'type' => 'compact'],
        ['brand' => 'Mazda', 'model' => 'CX-5', 'type' => 'SUV']
    ];

    // switch ($_POST['data-format']) {
    //     case 'csv':


    // }

    if ($_POST['data-format'] == 'csv') {
        // https://craftytechie.com/how-to-convert-associative-array-to-csv-in-php/
        $f = fopen('cars.csv', 'a');
        fputcsv($f, array_keys($cars[0]));
        foreach ($cars as $row) {
            fputcsv($f, $row);
        }
        fclose($f);
    }

?>