<?php

$chemin = "../page_include/haeder.css";
$title = 'quiz';
include "../page_include/haeder.php";
include "../page_include/fonction.php";

$tabok = [];
$tabno = [];

?>

<link rel="stylesheet" href="../pagecss/quiz.css">

<body>

    
    <h1>Le quiz</h1>
    
    <P>
        Dans ce mini jeux votre but est de repondre au question et à la fin vous aurrez un score qui doit estre le plus haut
        possible!
</P>

<h2>thème: monster hunter</h2>

<?php
br(1,10);
?>


<div>

    <div class="gdiv1"> <!--n°1-->


        <h3>n°1</h3>
        <br>

        <img src="../image/image1mh.jpg">

        <h3>Quelle affliction ce monstre peut-il infliger ?</h3>

        <form method="get" action="#">

            <div <?php  ?> >
                <input type="radio" name="n1" value="Boueux">Boueux<br>
            </div>
            
            <div <?php  ?>>
                <input type="radio" name="n1" value="Poisse">Poisse<br>
            </div>

            <div <?php  ?>>
                <input type="radio" name="n1" value="Fléau-feu">Fléau-feu<br>
            </div>
            
            <div <?php  ?> >
                <input type="radio" name="n1" value="Aucune">Aucune<br>
            </div>


            
            
            
            
            <?php
        
        if(isset($_GET['n1'])){

            $n1 = $_GET['n1'];


            
            if($n1 == 'Poisse' ){
                
                $tabok[] = $n1;


                $n1 = true;
                
                
            }else{

                $tabno[] = $n1; 

                $n1 = false;
            }

        }
        
    ?>
    </div>




    <div class="gdiv1"><!--n°2-->
    

        <h3>n°2</h3>
        <br>

        <img src="../image/imafe2mh.jpg">

        <h3>Quelle est la particularité du Deviljho Carnage ?</h3>

        

            <div <?php  ?> >
                <input type="radio" name="n2" value="Il produit du feu">Il produit du feu<br>
            </div>

            <div <?php  ?>>
                <input type="radio" name="n2" value="Il est juste plus sombre que le Deviljho normal">Il est juste plus sombre que le Deviljho normal<br>
            </div>

            <div <?php  ?>>
                <input type="radio" name="n2" value="Il est naturellement enragé">Il est naturellement enragé<br>
            </div>
            
            <div <?php  ?> >
                <input type="radio" name="n2" value="Il peut nous infliger l'affliction ''hémorragie''">Il peut nous infliger l'affliction ''hémorragie''<br>
            </div>
            

          
            
            

        <?php
        
        if(isset($_GET['n2'])){

            $n2 = $_GET['n2'];



            if($n2 == 'Il est naturellement enragé' ){
                
                $tabok[] = $n2;

                $n2 = true;
                
                
            }else{

                $tabno[] = $n2; 

                $n2 = false;
            }

        }

    ?>
    </div>
</div>




<div class="gdiv1"><!--n°3-->


        <h3>n°3</h3>
        <br>

        <img src="../image/image3mh.jpg">

        <h3>Quelle est la particularité du cri du Tigrex Berserk ?</h3>

        

            <div <?php  ?> >
                <input type="radio" name="n3" value="Il inflige des dégâts extrêmes">Il inflige des dégâts extrêmes<br>
            </div>
            
            <div <?php  ?>>
                <input type="radio" name="n3" value="Il est anormalement grave">Il est anormalement grave<br>
            </div>

            <div <?php  ?>>
                <input type="radio" name="n3" value="Il peut nous brûler">Il peut nous brûler<br>
            </div>

            <div <?php  ?> >
                <input type="radio" name="n3" value="Il ne le fait que lorsqu'il est enragé">Il ne le fait que lorsqu'il est enragé<br>
            </div>

            

            

        <?php
        
        if(isset($_GET['n3'])){

            $n3 = $_GET['n3'];



            if($n3 == 'Il inflige des dégâts extrêmes' ){
                
                $tabok[] = $n3;

                $n3 = true;
                
                
            }else{
                
                $tabno[] = $n3; 

                $n3 = false;
            }

        }

    ?>
    </div>
</div>




<div class="gdiv1"><!--n°4-->


<h3>n°4</h3>
<br>

        <img src="../image/image4mh.jpg">

        <h3>Quel élément ou quelle affliction le Teostra utilise-t-il ?</h3>
        
        

            <div <?php  ?> >
                <input type="radio" name="n4" value="Feu">Feu<br>
            </div>

            <div <?php  ?>>
                <input type="radio" name="n4" value="Poison">Poison<br>
            </div>
            
            <div <?php  ?>>
                <input type="radio" name="n4" value="Feu et poisse">Feu et poisse<br>
            </div>

            <div <?php  ?> >
                <input type="radio" name="n4" value="Paralysie">Paralysie<br>
            </div>



        

        <?php
        
        if(isset($_GET['n4'])){

            $n4 = $_GET['n4'];



            if($n4 == 'Feu et poisse' ){
                
                $tabok[] = $n4;

                $n4 = true;
                
                
            }else{

                $tabno[] = $n4; 

                $n4 = false;
            }

        }

    ?>
    </div>
</div>




<div class="gdiv1"><!--n°5-->


<h3>n°5</h3>
<br>

<img src="..//image/image5mh.jpg">

<h3>Quel fléau le rayon sonique de l'Akantor inflige-t-il ?</h3>



            <div <?php  ?> >
                <input type="radio" name="n5" value="Fléau-feu">Fléau-feu<br>
            </div>

            <div <?php  ?>>
                <input type="radio" name="n5" value="Fleau-glace">Fleau-glace<br>
            </div>

            <div <?php  ?>>
                <input type="radio" name="n5" value="Fléau-foudre">Fléau-foudre<br>
            </div>
            
            <div <?php  ?> >
                <input type="radio" name="n5" value="Fléau-dragon">Fléau-dragon<br>
            </div>

            

            
            
        <?php
        
        if(isset($_GET['n5'])){

            
            $n5 = $_GET['n5'];
            
            
            
            if($n5 == 'Fléau-dragon' ){
                
                $tabok[] = $n5;

                $n5 = true;
                
                
            }else{

                $tabno[] = $n5; 

                $n5 = false;
            }
            
        }

    ?>
    </div>
</div>




<div class="gdiv1"><!--n°6-->


<h3>n°6</h3>
<br>

        <img src="../image/image6mh.jpg">

        <h3>Quels monstres peut-on affronter sur l'île d'Ingle dans ''MH4U'' ?</h3>

        

        <div <?php  ?> >
                <input type="radio" name="n6" value="Akantor, Fatalis Pourpre, Brachydios Tempête">Akantor, Fatalis Pourpre, Brachydios Tempête<br>
            </div>
            
            <div <?php  ?>>
                <input type="radio" name="n6" value="Akantor, Teostra">Akantor, Teostra<br>
            </div>

            <div <?php  ?>>
                <input type="radio" name="n6" value="Teostra, Brachydios, Fatalis">Teostra, Brachydios, Fatalis<br>
            </div>
            
            <div <?php  ?> >
                <input type="radio" name="n6" value="Uragaan d'acier, Fatalis, Brachydios, Agnaktor">Uragaan d'acier, Fatalis, Brachydios, Agnaktor<br>
            </div>
            


     

            <?php
        
        if(isset($_GET['n6'])){
            
            $n6 = $_GET['n6'];



            if($n6 == 'Akantor, Fatalis Pourpre, Brachydios Tempête' ){
                
                $tabok[] = $n6;

                $n6 = true;
                
                
            }else{

                $tabno[] = $n6; 

                $n6 = false;
            }
            
        }

    ?>
    </div>
</div>




<div class="gdiv1"><!--n°7-->


        <h3>n°7</h3>
        <br>
        
        <img src="../image/image7mh.jpg">
        
        <h3>Quel est le nom de la femelle du Teostra ?</h3>

        

            <div <?php  ?> >
                <input type="radio" name="n7" value="Teastra">Teastra<br>
            </div>
            
            <div <?php  ?> >
                <input type="radio" name="n7" value="Liastra">Liastra<br>
            </div>

            <div <?php  ?>>
                <input type="radio" name="n7" value="Lunastra">Lunastra<br>
            </div>

            <div <?php  ?> >
                <input type="radio" name="n7" value="Le nom est identique, c'est juste une Teostra femelle">Le nom est identique, c'est juste une Teostra femelle<br>
            </div>

            

        
   
            <?php
        
        if(isset($_GET['n7'])){

            $n7 = $_GET['n7'];



            if($n7 == 'Lunastra' ){
                
                $tabok[] = $n7;

                $n7 = true;
                
                
            }else{

                $tabno[] = $n7; 

                $n7 = false;
            }
            
        }
        
    ?>
    </div>
</div>




<div class="gdiv1"><!--n°8-->


        <h3>n°8</h3>
        <br>

        <img src="../image/image8mh.jpg">

        <h3>Quel est le surnom du Rajang ?</h3>

        
        
            <div <?php  ?> >
                <input type="radio" name="n8" value="Gorille-taureau">Gorille-taureau<br>
            </div>
            
            <div <?php  ?> >
                <input type="radio" name="n8" value="Singe Super Saiyan">Singe Super Saiyan<br>
            </div>

            <div <?php  ?>>
                <input type="radio" name="n8" value="Gros Singe">Gros Singe<br>
            </div>

            <div <?php  ?> >
                <input type="radio" name="n8" value="L'Abomination">L'Abomination<br>
            </div>

            
            
            
            <?php
        
        if(isset($_GET['n8'])){

            $n8 = $_GET['n8'];
            
            

            if($n8 == 'Singe Super Saiyan' ){
                
                $tabok[] = $n8;
                
                $n8 = true;
                
                
                
                $tabno[] = $n8; 
            }else{
                
                $n8 = false;
            }

        }
        
    ?>
    </div>
</div>




<div class="gdiv1"><!--n°9-->


        <h3>n°9</h3>
        <br>
        
        <img src="../image/image9mh.jpg">
        
        <h3>À quoi la formation d'immenses cristaux dans la Terre des Anciens est-elle due ?</h3>
        
        
        
        <div <?php  ?> >
            <input type="radio" name="n9" value="La chaleur">La chaleur<br>
        </div>
        
        <div <?php  ?> >
            <input type="radio" name="n9" value="La bioénergie abondante">La bioénergie abondante<br>
        </div>
        
            <div <?php  ?>>
                <input type="radio" name="n9" value="Un dragon ancien">Un dragon ancien<br>
            </div>
            
            <div <?php  ?> >
                <input type="radio" name="n9" value="Une explosion">Une explosion<br>
            </div>



            
  
            <?php
        
        if(isset($_GET['n9'])){

            
            $n9 = $_GET['n9'];
            
            
            
            if($n9 == 'La bioénergie abondante' ){
                
                $tabok[] = $n9;

                $n9 = true;
                
                
            }else{

                $tabno[] = $n9; 

                $n9 = false;
            }
            
        }

    ?>
    </div>
</div>




<div class="gdiv1"><!--n°10-->


<h3>n°10</h3>
<br>

<img src="../image/image10mh.jpg">

<h3>D'où viennent les pouvoirs draconiques du Zinogre Stygien ?</h3>



<div <?php  ?> >
    <input type="radio" name="n10" value="Ces pouvoirs viennent de ses cornes">Ces pouvoirs viennent de ses cornes<br>
</div>

<div <?php  ?> >
    <input type="radio" name="n10" value="Ils viennent d'un organe spécial">Ils viennent d'un organe spécial<br>
</div>

            <div <?php  ?>>
                <input type="radio" name="n10" value="Cela vient d'une maladie l'ayant fait muter">Cela vient d'une maladie l'ayant fait muter<br>
            </div>
            
            <div <?php  ?> >
                <input type="radio" name="n10" value="Il vit en symbiose avec des insectes dracophages">Il vit en symbiose avec des insectes dracophages<br>
            </div>

            
            
            <?php

br(1, 5)

        ?>

<button type="submit">envoyer</button>

</form>
    <?php
        
        if(isset($_GET['n10'])){
            
            $n10 = $_GET['n10'];
                 
            
            if($n10 == 'Il vit en symbiose avec des insectes dracophages' ){
                
                $tabok[] = $n10;
                
                $n10 = true;
                
                
            }else{

                $tabno[] = $n10; 

                $n10 = false;
            }
            
        }
        
    ?>
    </div>
</div>






<?php 

    br(1, 10);
    ?>


<div>

        <div>

            <h3>les bonne reponce</h3>
        
            
            <?php foreach($tabok as $tabok1): ?>
                
                    <?= "-" . $tabok1 . "<br>"?> 
                    
                    <?php endforeach; ?> 
                    
                    
                </div>
                
            </div>
            
            <div>
                
                <div>
                    
                    <h3>les mauvaise reponce</h3>
                    
                    
                    <?php foreach($tabno as $tabno1): ?>
                
                    <?= "-" . $tabno1 . "<br>"?> 
                
            <?php endforeach; ?> 

            
        </div>
        
    </div>

    
</body>