<?php

    $name = 'Jere';
    $esDesarrolladorWeb = true;
    $age = 22;

    define ('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

    $salida = "Hola $name, con edad de $age.";
    $edadSalida = match (true) {

        $age < 2 => "Eres un bebé, $name",
        $age < 10 => "Eres un niño, $name",
        $age < 18 => "Eres un adolescente, $name",
        $age === 18 => "Eres mayor de edad, $name",
        $age < 40 => "Eres un adulto joven, $name",
        $age < 60 => "Eres un adulto no tan joven, $name",
        default => "Eres una persona algo anciana, $name",
    };

    $mejoresLenguajes = ["JavaScript", "PHP"];
    $mejoresLenguajes[] = "TypeScript";
    $mejoresLenguajes[] = "MySQL";

    $persona = [
        "nombre" => "Jeredev",
        "edad" => 20,
        "esDev" => true,
        "lenguajes" => ["PHP", "JavaScript", "NodeJS"],
    ];
    $person["name"] = "Jeritodev";
    $person["languages"][] = "React";
?>

<ul>
    <?php foreach($mejoresLenguajes as $key => $lenguaje) :  ?>

        <li><?= $key . " " . $lenguaje ?></li>

    <?php endforeach; ?>
</ul>

<h2><?= $edadSalida ?></h2>

<img src="<?= LOGO_URL ?>" alt="Logo PHP" width="200">
<h1>
    <?= $salida ?>
</h1>