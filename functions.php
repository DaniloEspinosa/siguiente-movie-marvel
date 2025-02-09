<?php

declare(strict_types=1);   // De esta manera se manejaran los tipos de una manera estricta al indicarlos, no los convertira automaticamente.


function render_template (string $template, array $data = [])
{
    extract($data);
    require "templates/$template.php";
}

$variable = "hola";    // Estas variables no pueden utilizarse dentro de las funciones, hay que declararlas como global, o pasarla por parametros

function variable_global()
{
    global $variable; // Con esta declaracion dentro de la funcion ya podriamos utilizar la variable en este scope!!
    echo $variable;
}

function get_data(string $url): array     //Este tipado sera estricto cuando se ejecute declare(strict_types= 1)
{
    $result = file_get_contents($url);    // De esta manera se majean los datos de una api para hacer solo GET
    $data = json_decode($result, true); // Obtener la informacion requerida del array asociativo obtenido desde la API
    return $data;
}

function get_until_message(int $days): string
{
    return match (true) {
        $days == 0 => "Hoy se estrena 🥳",
        $days == 1 => "Mañana se estrena 🚀",
        $days < 7  => "Esta semana se estrena ⏱️",
        $days < 30 => "Este mes se estrena 📅",
        default    => "Aun faltan $days para el estreno ⏳"
    };
}
