<?php

include '../includes/partials/header.php';
include '../includes/partials/footer.php';
include '../includes/functions.php';

// $myArray = [
//     'thing1',
//     'thing2'
// ];

$myImages = [
    "img1.jpg",
    "img2.jpg",
    "img3.jpg",
    "img4.jpg",
    "img5.jpg",
    "img6.jpg"
];

$desc = [
    "-- firefighter alpha",
    "-- indigo alpha",
    "-- paris alpha",
    "-- peace alpha",
    "-- ganpati alpha",
    "-- chef alpha"
];



?>

<html>
    <head>
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>

    <section class="photoBox">
        <div class="displayPhoto">
            <?php displayPhoto($myImages, $desc); ?>
        </div>
    </section>
 

</body>
</html>
            