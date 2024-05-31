<?php
function security($input)
{
    $input = cleanData($input);
    $sanitized_email = filter_var($input, FILTER_SANITIZE_EMAIL);
    return htmlspecialchars(strip_tags($sanitized_email));
}
function cleanData($data)
{
    $search = array(
        '@SELECT@', '@UPDATE@', '@DELETE@', '@INSERT@', '@AND@',
        '@select@', '@update@', '@delete@', '@insert@', '@and@',
        '@<@',
        '@<script[^>]*?>.*?</script>@si',
        '@<[\/\!]*?[^<>]*?>@si',
        '@<style[^>]*?>.*?</style>@si',
        '@<![\s\S]*?--[ \t\n\r]*>@',
    );
    $output = preg_replace($search, '', $data);
    return $output;
}
function createLog($archivo, $data)
{
    $data = json_encode($data);
    $gestor = fopen($archivo, 'a+');
    if ($gestor === false) {
        echo "Error al crear o abrir el archivo de registro de conexiones.";
        return;
    }
    $fechaHora = date('Y-m-d H:i:s');
    $nuevaLinea = "$fechaHora: $data\n";
    if (fwrite($gestor, $nuevaLinea) === false) {
        echo "Error al escribir en el archivo de registro.";
    }
    fclose($gestor);
}
function dataRequest()
{
    $peticion = [
        'ip' => $_SERVER["REMOTE_ADDR"],
        'uri' => $_SERVER["REQUEST_URI"],
        'time' => $_SERVER["REQUEST_TIME"],
        'method' => $_SERVER["REQUEST_METHOD"],
        'headers' => getallheaders(),
        'body' => file_get_contents('php://input'),
        'request' => $_REQUEST,
    ];
    return $peticion;
}
