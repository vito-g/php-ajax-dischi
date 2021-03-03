<?php

    $dischi = [
    [
      'copertina' => 'https://images-na.ssl-images-amazon.com/images/I/71rlPeoAqUL._AC_SL1078_.jpg',
      'titolo' => 'New Jersey',
      'autore' => 'Bon Jovi',
      'anno' => '1988'
    ],
    [
      'copertina' => 'https://images-na.ssl-images-amazon.com/images/I/51WZVRdismL._AC_.jpg',
      'titolo' => 'Live at Wembley 86',
      'autore' => 'Queen',
      'anno' => '1992'
    ],
    [
      'copertina' => 'https://cdn.ontourmedia.io/sting/non_secure/images/20110419/discography/ten/400.jpg',
      'titolo' => 'Ten\'s Summoner\'s Tales',
      'autore' => 'Sting',
      'anno' => '1993'
    ],
    [
      'copertina' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
      'titolo' => 'Steve Gadd Band',
      'autore' => 'Steve Gadd Band',
      'anno' => '2018'
    ],
    [
      'copertina' => 'https://images-na.ssl-images-amazon.com/images/I/81ll31VxLDL._AC_SL1200_.jpg',
      'titolo' => 'Brave New World',
      'autore' => 'Iron Maiden',
      'anno' => '2000'
    ],
    [
      'copertina' => 'https://images-na.ssl-images-amazon.com/images/I/81Iuivs4A7L._AC_SL1500_.jpg',
      'titolo' => 'One more car, one more rider',
      'autore' => 'Eric Clapton',
      'anno' => '2002'
    ]

    ];

    // var_dump($dischi);

    header('Content-type: application/json');

    $json = json_encode($dischi);
    echo $json;
 ?>
