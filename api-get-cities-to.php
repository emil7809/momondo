<?php

$_cities = [
    [
        'cityName' => 'Napoli',
        'cityInitial' => 'NAP',
        'cityImage' => 'https://content.r9cdn.net/rimg/dimg/fa/11/63eacd28-city-18758-17ac5346876.jpg?width=128&height=128&xhint=1737&yhint=1468&outputtype=WEBP&crop=true',
        'cityCountry' => 'Italy',
        'cityAirport' => 'Napoli'
    ],
    [
        'cityName' => 'New Delhi',
        'cityInitial' => 'DEL',
        'cityImage' => 'https://content.r9cdn.net/rimg/dimg/6d/77/0cc45283-city-32821-176ddb032b7.jpg?width=128&height=128&xhint=1769&yhint=1931&outputtype=WEBP&crop=true',
        'cityCountry' => 'India',
        'cityAirport' => 'India Gandhi Intl'
    ],
    [
        'cityName' => 'Paris',
        'cityInitial' => 'PAR',
        'cityImage' => 'https://content.r9cdn.net/rimg/dimg/bd/d1/2f268866-city-36014-162f82486f9.jpg?width=128&height=128&xhint=2485&yhint=1564&outputtype=WEBP&crop=true',
        'cityCountry' => 'France',
        'cityAirport' => 'All airports'
    ]
];

echo json_encode($_cities);
