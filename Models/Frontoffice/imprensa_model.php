<?php

// Definir a página atual:
$pagina_atual = (empty($rotas[0]))? NULL : $rotas[0];


require 'Templates/Frontoffice/header_nav.php';
require 'Views/Frontoffice/imprensa_view.php';
require 'Templates/Frontoffice/footer.php';



?>