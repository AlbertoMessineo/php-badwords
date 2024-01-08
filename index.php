<?php
$string =  $_POST['text'];
$word = $_GET['word'];
$badWord = str_replace('word', '*****', $word);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badwords</title>
</head>
<body>
<h1>PHP BADWORDS</h1>
    <form action="info.php" method="POST" id="userform">
        <textarea name='text'rows="4" cols="50" form="userform"> Enter text here...</textarea>
        <br>
        Parola da censurare: <input method="GET" type="text" name="word" >
        <button>Invia i dati del form</button>
    </form>
</body>
</html>