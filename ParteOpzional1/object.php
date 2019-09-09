<?php

  header('Content-type: application/json');

  $search = $_GET['autore'];
  $searchNew = ucfirst($search); //metto la prima lettera maiuscola per non creare errori

  //array di dischi musicali
  $music = [
    [
      'title' => 'titolo1',
      'autore' => 'Autore1',
      'data' => '10/02/1999'
    ],
    [
      'title' => 'titolo2',
      'autore' => 'Autore2',
      'data' => '05/09/1997'
    ],
    [
      'title' => 'titolo3',
      'autore' => 'Autore3',
      'data' => '02/02/2012'
    ],
    [
      'title' => 'titolo4',
      'autore' => 'Autore4',
      'data' => '16/08/1994'
    ],
    [
      'title' => 'titolo5',
      'autore' => 'Autore5',
      'data' => '03/11/2006'
    ],
    [
      'title' => 'titolo6',
      'autore' => 'Autore6',
      'data' => '14/10/1996'
    ],
    [
      'title' => 'titolo7',
      'autore' => 'Autore7',
      'data' => '10/02/2000'
    ],
    [
      'title' => 'titolo8',
      'autore' => 'Autore8',
      'data' => '18/7/1999'
    ],
    [
      'title' => 'titolo9',
      'autore' => 'Autore9',
      'data' => '15/02/1999'
    ],
    [
      'title' => 'titolo10',
      'autore' => 'Autore10',
      'data' => '10/03/1999'
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
