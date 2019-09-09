<?php

  header('Content-type: application/json');

  $music = [
    [
      'title' => 'titolo1',
      'autore' => 'autore1',
      'data' => 'data1'
    ],
    [
      'title' => 'titolo2',
      'autore' => 'autore2',
      'data' => 'data2'
    ],
    [
      'title' => 'titolo3',
      'autore' => 'autore3',
      'data' => 'data3'
    ],
    [
      'title' => 'titolo4',
      'autore' => 'autore4',
      'data' => 'data4'
    ],
    [
      'title' => 'titolo5',
      'autore' => 'autore5',
      'data' => 'data5'
    ],
    [
      'title' => 'titolo6',
      'autore' => 'autore6',
      'data' => 'data6'
    ],
    [
      'title' => 'titolo7',
      'autore' => 'autore7',
      'data' => 'data7'
    ],
    [
      'title' => 'titolo8',
      'autore' => 'autore8',
      'data' => 'data8'
    ],
    [
      'title' => 'titolo9',
      'autore' => 'autore9',
      'data' => 'data9'
    ],
    [
      'title' => 'titolo10',
      'autore' => 'autore10',
      'data' => 'data10'
    ]
  ];

  echo json_encode($music);

 ?>
