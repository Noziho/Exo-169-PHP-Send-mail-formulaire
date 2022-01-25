<?php
if (isset($_POST['submit'])) {
    $to = $_POST['user_mail'];
    $from = 'noah.decroix3@gmail.com';
    $message = $_POST['user_text'];
    mail($to, 'Exo 169', $message);
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form-mail</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="id-mail">Mail:</label>
        <input type="email" id="id-mail" name="user_mail">
    </div>
    <div>
        <label for="id-message">Votre message:</label>
        <textarea name="user_text" id="id-message" cols="30" rows="10"></textarea>
    </div>

    <input type="submit" name="submit">
</form>
</body>
</html>