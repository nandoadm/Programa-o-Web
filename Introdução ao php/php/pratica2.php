<?php
$salario1 = 1000;
$salario2 = 2000;
$salario1 += $salario2;
$salario2 += $salario1;
$salarioAumento = $salario1 * 1.1;
$int = 1;

for($int = 1; $int <= 55; $int++) {
    if($int = 50) {
        $salarioAumento += $salario2;
        break;
    }
    echo $salarioAumento;
}
echo" Salario sem aumento: ". $salario1 ." Salario com aumento de 10%: " .($salarioAumento);
if ($salario1 > $salario2){
    echo " Salario 1 é maior que salario 2";
}
else{
    echo " Salario 2 é maior que salario 1";   
}
?>