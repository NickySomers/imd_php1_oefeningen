<?php 
    $todo = array( 
        [ "Oefeningen PHP maken", 4, "School"], 
        [ "Portfolio website redesign", 20, "Werk"], 
        [ "Antwerpen Koekenstad app maken", 3, "Werk"], 
        [ "Stofzuigen", 0.5, "Thuis"], 
        [ "Plezier maken", 7, "Thuis"] 
    ); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>ToDo</title>
</head>

<body>
   <header>
       ToDo
   </header>
   <section>
    <?php for($i=0 ; $i < count($todo); $i++): ?>

        <?php if($todo[$i][1]> 5): ?>

        <article class="red">
            <?php echo $todo[$i][0]; ?>
        </article>

        <?php elseif($todo[$i][1] < 5 && $todo[$i][1] > 1): ?>

            <article class="orange">
                <?php echo $todo[$i][0]; ?>
            </article>

        <?php else: ?>
            <article class="green">
                <?php echo $todo[$i][0]; ?>
            </article>
        <?php endif; ?>

    <?php endfor; ?>
    </section>
</body>

</html>