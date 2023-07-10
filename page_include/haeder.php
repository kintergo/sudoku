<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $chemin; ?>">
    
    <title>

        <?php 
        if(isset($title))
        { 
            echo $title; 
        }else
        { 
            echo 'mini jeux';
        } 
        ?>
   
    </title>

</head>
<body>

<div class="page">


    <ul>
    
    <li class="li1"><a href="index.php">accueil</a></li>
    <li class="li1"><a href="sudoku.php">sudoku</a></li>
    <li class="li2"><a href="quiz.php">quiz</a></li>
    <li class="li3"><a href="sudoku.php">connecter-vous</a></li>
    
    </ul>

   

</div>
    
</body>
</html>