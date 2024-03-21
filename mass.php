<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <h1> Массивы </h1>
    <h2> Численный массив </a>
    <?php
        $numbers = [1,2,3,4,5,-34];

        sort($numbers);

        for($i = 0; $i < count($numbers); $i++)
        {
            if($numbers[$i]%2==0) echo "<p>$numbers[$i]</p>";
        }
    ?>
    <h2> Ассоциативный массив </h2>
    <?php
        $prices = [ "Table"=>100, "Bad"=>15000, "Door"=>4000 ];

        krsort($prices);

        foreach($prices as $key => $cost)
        {
            echo "<p> Товар $key стоит $cost</p>";
        }


    ?>
    <h2>Многомерные массивы</h2>
    <div class="catalog">
        <?php
            $products = [["id"=>1, "title"=>"Table", "price"=>500, "img-path"=>"image/table.jpg"],
                        ["id"=>2, "title"=>"Stool", "price"=>100, "img-path"=>"image/stool.jpg"],
                        ["id"=>3, "title"=>"Sofa", "price"=>900, "img-path"=>"image/sofa.jpeg"]];
            
            
            function comoare($x, $y){
                if($x['title']==$y['title']) return 0;
                if($x['title']>$y['title']) return 1;
                return -1;
            }

            usort($products, "comoare");

            foreach($products as $value)
            {
                $path = $value["img-path"];
                $title = $value["title"];
                $price = $value["price"];
                echo 
                "<div class='card'> 
                    <img class='image' src='$path' alt='$title'>
                        <p class='card_title'> $title </p>
                        <p class='card_price'> $price </p>
                    </img>
                </div>";
            }



        ?>
    </div>

    <h2> База данных</h2>
    <?php
        define("Post", "localhost");
        define("DB","prodocts1");
        define("USER", "root");
        define("PASSWORD", "root");

        $connect = mysqli_connect(Post, USER, PASSWORD, DB);
        if(!$connect)
        {
            echo "Ошибка соединения.";
        }
        else
        {
            mysqli_query($connect, "set names 'utf8'");
            $items = mysqli_query($connect, "Select * From items");
            if($items)
            {
                $items_data = mysqli_fetch_all($items, MYSQLI_ASSOC);
                print_r($items_data);
            }
            else
            {
                echo "Ошибка запроса";
            }

            foreach($items_data as $value)
            {
                $path = $value["hall location"];
                $title = $value["логин пароль"];
                $price = $value["people"];
                echo 
                "<div class='card'> 
                    <img class='image' src='$path' alt='$title'>
                        <p class='card_title'> $title </p>
                        <p class='card_price'> $price </p>
                    </img>
                </div>";
            }

        }
    ?>

</body>
</html>