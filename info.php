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
        echo $badWord;
    ?>
</p>
