<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

    $arr = [];

        $n = range(1,16);
        shuffle($n);
        for ($x=0; $x < 15; $x++) {
            $arr[] = $n[$x];
        }

        var_dump($arr); 

?>

<!-- soluzione 2  -->

<?php 
    $numbers = [];

    while(count($numbers)) {
        $newNumb = rand(1, 100);
        
        if(!in_array($newNumb, $numbers)){
            $numbers[] = $newNumb;
        }
    }
?>
