<?php
    $pont = fopen("cont.txt", "r");
$conteudo = fread($pont, filesize("cont.txt"));
fclose ($pont);

$pont = fopen("cont.txt", "r+");
$conteudo++;
fputs ($pont, $conteudo);
fclose ($pont);
?>

<body>
    O número de visitantes é <?php include("cont.txt"); ?>
</body>