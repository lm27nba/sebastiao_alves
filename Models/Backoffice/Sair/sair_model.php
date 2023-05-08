<?php 

// Destruição da sessão.
session_start();
session_destroy();

// Rota a seguir no final.
header("Location: ". $url_backoffice);
exit();

?>