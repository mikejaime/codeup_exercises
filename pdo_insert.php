<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'mike', 'letmein');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Create the query and assign to var
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(240) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres VARCHAR(50) NOT NULL,
   	PRIMARY KEY (id)
)';
$dbc->exec($query);

$parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => '47390'],
    ['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => '9000'],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => '76519'],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1900-11-10', 'area_in_acres' => '242756'],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1900-06-12', 'area_in_acres' => '801163'],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1900-06-28', 'area_in_acres' => '172924'],
    ['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1900-10-21', 'area_in_acres' => '32950'],
    ['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1900-02-25', 'area_in_acres' => '35835'],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1900-09-12', 'area_in_acres' => '337597'],
    ['name' => 'Wrangell St. Elias', 'location' => 'Alaska', 'date_established' => '1900-12-02', 'area_in_acres' => '8323147']
];

foreach ($parks as $park) {
    $query_parks = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

    $dbc->exec($query_parks);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}

?>