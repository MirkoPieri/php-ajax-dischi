<?php

  header('Content-type: application/json');

  $search = $_GET['autore'];
  $searchNew = ucfirst($search); //metto la prima lettera maiuscola per non creare errori

  $music = [
    [
      'title' => 'titolo1',
      'autore' => 'Autore1',
      'data' => 'data1'
    ],
    [
      'title' => 'titolo2',
      'autore' => 'Autore2',
      'data' => 'data2'
    ],
    [
      'title' => 'titolo3',
      'autore' => 'Autore3',
      'data' => 'data3'
    ],
    [
      'title' => 'titolo4',
      'autore' => 'Autore4',
      'data' => 'data4'
    ],
    [
      'title' => 'titolo5',
      'autore' => 'Autore5',
      'data' => 'data5'
    ],
    [
      'title' => 'titolo6',
      'autore' => 'Autore6',
      'data' => 'data6'
    ],
    [
      'title' => 'titolo7',
      'autore' => 'Autore7',
      'data' => 'data7'
    ],
    [
      'title' => 'titolo8',
      'autore' => 'Autore8',
      'data' => 'data8'
    ],
    [
      'title' => 'titolo9',
      'autore' => 'Autore9',
      'data' => 'data9'
    ],
    [
      'title' => 'titolo10',
      'autore' => 'Autore10',
      'data' => 'data10'
    ]
  ];

  $new = []; //array per inserire solo risultati inerenti alla ricerca

  foreach ($music as $value) { //cerco corrispondenza con ricerca utennte
    if ($value['autore'] == $searchNew ) {
      $new[] = $value;
    } elseif ($searchNew == "") {
      $new[] = $value;
    }
  }

  echo json_encode($new);

 ?>
