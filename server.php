<?php
    $badWord =$_POST['badword'];
    $texts =$_POST['texts'];

    // echo "il tuo testo è: ".$texts."<br />" ;
    // echo strlen($texts);

    $lunghezza= strlen($texts);


    $concat= $texts." "." Lunghezza:".$lunghezza;
    echo $concat."<br />";

    $replaceWord = str_replace($badWord,'***',$texts);

    $second_concat= $replaceWord." "." Lunghezza:".$lunghezza;

    echo $second_concat
?>