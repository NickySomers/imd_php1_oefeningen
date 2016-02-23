<?php 
    $messages = array(
        ["name" => "Theresa W.", "avatar" => "images/profiles/theresa.jpg", "place" => "East River Park", "city" => "Brooklyn, NY", "image" => "images/image.jpg", "minutesPosted" => 29],
        ["name" => "Nina M.", "avatar" => "images/profiles/nina.jpg", "place" => "Rubi Rosa", "city" => "New York, NY", "minutesPosted" => 30],
        ["name" => "Sean B.", "avatar" => "images/profiles/sean.jpg", "place" => "Blue Bottle Coffee", "city" => "South of Market", "minutesPosted" => 110],
        ["name" => "Mike A.", "avatar" => "images/profiles/mike.jpg", "place" => "Land's ...", "city" => "San Fransisco", "minutesPosted" => 120]
    );
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>

    <body>
        <?php include_once('header.php'); ?>
       
        <div class="container">
        <?php
            
            foreach($messages as $message){
                
                
                echo '<div class="item">';
                echo "<div class='avatar' style='background-image: url(". $message['avatar']. ")'></div>";
                echo "<div class='side'><p id='name'>" . $message["name"] . "</p>";
                echo "<p id='place'>" . $message["place"] . "</p>";
                echo "<p id='city'>" . $message["city"] . "</p>";

                if(isset($message["image"])){
                    echo "<img src='" . $message["image"] . "'/>";
                }
                
                echo '</div></div>';
            }
        ?>
        </div>
        
        <?php include_once('footer.php'); ?>
    </body>

    </html>