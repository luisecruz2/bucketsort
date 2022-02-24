<?php
//ordena un array numerico y devuelve el mismo array ordenado
function arraySort(&$arreglo){
    $long = count($arreglo);
    for ($i = 0; $i < $long; $i++) {
        for ($j = 0; $j < $long - 1; $j++) {
            if ($arreglo[$j] > $arreglo[$j + 1]) {
                $tmp = $arreglo[$j];
                $arreglo[$j] = $arreglo[$j + 1];
                $arreglo[$j + 1] = $tmp;
            }
        }
    }
}
$numBotes = readline('cantidad de botes: ');
//validar que sea un entero
$tamanoBotes = readline('Tamaño de botes: ');
//validar que el tamaño sea un entero mayor a 0
$serieNumerica = readline('Serie de números separados por ",": ');
//validar con regex que este separada por numeros
$arregloSerie = explode(',', $serieNumerica);
# se crean los botes vacios segun numBotes
$allElements = array();
for ($i=0; $i < $numBotes ; $i++) {
    $allBucket[$i]  = array();
    $orderBucket[$i]  = array();
    for ($j=0; $j <count($arregloSerie) ; $j++) { 
        //validar si está en rango
        //$max = ($numBotes*($i+1))+$i;
        $max = ($i+1) * $tamanoBotes+$i;
        $min = $max- $tamanoBotes;
        if($arregloSerie[$j] >= $min && $arregloSerie[$j] <=$max ){
             //solo para mostrarlo desordenado
            array_push($allBucket[$i], $arregloSerie[$j]);
            array_push($orderBucket[$i], $arregloSerie[$j]);
            arraySort($orderBucket[$i]);   
        }
    }
}
//mostrar clasificacion sin ordenar
print_r("Sin ordenar:\n");
print_r($allBucket);
//mostrar los botes clasificados y ordenados
print_r("Ordenados:\n");
print_r($orderBucket);
//mostrar toda la serie ordenada de numeros
print_r("Todo el array ordenado:\n");


?>