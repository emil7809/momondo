<?php
$cities = [
  [
    'cityName' => 'Copenhagen',
    'cityInitial' => 'CPH',
    'cityImage' => 'https://content.r9cdn.net/rimg/dimg/32/18/116790b2-hood-211744-168c3006c7f.jpg?width=128&height=128&xhint=1544&yhint=1299&outputtype=WEBP&crop=true',
    'cityCountry' => 'Denmark',
    'cityAirport' => 'Kastrup Copenhagen'
  ],

  [
    'cityName' => 'New York',
    'cityInitial' => 'NYC',
    'cityImage' => 'https://content.r9cdn.net/rimg/dimg/8c/a9/d1b21b20-city-15830-16eb6a60801.jpg?width=128&height=128&xhint=1887&yhint=913&outputtype=WEBP&crop=true',
    'cityCountry' => 'United States',
    'cityAirport' => 'All airports'
  ],

  [
    'cityName' => 'Honululu',
    'cityInitial' => 'HNL',
    'cityImage' => 'https://content.r9cdn.net/rimg/dimg/73/93/010fa630-city-28070-15b0fbf9066.jpg?width=128&height=128&xhint=1898&yhint=1299&outputtype=WEBP&crop=true',
    'cityCountry' => 'United States',
    'cityAirport' => 'Honululu'
  ]
];

echo json_encode($cities);
