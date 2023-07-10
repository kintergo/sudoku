<?php

$chemin = "../page_include/haeder.css";
$title = 'sudoku';
include "../page_include/haeder.php";
include "../page_include/fonction.php";

?>

<link rel="stylesheet" href="../pagecss/sudoku.css">

<h1> <u>sudoku</u> </h1>



<!-- case sudoku -->
<div class="ggdiv">

    <form action="" method="post">

        <div class="gdiv1">

            <div class="div1">

                <!-- form7 -->



                <input type="number" name="1" id="1">
                <input type="number" readonly value="9">
                <input type="number" name="2" id="2">
                <br>
                <input type="number" readonly value="3">
                <input type="number" readonly value="4">
                <input type="number" name="3" id="3">
                <br>
                <input type="number" name="4" id="4">
                <input type="number" readonly value="7">
                <input type="number" readonly value="2">



            </div>

            <div class="div2">

                <!-- form8 -->



                <input type="number" name="5" id="5">
                <input type="number" readonly value="2">
                <input type="number" name="6" id="6">
                <br>
                <input type="number" name="7" id="7">
                <input type="number" name="8" id="8">
                <input type="number" readonly value="1">
                <br>
                <input type="number" readonly value="9">
                <input type="number" readonly value="6">
                <input type="number" name="9" id="9">



            </div>

            <div class="div3">

                <!-- form9 -->



                <input type="number" readonly value="7">
                <input type="number" name="10" id="10">
                <input type="number" readonly value="4">
                <br>
                <input type="number" readonly value="6">
                <input type="number" name="11" id="11">
                <input type="number" readonly value="9">
                <br>
                <input type="number" name="12" id="12">
                <input type="number" name="13" id="13">
                <input type="number" readonly value="5">



            </div>

        </div>

        <div class="gdiv2">

            <div class="div4">

                <!-- form4 -->



                <input type="number" name="14" id="14">
                <input type="number" name="15" id="15">
                <input type="number" name="16" id="16">
                <br>
                <input type="number" readonly value="1">
                <input type="number" name="17" id="17">
                <input type="number" name="18" id="18">
                <br>
                <input type="number" name="19" id="19">
                <input type="number" readonly value="9">
                <input type="number" readonly value="8">



            </div>

            <div class="div5">

                <!-- form5 -->



                <input type="number" name="20" id="20">
                <input type="number" name="21" id="21">
                <input type="number" readonly value="6">
                <br>
                <input type="number" readonly value="7">
                <input type="number" name="22" id="22">
                <input type="number" readonly value="9">
                <br>
                <input type="number" readonly value="8">
                <input type="number" name="23" id="23">
                <input type="number" name="24" id="24">



            </div>

            <div class="div6">

                <!-- form6 -->



                <input type="number" readonly value="9">
                <input type="number" readonly value="5">
                <input type="number" name="25" id="25">
                <br>
                <input type="number" name="26" id="26">
                <input type="number" name="27" id="27">
                <input type="number" readonly value="4">
                <br>
                <input type="number" name="28" id="28">
                <input type="number" name="29" id="29">
                <input type="number" name="30" id="30">



            </div>

        </div>


        <div class="gdiv3">

            <div class="div7">

                <!-- form1 -->



                <input type="number" readonly value="4">
                <input type="number" name="31" id="31">
                <input type="number" name="32" id="32">
                <br>
                <input type="number" readonly value="8">
                <input type="number" name="33" id="33">
                <input type="number" readonly value="7">
                <br>
                <input type="number" readonly value="6">
                <input type="number" name="34" id="34">
                <input type="number" readonly value="1">



            </div>

            <div class="div8">

                <!-- form2 -->




                <input type="number" name="35" id="35">
                <input type="number" readonly value="8">
                <input type="number" readonly value="9">
                <br>
                <input type="number" readonly value="2">
                <input type="number" name="36" id="36">
                <input type="number" name="37" id="37">
                <br>
                <input type="number" name="38" id="38">
                <input type="number" readonly value="5">
                <input type="number" name="39" id="39">



            </div>

            <div class="div9">

                <!-- form3 -->



                <input type="number" readonly value="3">
                <input type="number" readonly value="6">
                <input type="number" name="40" id="40">
                <br>
                <input type="number" name="41" id="41">
                <input type="number" readonly value="1">
                <input type="number" readonly value="8">
                <br>
                <input type="number" name="42" id="42">
                <input type="number" readonly value="7">
                <input type="number" name="43" id="43">



            </div>

        </div>

</div>
<div class="button">

    <button type="submit" value="envoyer">envoyer</button>

</div>

</form>




<?php 

if(isset($_POST["1"]) and isset($_POST["2"]) and isset($_POST["3"]) and isset($_POST["4"]) and isset($_POST["5"]) and isset($_POST["6"]) and isset($_POST["7"]) and isset($_POST["8"]) and isset($_POST["9"]) and isset($_POST["10"]) and isset($_POST["11"]) and isset($_POST["12"]) and isset($_POST["13"]) and isset($_POST["14"]) and isset($_POST["15"]) and isset($_POST["16"]) and isset($_POST["17"]) and isset($_POST["18"]) and isset($_POST["19"]) and isset($_POST["20"]) and isset($_POST["21"]) and isset($_POST["22"]) and isset($_POST["23"]) and isset($_POST["24"]) and isset($_POST["25"]) and isset($_POST["26"]) and isset($_POST["27"]) and isset($_POST["28"]) and isset($_POST["29"]) and isset($_POST["30"]) and isset($_POST["31"]) and isset($_POST["32"]) and isset($_POST["33"]) and isset($_POST["34"]) and isset($_POST["35"]) and isset($_POST["36"]) and isset($_POST["37"]) and isset($_POST["38"]) and isset($_POST["39"]) and isset($_POST["40"]) and isset($_POST["41"]) and isset($_POST["42"]) and isset($_POST["43"])){
    
    $ch1 = $_POST["1"];
    $ch2 = $_POST["2"];
    $ch3 = $_POST["3"];
    $ch4 = $_POST["4"];
    $ch5 = $_POST["5"];
    $ch6 = $_POST["6"];
    $ch7 = $_POST["7"];
    $ch8 = $_POST["8"];
    $ch9 = $_POST["9"];
    $ch10 = $_POST["10"];
    $ch11 = $_POST["11"];
    $ch12 = $_POST["12"];
    $ch13 = $_POST["13"];
    $ch14 = $_POST["14"];
    $ch15 = $_POST["15"];
    $ch16 = $_POST["16"];
    $ch17 = $_POST["17"];
    $ch18 = $_POST["18"];
    $ch19 = $_POST["19"];
    $ch20 = $_POST["20"];
    $ch21 = $_POST["21"];
    $ch22 = $_POST["22"];
    $ch23 = $_POST["23"];
    $ch24 = $_POST["24"];
    $ch25 = $_POST["25"];
    $ch26 = $_POST["26"];
    $ch27 = $_POST["27"];
    $ch28 = $_POST["28"];
    $ch29 = $_POST["29"];
    $ch30 = $_POST["30"];
    $ch31 = $_POST["31"];
    $ch32 = $_POST["32"];
    $ch33 = $_POST["33"];
    $ch34 = $_POST["34"];
    $ch35 = $_POST["35"];
    $ch36 = $_POST["36"];
    $ch37 = $_POST["37"];
    $ch38 = $_POST["38"];
    $ch39 = $_POST["39"];
    $ch40 = $_POST["40"];
    $ch41 = $_POST["41"];
    $ch42 = $_POST["42"];
    $ch43 = $_POST["43"];

    $c1 = null;
    $c2 = null;
    $c3 = null;
    $c4 = null;
    $c5 = null;
    $c6 = null;
    $c7 = null;
    $c8 = null;
    $c9 = null;
    $c10 = null;
    $c11 = null;
    $c12 = null;
    $c13 = null;
    $c14 = null;
    $c15 = null;
    $c16 = null;
    $c17 = null;
    $c18 = null;
    $c19 = null;
    $c20 = null;
    $c21 = null;
    $c22 = null;
    $c23 = null;
    $c24 = null;
    $c25 = null;
    $c26 = null;
    $c27 = null;
    $c28 = null;
    $c29 = null;
    $c30 = null;
    $c31 = null;
    $c32 = null;
    $c33 = null;
    $c34 = null;
    $c35 = null;
    $c36 = null;
    $c37 = null;
    $c38 = null;
    $c39 = null;
    $c40 = null;
    $c41 = null;
    $c42 = null;
    $c43 = null;
    
    $tab = [];
    

    if($ch1 == 1){
        $c1 = true;
    }else{
        $c1 = false;
        $tab[] = $ch1;
    }

    if($ch2 == 8){
        $c2 = true;
    }else{
        $c2 = false;
        $tab[] = $ch2;
    }

    if($ch3 == 6){
        $c3 = true;
    }else{
        $c3 = false;
        $tab[] = $ch3;
    }

    if($ch4 == 5){
        $c4 = true;
    }else{
        $c4 = false;
        $tab[] = $ch4;
    }

    if($ch5 == 4){
        $c5 = true;
    }else{
        $c5 = false;
        $tab[] = $ch5;
    }

    if($ch6 == 3){
        $c6 = true;
    }else{
        $c6 = false;
        $tab[] = $ch6;
    }

    if($ch7 == 8){
        $c7 = true;
    }else{
        $c7 = false;
        $tab[] = $ch7;
    }

    if($ch8 == 5){
        $c8 = true;
    }else{
        $c8 = false;
        $tab[] = $ch8;
    }

    if($ch9 == 7){
        $c9 = true;
    }else{
        $c9 = false;
        $tab[] = $ch9;
    }

    if($ch10 == 8){
        $c10 = true;
    }else{
        $c10 = false;
        $tab[] = $ch10;
    }

    if($ch11 == 3){
        $c11 = true;
    }else{
        $c11 = false;
        $tab[] = $ch11;
    }

    if($ch12 == 2){
        $c12 = true;
    }else{
        $c12 = false;
        $tab[] = $ch12;
    }

    if($ch13 == 1){
        $c13 = true;
    }else{
        $c13 = false;
        $tab[] = $ch13;
    }

    if($ch14 == 3){
        $c14 = true;
    }else{
        $c14 = false;
        $tab[] = $ch14;
    }

    if($ch15 == 6){
        $c15 = true;
    }else{
        $c15 = false;
        $tab[] = $ch15;
    }

    if($ch16 == 7){
        $c16 = true;
    }else{
        $c16 = false;
        $tab[] = $ch16;
    }

    if($ch17 == 2){
        $c17 = true;
    }else{
        $c17 = false;
        $tab[] = $ch17;
    }

    if($ch18 == 5){
        $c18 = true;
    }else{
        $c18 = false;
        $tab[] = $ch18;
    }

    if($ch19 == 4){
        $c19 = true;
    }else{
        $c19 = false;
        $tab[] = $ch19;
    }

    if($ch20 == 5){
        $c20 = true;
    }else{
        $c20 = false;
        $tab[] = $ch20;
    }

    if($ch21 == 1){
        $c21 = true;
    }else{
        $c21 = false;
        $tab[] = $ch21;
    }

    if($ch22 == 3){
        $c22 = true;
    }else{
        $c22 = false;
        $tab[] = $ch22;
    }

    if($ch23 == 4){
        $c23 = true;
    }else{
        $c23 = false;
        $tab[] = $ch23;
    }

    if($ch24 == 2){
        $c24 = true;
    }else{
        $c24 = false;
        $tab[] = $ch24;
    }

    if($ch25 == 1){
        $c25 = true;
    }else{
        $c25 = false;
        $tab[] = $ch25;
    }

    if($ch26 == 2){
        $c26 = true;
    }else{
        $c26 = false;
        $tab[] = $ch26;
    }

    if($ch27 == 7){
        $c27 = true;
    }else{
        $c27 = false;
        $tab[] = $ch27;
    }

    if($ch28 == 6){
        $c28 = true;
    }else{
        $c28 = false;
        $tab[] = $ch28;
    }

    if($ch29 == 8){
        $c29 = true;
    }else{
        $c29 = false;
        $tab[] = $ch29;
    }

    if($ch30 == 3){
        $c30 = true;
    }else{
        $c30 = false;
        $tab[] = $ch30;
    }

    if($ch31 == 2){
        $c31 = true;
    }else{
        $c31 = false;
        $tab[] = $ch31;
    }

    if($ch32 == 5){
        $c32 = true;
    }else{
        $c32 = false;
        $tab[] = $ch32;
    }

    if($ch33 == 9){
        $c33 = true;
    }else{
        $c33 = false;
        $tab[] = $ch33;
    }

    if($ch34 == 3){
        $c34 = true;
    }else{
        $c34 = false;
        $tab[] = $ch34;
    }

    if($ch35 == 7){
        $c35 = true;
    }else{
        $c35 = false;
        $tab[] = $ch35;
    }

    if($ch36 == 4){
        $c36 = true;
    }else{
        $c36 = false;
        $tab[] = $ch36;
    }

    if($ch37 == 6){
        $c37 = true;
    }else{
        $c37 = false;
        $tab[] = $ch37;
    }

    if($ch38 == 1){
        $c38 = true;
    }else{
        $c38 = false;
        $tab[] = $ch38;
    }

    if($ch39 == 3){
        $c39 = true;
    }else{
        $c39 = false;
        $tab[] = $ch39;
    }

    if($ch40 == 2){
        $c40 = true;
    }else{
        $c40 = false;
        $tab[] = $ch40;
    }

    if($ch41 == 5){
        $c41 = true;
    }else{
        $c41 = false;
        $tab[] = $ch41;
    }

    if($ch42 == 9){
        $c42 = true;
    }else{
        $c42 = false;
        $tab[] = $ch42;
    }

    if($ch43 == 4){
        $c43 = true;
    }else{
        $c43 = false;
        $tab[] = $ch43;
    }


    if( $c1 && $c2 && $c3 && $c4 && $c5 && $c6 && $c7 && $c8 && $c9 && $c10 && $c11 && $c12 && $c13 && $c14 && $c15 && $c16 && $c17 && $c18 && $c19 && $c20 && $c21 && $c22 && $c23 && $c24 && $c25 && $c26 && $c27 && $c28 && $c29 && $c30 && $c31 && $c32 && $c33 && $c34 && $c35 && $c36 && $c37 && $c38 && $c39 && $c40 && $c41 && $c42 && $c43 == true )
    :
    ?>

<div class="dv1">
    <p>bravo vous avez réussi 😀 </p>
</div>

<?php
    else:
    ?>

<div class="dv1">
    <p>hoo tu as fais des érreur: <br>
        <?php 
        foreach($tab as $tab1){
            echo " -$tab1 <br>";
        }
    ?>
    </p>
</div>

<?php
    endif;

    
}

    

?>


<?php


$br = 1;
$n = 30;

br($br, $n);
?>

<h2><u>les règle !</u></h2>

<?php


$br1 = 1;
$n1 = 5;

br($br1, $n1);
?>

<div class="re">

    <p>Le sudoku est une grille carrée divisée en n² région de n² cases et possède n² colonnes, n² lignes et n²*n² cases.<br> La seule régle à respecter est: dans chaque ligne, chaque colonne, chaque région,<br> les chiffres de 1 à n² apparaissent une et une seule fois. Dans la version courante n=3.</p>

</div>
