    <!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>

    <link rel="stylesheet" href="styl_1.css">

    <?php
        $polacz = mysqli_connect('localhost', 'root', '', 'wedkowanie');
        $zapytanie1 = mysqli_query($polacz, "
        SELECT `nazwa`,`wystepowanie` FROM `ryby` WHERE `styl_zycia`=1; ");
        $dane1 = mysqli_fetch_array($zapytanie1);
        mysqli_close($polacz); 
    ?>
</head>
<body>
    <div class="container">
        <div class="baner">
            <h1>Portal dla wędkarzy</h1>
        </div>
        <div class="lewy">
            <h2>Ryby drapieżne naszych wód</h2>
            <ul>
            <?php
            do{
                echo "<li>".$dane1[0].", występowanie " .$dane1[1]."</li>";
            }while($dane1 = mysqli_fetch_array($zapytanie1));
            ?>
            </ul>
        </div>
        <div class="prawy">
            <img src="ryba1.jpg" alt="Sum">
            <br>
            <a href="\kwerendy.txt" download="">Pobierz kwerendy</a>
        </div>
        <div class="stopka">
            <p>Stronę wykonał: 00000000000</p>
        </div>

    </div>
</body>
</html>l