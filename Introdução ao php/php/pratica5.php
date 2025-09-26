<?php

$idade = array ("joao" => 20, "maria" => 25, "ana" => 30);
$idade = array_merge($idade, $idade);

foreach ($idade as $key => $value) {
    $idade[$key] = $value;
    echo "Idade de $key é $value <br>";
}
?>