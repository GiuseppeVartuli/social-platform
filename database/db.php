<?php


require_once __DIR__ . '/../app/Models/Media.php';
require_once __DIR__ . '/../app/Models/Post.php';







$posts = [
    new Post(
        'Finalmente si parte! Destinazione vacanze',
        '2022-11-02', 'Mario Rossi',

    [
        'mare',
        'estate',
        'vacanze',
        'relax',
        'spiaggia'
    ],
    
        
        [new Media("photo", 'https://www.clubinbuonemani.it/wp-content/uploads/2020/11/partenza-vacanze-auto-sicura.gif')]
    
),
new Post(
    'Una giornata di sole sulla spiaggia',
    '2022-09-15', 'Luca Bianchi',
    ["mare", "sole", "relax", "spiaggia"],
    
    [new Media("video", 'https://img.freepik.com/premium-photo/beach-vacation-happy-beautiful-woman-jeans-enjoying-sunny-day-beach_1428-1268.jpg')]
),
new Post(
    'Serata tranquilla a gustare il tramonto',
    '2022-09-15', 'Anna Verdi',
    ["tramonto", "serata", "relax"],
    
    [new Media("photo", 'https://img.freepik.com/premium-photo/lonely-woman-standing-alone-lake-shore-warm-evening-solitude-relaxing-nature-concept_127089-27306.jpg')]
),
];

?>