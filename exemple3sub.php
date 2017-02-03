<?php

$texteaecrire = $_GET[texteaecrire];
$nomfichier = $_GET[nomfichier];

$monidfichier = fopen($nomfichier, 'a+'); // a+ -> on se place en fin de fichier

fputs($monidfichier,$texteaecrire);
fputs ($monidfichier,"\r\n");
fclose($monidfichier);

?>