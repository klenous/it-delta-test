<!doctype html>
<html lang="en">
<head>
    <b>Форма обратной связи</b>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <p>Ваше имя:<input type = "text" name="name"</p>
    <p>Ваш телефон:<input type = "text" name="number"</p>
    <p>Ваш email:<input type = "text" name="email"</p>
    <p>Ваше сообщение:<input cols="30" rows="30" type = "text" name="message"</p>
    <p><input type="submit" value ="отправить"</p>
</form>
<?php
if(isset($POST["submit"]) )
{
    if(!($POST["name"]=="")&&!($POST["message"]=="")&&!($POST["number"]=="")&&!($POST["email"]=="")) {

        $message = 'Имя' . $_POST['name'] . '\r\n' . 'номер' . $_POST['number'] . '\r\n' . 'мыло' . $_POST['email'] . '\r\n' . 'сообщение' . $_POST['message'] . '\r\n';

        $message = wordwrap($message, 70, "\r\n");
        $to = 'prog@it-delta.ru';

        if (mail($to, 'My Subject', $message))
            header('Location:/tht.php');
    }

}

?>
</body>
</html>
