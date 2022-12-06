<?php

use App\Core\Metatags;

$Metatags = new Metatags;
$title = $Metatags->title("Startseite");
$description = $Metatags->description("Das ist die Startseite");
$keywords = $Metatags->keywords("Startseite, Home");
?>