<?php 

	echo "Exercício 1 <br />"; 
	$n1 = 1;
	$n2 = 5;
	$n3 = $n1 + $n2;

	if ($n3>20) {
		echo("$n3 é maior que 20, e o novo numero é ".$n3+8);
	}
	elseif ($n3<20) {
		echo("$n3 é menor que 20, e o novo numero é ".$n3 - 5 ."<br /> <br /> <br />");
	}


	echo "exercício 2 <br />";

	$n1 = 5;

	if ($n1 % 2 == 0 ) {
		echo "é divisível por 2..;";
	}
	elseif ($n1 % 5 == 0) {
		echo "é divisivel pr 5...";
	}


 ?>