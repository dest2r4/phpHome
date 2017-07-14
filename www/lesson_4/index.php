<?php 

/* 1
Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
*/
/*
$html="
 <form action='index.php' method='POST' > 
 <h2>Text1</h2> 
<textarea name='area1'></textarea>
<br>
 <h2>Text2</h2> 
<textarea name='area2'></textarea>
<br>
<input type='submit' value='send texts'>

 </form>

";
echo $html; 
$text1=$_POST['area1'];
$text2=$_POST['area2'];

getCommonWords($text1,$text2);

function getCommonWords($a, $b){
	$a=explode(" ", $a);
	$b=explode(" ", $b);
	$c=[];
	# выбираем массив подлиннее, чтобы постоянно не перещитывать их каунты
	$count=(count($a)>count($b))?count($a):count($b);

	#echo "$count";
	# теперь непосредственно сравниваем 
	for($i=0;$i<$count;$i++){
		for ($q=0; $q <$count ; $q++) {
		if($a[$i]===$b[$q]){
			$c[]=$a[$i];
			continue;
		} ;
		
		};
		};
		#
		#
		#осталась проблема:
		#нам надо показать одинаковые значения, 
		#а что если в одном списке будет не одно схожее значение, а например 15
		#выведется 15 элем, а нам по условиям задачи надо 1
		# исправляю сей косяк
		
		#сначала убираем все повторения 
		$new_c=array_flip($c);
		$countC=count($new_c);
		#возвращаем обратно наш массив
		$new_c=array_flip($new_c);
		#делаем долгожданный вывод
		foreach ($new_c as  $valueC) {
			echo 'The same words is :'."$valueC"."<br>";
			# code...
		}
		return $new_c;



};

*/

$html="
 <form  method='POST' enctype='multipart/form-data' > 
 <h2>Text1</h2> 
<textarea name='from_textarea'></textarea>
<br>
 <h2>Text2</h2> 
<input type='file' name='from_file'>
<br>
<input type='submit' name='sub' value='send texts'>

 </form>

";
print $html;
print_r($_POST['from_file']);


if (!empty($_POST['from_file'])&& !empty($_POST['from_textarea'])) {
	# code...
	echo 'file+textarea'."<br>";
}
elseif (!empty($_POST['from_file'])&& empty($_POST['from_textarea'])) {
	if ($_FILES['from_file']['error'] ==0 ){
				# code...
			if ($_FILES['from_file']['type']=='text/plain') {
				
				$way='uplFiles/'.$_FILES['from_file']['name'];
				# если мы работаем именно с файлом, который передался постом
				if (is_uploaded_file($_FILES['from_file']['tmp_name'])){
				
					if (!move_uploaded_file($_FILES['from_file']['tmp_name'], $way)) {
					
						echo "Can\`t upload file";
				}
				}		
			}
			}		
			$wer=file_get_contents($way);
	print($wer);
	
	}
	
elseif (empty($_POST['from_file']) && !empty($_POST['from_textarea'])){
	# code...
	echo 'ONLY textarea'."<br>";
	$from_text=$_POST['from_textarea'];
	$from_text=delete_word($from_text);
}
#print_r($w);
#print_r($q);
#delete_word($q);

#print_r($_POST['from_textarea']);


$q=file_get_contents("some_text.txt");



# ф-я принимает значение из файла или тексАрии, перебирает по длине и выводит только слова до заданной длины
function delete_word($text,$lenght=7){
	#переменная для хранения длины слова
	$lenght=intval($lenght);
	$x=[];
	$lenght_arr=[];
	$text=explode(" ", $text);
	#print_r($text);
	
	# $lenght - needed max_lenght
	foreach ($text as $key1 => $value1) {
	 		$lenght_arr[$value1]=strlen($value1);
	 			
	 }; 
	 foreach ($lenght_arr as $key2 => $value2) {
	 	# code...
	 	 	if($value2<$lenght)
	 	 	 {
	 	 	 	$x[$key2] =$value2;
	 	 	 };
	 };
	 $new_text=array_keys($x);
	 $new_text1=implode(" ", $new_text);
	 print($new_text1);
};


# конструкция 8-24 принимает файл, обрабатывает его, и сохраняет в соответствующую директорию

	
	








?>