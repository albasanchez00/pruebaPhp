<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hola Mundo!!</h1>
<p>
    <?php
    // -> Comentario de linea

    # -> Comentario de linea

    /**
     *  -> Comentario de bloque
     */
    $a = 3;
    $b = 5;
    $c = $a + $b;
    echo "El resultado de la suma de $a + $b = $c"; //Se concatena con . o con ,

    $nombre = "Juan";
    $nombre .= " Diaz";
    echo "<br>" . $nombre;
    echo "<br>" . gettype($a);
    echo "<br>" . gettype($nombre);
    const IVA = 21; //Declarar una constante
    echo "<br> El IVA es" . IVA . "%";
    echo M_PI;
    echo "<br> El Nº Pi es" . M_PI;
    echo "<br>" . __LINE__;
    ?>

    <?php
    $m_en = "Hello";
    $m_es = "Hola";
    $m_it = "Ciao";

    // Variable para definir el idionma que se va a utilizar
    $idioma = "es";

    //Variable con el nombre generado.
    $bienvenida = "m_$idioma";
    //Lo que mostrara d ela varaible
    echo "<br>";
    echo "<br>";
    echo "¡" . $$bienvenida . "!";
    echo "<br>";
    ?>


    <?php
    $r = "5";
    $longitud = 2 * M_PI * $r;
    $superficie = M_PI * $r ** 2;
    $volumen = 4 / 3 * M_PI * $r ** 3;
    echo "Circunferencia";
    echo "<br>";
    echo "<h1> La longitud es " . $longitud . "</h1><br>";
    echo "<h2> La superficie es " . $superficie . "</h2><br>";
    echo "<h3> La volumen es " . $volumen . "</h3><br>";
    ?>


</p>
</body>
</html>
