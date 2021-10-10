<?php

$mail = $_POST['inputEmail'];
$sujet = $_POST['inputSubject'];
$contenu = $_POST['contenu'];


$url = 'mailto:'.$mail.'?subject='.$sujet.'&body='.$contenu;
header('Location: '.$url);