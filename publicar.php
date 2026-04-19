<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $titulo = $_POST['titulo'];
    $tags = $_POST['tags'];

    echo "Publicación creada:<br>";
    echo "Título: $titulo<br>";
    echo "Tags: $tags<br>";

    // 📸 Imagen opcional
    if (!empty($_FILES['imagen']['name'])) {

        $tmp = $_FILES['imagen']['tmp_name'];
        $name = $_FILES['imagen']['name'];

        move_uploaded_file($tmp, "uploads/" . $name);

        echo "Imagen subida correctamente.";
    } else {
        echo "Sin imagen.";
    }
}

?>