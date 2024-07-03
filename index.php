<?php


$name = "Dune";
$read = false;
if ($read) {
    $message = "You have read $name";
} else {
    $message = "You have NOT read $name";
}

$greeting = "Hello";

$IndShows = [
    "Altered Carbon",
    "Silo",
    "The Expanse",

];

$showsDict = [
    [
        'name' => 'Altered Carbon',
        'mainChar' => 'Takeshi Kovacs',
        'releaseYear' => '2018',
        'purchaseUrl' => 'https://example.com',
    ],
    [
        'name' => 'Silo',
        'mainChar' => 'Juliette Nichols',
        'releaseYear' => '2023',
        'purchaseUrl' => 'https://example.com',
    ],
    [
        'name' => 'Strange New Worlds',
        'mainChar' => 'Christopher Pike',
        'releaseYear' => '2022',
        'purchaseUrl' => 'https://example.com',
    ]

];

//function filter($items, $fn): array
//{
//    $filteredItems = [];
//
//    foreach ($items as $item) {
//        if ($fn($item)) {
//            $filteredItems[] = $item;
//        }
//
//    }
//    return $filteredItems;
//}
//
//$filteredShows = filter($showsdict, function ($show) {
//    return $show['releaseYear'] > 2018;
//});

$filteredShows = array_filter($showsDict, function ($show) {
    return $show['releaseYear'] > 2018;
});


require "index.view.php";

