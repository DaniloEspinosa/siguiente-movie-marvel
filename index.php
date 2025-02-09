<?php

require_once 'consts.php';
require 'functions.php'; // Lo que hace el require es pegar el archivo que se quiere importar
/*
require_once 'echo.php'; // Lo que hace el require es pegar el archivo que se quiere importar solo una vez
include 'otra-forma.php'; // Tambien se utiliza para importar pero no da un fatal error y la pagina sigue funcionando
include_once 'otra-forma-de-include.php';  // Tambien se utiliza para importar pero no da un fatal error y la pagina sigue funcionando
*/

$data = get_data(API_URL);
$until_message = ["until_message" => get_until_message($data["days_until"])]
?>
<!DOCTYPE html>
<html lang="es">


<?php render_template('head', $data) ?> <!-- Estamos importando el head de otro fichero -->
<?php render_template('main', array_merge($data, $until_message)) ?> <!-- Estamos importando el main de otro fichero -->
<?php render_template('styles') ?> <!-- Estamos importando el main de otro fichero -->


</html>