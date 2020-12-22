<?php

$badword = $_GET["badword"];

$text = "lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ipsam dicta odio pariatur porro, dolore ducimus vel. Atque animi mollitia, earum numquam consectetur, aliquam repellendus voluptatibus recusandae est magnam dolore";

$new_text = str_replace($badword, "***", $text);

$text_len = strlen($new_text);

?>

<p> TESTO ORIGINALE:<?php echo $text ?> </p>
<p> TESTO MODIFICATO:<?php echo $new_text ?> </p>

<p>Lunghezza testo: <?php echo $text_len ?> parole</p>