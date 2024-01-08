<?php
$string =  $_POST['text'];
$word = $_POST['word'];
$badWord = str_replace('word', '*****', $word);
?>
<?php
    echo $_POST['text'];
    echo strlen($string);
?>
<br>
<?php
    echo $_POST['word'];
?>
<br>
<p>
    La tua parola censurata :
    <?php
        echo $badWord = str_replace('word', '*****', $word);
    ?>
</p>
