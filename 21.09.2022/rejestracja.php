<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasze hobby</title>
    <link rel="stylesheet" href="hobby.css">
</head>
<body>
    <div class="container">
        <div class="baner">
            <h1>FORUM HOBBYSTYCZNE</h1>
        </div>

        <div class="lewy">
            <h3>FORMULARZ REJESTRACJI DO FORUM</h3>
            <p>Twoje dane</p>

            <?php
                $nick=$_POST['nick'];
                $zainteresowania=$_POST['zainteresowania'];
                $zawod=$_POST['zawod'];
                $plec=$_POST['plec'];
                $login=$_POST['login'];
                $haslo=$_POST['haslo'];

                $polacz=mysqli_connect('localhost', 'root', '', 'forum');

                mysqli_query($polacz,"insert into konta values(null,'$login','$haslo');");
                mysqli_query($polacz,"insert into uzytkownicy values(null, '$nick', '$zainteresowania',
                '$zawod', '$plec');");

                echo "Konto ", $nick, "zostało zarejestrowane na forum hobbystycznym";

                mysqli_close($polacz);


            ?>
        </div>

        <div class="prawy">
            <h3>TEMATYKA FORUM</h3>
            <ul>
            <li>Hodowla zwierząt</li>
                <ul>
                    <li>psy</li>
                    <li>koty</li>
                </ul>
             <li>Muzyka</li>
             <li>Gry komputerowe</li>
            </ul>
        </div>
    </div>
    
</body>
</html>