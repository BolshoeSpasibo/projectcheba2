<!DOCTYPE html>
					<html>
					<head>
							<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

							<title>Ваше сообщение успешно отправлено</title>
					</script>

					</head>

					<body>
<?php
	$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
	/* проверка формы на наполненность полей*/
	$err = false;
	//isset - проверка на наличие
	$name 				= (isset($_POST['name'])) 				? trim(strip_tags($_POST['name'])) : ''; 
	$surname 			= (isset($_POST['surname'])) 			? trim(strip_tags($_POST['surname'])) : ''; 
	$middle_name  = (isset($_POST['middle_name'])) 	? trim(strip_tags($_POST['middle_name'])) : ''; 
	$phone 				= (isset($_POST['phone'])) 				? trim(strip_tags($_POST['phone'])) : ''; 
	$mail 				= (isset($_POST['mail'])) 				? trim(strip_tags($_POST['mail'])) : ''; 
	$message 			= (isset($_POST['message'])) 			? trim(strip_tags($_POST['message'])) : ''; 
	$adress 			= (isset($_POST['adress'])) 			? trim(strip_tags($_POST['adress'])) : ''; 
		
		if (empty ($name))
		{
			$err = true;
			echo "Fill in the Name field! $back";
			exit;
		}
		if (empty ($surname))
		{
			$err = true;
			echo "Fill in the Surname field! $back";
			exit;
		}
		if (empty ($middle_name))
		{
			$err = true;
			echo "Fill in the Middle name field! $back";
			exit;
		}
		if (empty ($phone))
		{
			$err = true;
			echo "Fill in the Phone field! $back";
			exit;
		}
		$find = '@gmail.com';
		if (strpos($mail, $find))
		{
			$err = true;
			echo "Registration of users with this email address is not possible! $back";
			exit;
		}
		if (empty ($message))
		{
			$err = true;
			echo "Fill in the Comment field! $back";
			exit;
		}
		if (empty ($adress))
		{
			$err = true;
			echo "Fill in the Adress field! $back";
			exit;
		}		
	
		if (!$err)
		{
			mail('meyhanasnow@mail.ru', 'Тема вашего сообщения','Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />
							Его сообщение: '.$message,"Content-type:text/html;charset=windows-1251");

					echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в ближайшее время<Br> $back";
					exit;
				
		}
?>
</body>
</html>