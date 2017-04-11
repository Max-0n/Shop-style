<?php
//sql get new list by params
$getItems = [
    [
        'image' => '/dress/1.jpg',
        'label' => 'Our Legacy Splash Jacquard Knit',
        'style' => 'Black Grey Plants',
        'price' => 290,
        'isNew' => true
    ],
    [
        'image' => '/dress/3.jpg',
        'label' => 'Our Legacy Splash First Shirt',
        'style' => 'Navy Crinkle',
        'price' => 180,
        'isNew' => false
    ],
    [
        'image' => '/dress/6.jpg',
        'label' => 'Our Legacy Splash Jacquard Knit',
        'style' => 'Black Grey Plants',
        'price' => 320,
        'isNew' => false
    ],
    [
        'image' => '/dress/8.jpg',
        'label' => 'Our Legacy Bomber Jacket II',
        'style' => 'Faded Olive Twill',
        'price' => 570,
        'isNew' => false
    ],
];

echo json_encode($getItems);
?>
