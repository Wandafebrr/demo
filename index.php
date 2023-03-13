<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>

    <!-- <style>
       body{
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
       }
    </style> -->
</head>
<body>
    <!-- <h1>
        <?php 
        //titik pada php seperti + atau untuk menggabungkan
        // echo 'Hello,' . ' Everybody'; 
    
        // $greeting = "Hello";
        //menggunakan concat
        // echo $greeting . " " . "everybody!"; 

        //refactoring 
        // echo "$greeting Everybody<br>" ; 
       
        //jika menggunakan petik 1 varibel tidak dapat terbaca
        //  echo '$greeting Everybody'; 
        ?>
    </h1> -->

<!-- vid 5 -->

    <?php 
    // $name = "Dark Matter";
    // $read = true;

    // if ($read) {
    //     $message = "You have read $name";
    // } else{
    //     $message = "You have NOT read $name";
    // }

    ?>
    <!-- <h1>

      php untuk echo kinda shortcut
       <?= $message; ?>
    </h1> -->
    
<!-- vid 6 -->
    <!-- <h1>Recommended Books</h1>
    <?php 
    $books = ["Nanti Kita Cerita Tentang Hari Ini",
    "Aku Bukannya Menyerah, Hanya Sedang Lelah",
    "Partikel"

    ];
    ?>

    <ul>
        foreach digunakan untuk looping
    <?php foreach($books as $book){
    echo "<li>$book</li>";
    }
    ?>
        
        shortcut foreach
    <?php foreach($books as $book) : ?>
        <li><?= $book ?></li> 
        <?php endforeach; ?>
    </ul> -->

<!-- vid 7 -->
    <?php 
    $books = [
        [
            'name' => 'Nanti Kita Cerita Tentang Hari Ini',
            'author' => 'marcella fp',
            'releaseYear' => 2018,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Aku Bukannya Menyerah, Hanya Sedang Lelah',
            'author' =>'sungjin',
            'releaseYear' => 2020,
            'purchaseUrl' =>'http://day6.com'
        ],
        [
            'name' => 'Partikel',
            'author' =>'marcella fp',
            'releaseYear' => 2016,
            'purchaseUrl' =>'http://dee.com'
        ]
    ];

    //lambda function / anonymous function
    // $filterByAuthor = function ($books, $author){
    //     $filteredBook=[];
    //     foreach($books as $book){
    //         if ($book['author']===$author){
    //             $filteredBook[]=$book;
    //         }
    //     } return $filteredBook;
    // };

// vid 9 

//membuat fungsi lebih umum
 function filter ($items,$key, $value){
        $filteredItems=[];
        foreach($items as $item){
            if ($items[$key]===$value){
                $filteredItems[]=$item;
            }
        } return $filteredItems;
    };
//punya gw kok error cukkk
// ini harusnya outputnya general bangett tinggal ganti key and valuenya ajaa
$filteredBook = filter($books,'releaseYear',2020);
    ?>

<!-- <ul>
<?php foreach($books as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
              <?= $book['name']; ?>  
            </a>
        </li> 
        <?php endforeach; ?>
</ul> -->

<!-- video 8 -->

<ul>
<?php foreach($filteredBook as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
              <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?=$book['author']?>
              
            </a>
        </li> 
        <?php endforeach; ?>
</ul>


</body>
</html>