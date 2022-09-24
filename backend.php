<?
if ( isset($_POST["name"]) && isset($_POST["phone"]) ){
	if(strlen($_POST["name"]) > 0 && strlen($_POST["phone"]) > 0){

		$result = [
			'name' => $_POST["name"],
			'phone' => $_POST["phone"],
			'comment' => $_POST["comment"],
		];
		
		foreach ($result as &$value){
			$value = strip_tags($value);
			$value = htmlspecialchars($value);
		}
		unset($value);

		$message = '<p>Сообщение с сайта: <br/>'
				.$result["name"] .' - т. <b>'. $result["phone"] .'</b><br><br>';
		if($result["comment"]) $message .= '<br/>Пожелания: '. $result["comment"];

		// $hasFile = false;
		// if ($_FILES && $_FILES['file']['error'] == UPLOAD_ERR_OK){
		// 	$hasFile = true;

		// 	$file = $_FILES['file']['tmp_name'];
		// 	$filename = $_FILES['file']['name'];
		// 	// move_uploaded_file($_FILES['file']['tmp_name'], $name);
		// 	// echo "Файл загружен";
		// }
		
		$to = 'email@email.to';
		$from = 'noreply@mrparks.ru';
		$subject = 'Сообщение с сайта ';
		$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
		$headers .= "From: mrparks.ru <". $from .">\r\n"; 
		$headers = "Content-type: text/html; charset=\"utf-8\"\r\n";
		// $headers .= "Content-Type: multipart/mixed; boundary=\"---\"";
		$body = "-----\n";
		$body .= $message."\n";
		$body .= "-----\n";
		// $file = fopen($filename, "r"); //Открываем файл
		// $text = fread($file, filesize($filename)); //Считываем весь файл
		// fclose($file); //Закрываем файл
		// $body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($filename)."?=\n"; 
		// $body .= "Content-Transfer-Encoding: base64\n";
		// $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
		// $body .= chunk_split(base64_encode($text))."\n";
		// $body .= "-------\n";


		if (mail($to, $subject, $body, $headers)) { 
			echo 'success'; 
		} else { 
			echo "Some error happen";
			echo error_get_last()['message'];
		}

	} else {
		die('Empty data'); 
	}
};
?>