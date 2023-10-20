<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Web Applications and Technologies</title>
        <link type="text/css" rel="stylesheet" href="main.css" />
    </head>
    <body>
        <header>
            <h1>Ben Ferro C3654717</h1>
        </header>

        <section id="container">
            <h1>Fundamentals of PHP</h1>
            <h2>Selection</h2>
            <?php
                $date = date('l d F jy');
                $day = date('l');
                //$day = 'Wednesday'; 

                echo "it's $day <br>"; 

                if ($day == 'Wednesday') {
                    echo "<br>it's midweek<br>";
                }else {echo "<br>it's not midweek<br>";}

                $hour = date('G');
                if ($hour < 12){echo "<br>Good Morning<br>";}
                elseif ($hour >12 AND $hour <18) {echo "<br>Good Afternoon<br>";}
                elseif ($hour >18) {echo "<br>Good Night<br>";}

                $password = 'password';
                if (strlen($password) > 4 AND strlen($password) < 10) {echo '<br>Password length Valid<br>';}
                else {echo '<br>Password length is invalid<br>';}

                if ($password == 'password' OR $password == 'username') {echo '<br>Password Valid';}
                else {echo '<br>Password invalid';}
            ?>
            <h2>Arrays</h2>
            <h3>Simple Arrays</h3>
            <?php

            $products = array('t-shirt', 'cap', 'mug');
            print_r($products)

            

            ?>
        </section>
        
        
        <footer>
            <small> <a href="watIndex.html">Home</a></small>
        </footer>
    </body>
</html>
