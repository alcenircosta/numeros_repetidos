<?php

$numeros = [];
$numeros_sorteados = [];
$numeroMaisRepetido;
$vezesQueRepetiu = 0;

// Gerando os numeros aleatórios para o array
for ($i = 0; $i<20; $i++){
	$numeros[$i] = rand(1,10);
}
$numeros_sorteados = $numeros;


// Percorrendo o array e contando repeticoes
for ($i=0; $i < sizeof($numeros) ; $i++) {
	if($numeros[$i] != null){
		$rep = 1;
		for ($j=$i+1; $j < sizeof($numeros) ; $j++) { 
			if($numeros[$j] == $numeros[$i]){
				$rep ++;
				$numeros[$j] = null;
			}
		}
		if($rep > $vezesQueRepetiu){
			$vezesQueRepetiu = $rep;
			$numeroMaisRepetido = $numeros[$i];
		}
		$numeros[$i] = null;
	}
}


// Montando exibição 
echo "Array sorteado = [";
for ($i=0; $i < sizeof($numeros); $i++) { 
	if($i == sizeof($numeros)-1){
		echo $numeros_sorteados[$i]."]";
	}else{
		echo $numeros_sorteados[$i].",";
	}
}

echo "<br>O número que mais se repete é o $numeroMaisRepetido .<br>";
echo "Ele se repete $vezesQueRepetiu vezes.";