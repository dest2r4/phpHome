<?php
# для меньших затрат времени
$b="<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		div
		{
			width: 48%;
			height: auto;
			margin: 0 1%;
			box-sizing: border-box;
			border: 2px dashed black;
			float: left;
		}
		h1
		{
			text-align: center;
		}
		p
		{
			font: 800 17px serif;
		}

	</style>
</head>
<body>
	<div>
		<h1>
			Работа с foreach
		</h1>
		<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.<br>
		<?php
		$arr1=['html', 'css', 'php', 'js', 'jq'];
		foreach ($arr1 as $value) {
			# code...
			echo $value.$b;
		}

		?>
		</p> 
		<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.<br>
		<?php
		$arr2=[1, 20, 15, 17, 24, 35];
		$sum=0;
		foreach ($arr2 as $value) {
			# code...
			$sum=$sum+$value;
		}
		echo $sum;
		?>
		</p>	
		<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.<br>
		<?php
		$arr3=[26, 17, 136, 12, 79, 15];
		$sum1=0;
		foreach ($arr3 as $val1) {
			# code...
			$sqrt=pow($val1,2);
			
			$sum1=$sum1+$sqrt;
		}
		echo $sum1;
		?>
		</p>
	</div>
	<div>
		<h1>работа с ключами</h1>
		<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.<br>
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');<br>
		
		<?php
		$arr=['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
		foreach ($arr as $key => $value) {
			# code...
			echo $key.$b;

		}
		foreach ($arr as $key => $value1) {
			# code...
			echo $value1.$b;
		}


		?>
		</p>
		<p>5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
долларов.'.<br>
		<?php
		$arr=['Коля'=>200, 'Вася'=>300, 'Петя'=>400];
		foreach ($arr as $key => $value) {
			# code...
			echo $key." -- зарплата".$value.$b;
		}



		?>
</p>
		<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
		русские — в массив $ru.
		$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
		$en = array('green', 'red','blue');
		$ru = array('зеленый', 'красный', 'голубой');<br>
		
		<?php
		
		$arr=['green'=>'зеленый','red'=>'красный', 'blue'=>'голубой'];
		$en=[];
		$ru=[];
		foreach ($arr as $key => $value) {
			# code...
			$alph_eng=['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
			$may_lang_key=substr($key, 0, 1);
			$may_lang_var=substr($value, 0, 1);
			if($key==in_array($may_lang_key, $alph_eng))
			{
				$en[]=$key;
			}
			else
			{
				$ru[]=$key;
			}
			
			if($value==in_array($may_lang_var, $alph_eng))
			{
				$en[]=$value;
			}
			else
			{
				$ru[]=$value;
			}
			



		}
foreach ($en as $key => $arr1) {
				echo $arr1.' ; ';
			}
			echo "<br>";
			foreach ($ru as $key => $arr2) {
				echo $arr2.' ; ';
			}
		?>

		</p>
		<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.<br>
		<?php
		$arr=[2, 5, 9, 15, 0, 4];
		foreach ($arr as $key => $value) {
			# code...
			if ($value>3 && $value<10) {
				# code...
				echo $value.$b;
			}
		}

		?>
</p>
		<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
'­1­2­3­4­5­6­7­8­9­'.<br>
		<?php
		$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
		$concat;
		foreach ($arr as $key => $value) {
			# code...
			$concat.=$value;
		}
		echo $concat;
		?>
		</p>

	</div>
	<div>
		<h1>
			циклы while и  for
		</h1>
		<p>9. Выведите столбец чисел от 1 до 100.
		<?php
		for($i=0;$i<100;$i++)
		{
			
			echo  $i." ; ";
			
		}
	


		?>
		</p>
		<p>9. Выведите столбец чисел от 11 до 33.
		<?php
		for($i=11;$i<34;$i++)
		{
			
			echo  $i." ; ";
			
		}
	


		?>
		</p>
		<p>11. Выведите столбец четных чисел в промежутке от нуля до 100.<br>
		<?php
		for($i=0;$i<100;$i++)
			if ($i%2==0) {
				# code...
				echo $i." ; ";
			}

		?>
		</p>
		<p>12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
этого (итерации — это количество проходов цикла), и запишите его в переменную $num.<br>
		<?php
		
		for($n=1000,$num=0;$n>50;$n/=2,$num++)
		{	
		echo $num." => ".$n.$b;
		}


		?>
</p>
<p>13. Вывести таблицу умножения<br>
	<?php
	$x=0;
	for($y=0;$y<11;$y++)
	{
		if ($y<11 && $x<11) {
			# code...
			$res=$x*$y;
			echo $x.' * '.$y.' == '.$res.$b;
			if ($y==10) {
				# code...
				$y=0;
				$x++;
				echo $b.$b.$b;
			}
		}
		
	}
	?>
</p>
	</div>
	
</body>
</html>