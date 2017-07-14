<form method='post' enctype='multipart/form-data'>
	
	<textarea name="data_area"  cols="30" rows="10"></textarea><br>
	<input type="file" name="data_file"><br>
	<input type="submit" name="q" value="Do it">
</form>
<?php 
# конструкция 8-24 принимает файл, обрабатывает его, и сохраняет в соответствующую директорию

	if ( isset($_POST['q']) && $_FILES['data_file'] && $_POST['data_area']) {
		# code...
		if ($_FILES['data_file']['error'] ==0 ){
				# code...
			if ($_FILES['data_file']['type']=='text/plain') {
				
				$way='uplFiles/'.$_FILES['data_file']['name'];
				# если мы работаем именно с файлом, который передался постом
				if (is_uploaded_file($_FILES['data_file']['tmp_name'])){
				
					if (!move_uploaded_file($_FILES['data_file']['tmp_name'], $way)) {
					
						echo "Can\`t upload file";
				}
				}		
			}
			}
			echo 'changed text from file ==>'."<br>";
			@$file_text=file_get_contents($way);
			$file_text=delete_word($file_text)."<br>"."<br>";

			$area_text=$_POST['data_area'];
			echo "<br>"."<br>".'text from textarea ==>'."<br>";
			$area_text=delete_word($area_text);
		}
elseif ( isset($_POST['q'])  && $_POST['data_area']) {
		# code...
			$area_text=$_POST['data_area'];
			echo "<br>"."<br>".'text from textarea ==>'."<br>";
			$area_text=delete_word($area_text);
		}




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

	#$wer=file_get_contents($way);
	#$wer=delete_word($wer);


 ?>