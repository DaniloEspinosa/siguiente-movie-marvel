<?php

$string = "Soy un string";
$booleano = true;
$numero = 22;
$arraysLanguages = ["PHP", "JavaScript", "Python"];
$arraysLanguages[6] = "Java";                                   // Esto sobreescribe el array en la posicion indicada, se cambia el 1 por Java
$arraysLanguages[] = "Typescript";                              // Esto agrega directamente en la ultima posicion del array
$arraysLanguages[-1] = "Cobol";                                 // Esto sobreescribe el array en la posicion indicada el -1 SI FUNCIONA
// El valor dentro de [] no indica la posicion, indica la key del array que es como si identificador, por esto se puede sobreescribir
// Si no se indica un valor php le asignara una key automatica incrementando desde el ultimo valor conocido (como un auto id increment)

$person = [                                           //Otra manera de declarar un array tipo diccionario
    "name" => "Miguel",
    "age" => 34,
    "isDev" => true,
    "languages" => ["PHP", "Javascript", "Python"]
];
$person["name"] = "Bob";
$person["languages"][] = "Java";

?>

<h3>
    El mejor lenguaje es <?= $arraysLanguages[2] ?>
</h3>

<ol>  <!-- Iterando un array con foreach  -->
    <?php foreach ($arraysLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>


</ol>

<?php
$isOld = $numero >= 18;
$isDev = false;

$name = "Javi";  //Asi se declara una variable
const CONSTANTE = "Soy constante";  //Asi se declara una constante interna
define('CONSTANTE_GLOBAL', 'Soy constante global');  //Asi se declara una constante entre ficheros
echo $name . ", " . CONSTANTE . ", " . CONSTANTE_GLOBAL; // echo devuelve por pantalla

echo "<br/>";  // De esta manera se puede lograr un salto de linea
$outputDev = $isDev
    ? "Eres DEV, cuanto lo siento"
    : "No eres DEV, felicidades";
echo "<h2>$outputDev</h2>";

$concatenar = "Hola " . "$name"; //En php se concatena con el "." (punto)
echo "<br/>" . $concatenar;

// 2 opciones para utilizar el match, es similar al switch
$outputAge = match ($numero) {
    0, 1, 2 => "Eres un bebe, $name.",
    3, 4, 5, 6, 7, 8, 9, 10 => "Eres un niño, $name.",
    11, 12, 13, 14, 15, 16, 17, 18 => "Eres un adolescente, $name.",
    default => "Eres un adulto, $name."
};

$outputAge2 = match (true) {
    $numero <= 2  => "Eres un bebe, $name",
    $numero <= 10 => "Eres un niño, $name",
    $numero <= 18 => "Eres un adolescente, $name",
    default      => "Eres un adulto, $name"
};

echo "<h2> $outputAge: version 1</h2>";
echo "<h2> $outputAge2:version 2</h2>";
?>

<?php  // Este es el  if normal de toda la vida
if (false) {
    echo $name;
} else if (true) {
    echo "El else if";
} else {
    echo "El else";
}
?>

<?php if ($isOld) : ?> <!--De esta manera se utiliza el if como si fuera una plantilla para html -->
    <h2>Eres viejo, lo siento</h2>
<?php elseif ($isDev) : ?>
    <h2>No eres viejo, eres dev, lo siento aun mas</h2>
<?php else : ?>
    <h2>No eres viejo ni dev, te envidio</h2>
<?php endif; ?>