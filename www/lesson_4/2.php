<?php 


$html="
 <form action='2.php' method='POST' > 
 <h2>Text1</h2> 
<textarea name='area1'></textarea>
<br>
<input type='submit' value='send texts'>
</form>";
echo $html;

$textarea_value=$_POST['area1'];

#print_r($textarea_value);
#lenght_value($textarea_value);



function lenght_value($val){
	$lenght=[];
	$new_arr=explode(" ", $val );
	foreach ($new_arr as $value) {
		# code...
		$lenght[$value]=strlen($value);
		#echo $value. " == ".$lenght[$value]."<br>" ;
		#итого, со ф-и получаем 1) обработка строка --> массив 2) с массива -->список слово-длина	
	}
	return $lenght;
	
}

function most_lenght_words($string,$number=3){
	# делаем второй параметр как к-во строк, чтобы можно было спокойно выводить любое нужное к-во строк
	#теперь обрабатываем данные с формы 
	$new=lenght_value($string);
	#сортируем по значению и выгребаем с отсортированного массива ключи(наши слова)
	$x=arsort($new);
	$keys=array_keys($new);
	#перебираем необходимое к-во элементов и выводим
	#Дальше я нашел 2 варианта развития, и прошу подсказать что лучше
	#
	#1) этот вариант, но возникает вопрос с выводом
	/*
	$keys=array_slice($keys, 0,$number);
	print_r($keys);
	*/
	# вариант №2 тут без ф-й, но так же все работает
	
	
	for ($t=0; $t <$number ; $t++) { 
		# code...
		echo "top word -". $t ." == ".$keys[$t]."<br>";

	};

};
most_lenght_words ($textarea_value);
?>