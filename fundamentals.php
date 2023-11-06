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


              $ticketPrice = 25;
              $age = 15;
              echo 'initial Ticket Price: ' . $ticketPrice . '<br>';
              echo 'Age: ' . $age . '<br>';
              $membership = True;

              if ($age < 12) {
                $discount = 50;
                if ( $membership == True) {
                  $discount = $discount + 10;
                  $ticketPrice = $ticketPrice - $discount*$ticketPrice/100;}
                $ticketPrice = $ticketPrice - $discount*$ticketPrice/100;}

              if ($age < 18) {
                $discount = 25;
                if ( $membership == True) {
                  $discount = $discount + 10;
                  $ticketPrice = $ticketPrice - $discount*$ticketPrice/100;}
                $ticketPrice = $ticketPrice - $discount*$ticketPrice/100;}


              if ($age > 65) {
                $discount = 25;
                if ( $membership == True) {
                  $discount = $discount + 10;
                  $ticketPrice = $ticketPrice - $discount*$ticketPrice/100;}
                $ticketPrice = $ticketPrice - $discount*$ticketPrice/100;}


              echo 'Final ticket price:' . $ticketPrice;

              






            ?>
            <h2>Arrays</h2>
            <h3>Simple Arrays</h3>
            <?php

            $products = array('t-shirt', 'cap', 'mug');
            print_r($products);
            echo '<br />';
            $products[1] = 'shirt';
            print_r($products);
            echo '<br />';
            $products[] = 'skirt';
            print_r($products);
            ?>

          <h3>Associative Arrays</h3>
          <?php

          $form = array('CustID' => 12, 'CustName' => 'Sarah', 'CustAge' => 23, 'CustGender' => 'F');
          print_r($form);
          echo '<br />';
          $form['CustAge'] = 32;
          $form['CustEmail'] = 'sarah@gmail.com';
          print_r($form);
          echo '<br /> Items in my customer array';
          echo '<br />The item at index[CustName] is: ' . $form['CustName'];
          echo '<br />The item at index[CustEmail] is: ' . $form['CustEmail'];

          ?>

          <h3>Multi-Dimenstional Arrays</h3>
          <?php

          $stock = array(
            'id1' => array(
              'description' => 't-shirt',
              'price' => 9.99,
              'stock' => 100,
              'colour' => array('blue', 'green', 'red')),
            'id2' => array(
              'description' => 'cap',
              'price' => 4.99,
              'stock' => 50,
              'colour' => array('blue', 'black', 'grey')),
            'id3' => array(
            'description' => 'mug',
            'price' => 6.99,
            'stock' => 30,
            'colour' => array('yellow', 'green', 'pink')));

          echo '<br /> This is my order';
          echo '<br />' . $stock['id1']['colour'][1] . ' ' . $stock['id1']['description'] ;

          echo '<br /> Price: £' . $stock['id1']['price'];
          echo '<br />' . $stock['id2']['colour'][2] . ' ' . $stock['id2']['description'] ;
          echo '<br /> Price: £' . $stock['id2']['price'];

         ?>


          <h2>Loops</h2>
          <h3>While Loop</h3>
          <?php

          $counter = 1;
          while ($counter < 6) {
            echo 'Count: ' . $counter . '<br />';
            $counter++;}

          $shirtPrice = 9.99;
          echo '<table style = "border-collapse: collapse;">';
          echo '<tr><th style = "border: 1px solid black;">Quantity</th><th style = "border: 1px solid black;">Price</th></tr>';
          $counter = 1;
          while ($counter <= 10) {
            $total = $counter * $shirtPrice;
            echo '<tr><td style = "border: 1px solid black;">', $counter , '</td><td style = "border: 1px solid black;">£' , number_format($total,2), "</td></tr>";
            $counter++;
          }

          echo '</table>';




        ?>

          <h3>For Loop</h3>
          <?php

          $names = array('Peter','Kat','Laura','Ali','Popacatapetal');
          for ($i = 0; $i < 5; $i++) {
            echo $names[$i] .'<br />';
          }

          ?>

          <h3>Foreach Loop</h3>
          <?php

          $names = array(
              array('Name' => 'Peter', 'ID' => 'c123456'),
              array('Name' => 'Kat', 'ID' => 'c654321'),
              array('Name' => 'Laura', 'ID' => 'c987654'),
              array('Name' => 'Ali', 'ID' => 'c654987'),
              array('Name' => 'Popacatapetal', 'ID' => 'c765984')
          );

          foreach ($names as $name) {
              echo 'Name: ' . $name['Name'] . ' ID: ' . $name['ID'] . '<br />';
          }
          ?>


          <?php
            $city = array('peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');

            print_r($city);
            echo '<br />';

            foreach ($city as $key => $value) {
              $city[$key] = strtolower($value);
              $city[$key] = ucfirst($city[$key]);
            }
            print_r($city);
            


            ?>



          

        </section>


        <footer>
            <small> <a href="watIndex.html">Home</a></small>
        </footer>
    </body>
</html>
