<?php
	$name = $_POST['name'];
	$number = $_POST['number'];
	mail("example@gmail.com", "Заявка с сайта", "Имя: $name<br>Номер телефона: $number");
?>
<script>
	alert('Заявка успешно отправлена! Ожидайте ответа менеджера на ваш телефон')
</script>