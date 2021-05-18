if (isset($_POST['name']) &amp;&amp; $_POST['name'] != "")//если существует атрибут NAME и он не пустой то создаем переменную для отправки сообщения
		$name = $_POST['name'];
	else die ("The field isn't filld \"Name\"");//если же атрибут пустой или не существует то завершаем выполнение скрипта и выдаем ошибку пользователю.

	if (isset($_POST['email']) &amp;&amp; $_POST['email'] != "") //тут все точно так же как и в предыдущем случае
		$email = $_POST['email'];
	else die ("The field isn't filld \"Email\"");

	if (isset($_POST['message']) &amp;&amp; $_POST['message'] != "") 
		$body = $_POST['message'];
	else die ("The field isn't filld \"Wish\"");
	 


	$address = "work.cher5@mail.ru";//адрес куда будет отсылаться сообщение для администратора
	$mes  = "NAME: $name \n";	//в этих строчках мы заполняем текст сообщения. С помощью оператора .= мы просто дополняем текст в переменную
	$mes .= "E-mail: $email \n";
 	$mes .= "Wish: $body"; 
	$send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");//собственно сам вызов функции отправки сообщения на сервере

	if ($send) //проверяем, отправилось ли сообщение
		echo "Your wish is received! Go back on <a href='https://santatimer.netlify.app/'>santatimer.netlify.app</a>, if it's not sent automatically.";
	else 
		echo "Oops! Your wish is not received. Try again later!";