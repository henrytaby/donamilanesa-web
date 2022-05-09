<?php
$id = $_REQUEST["id"];
include "inc/producto.php";
?>

<div class="detalle-producto">
    <img src="img/producto/<?=$id?>.png" alt="">
    <h3><?=$producto[$id]["titulo"]?> </h3>
    <h2><?=$producto[$id]["texto"]?></h2>
    <p><?=$producto[$id]["detalle"]?></p>
</div>