<?php
include('dbcon.php');
include('session.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];

    // Verifica si se seleccionó un archivo de imagen
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];

        // Mueve la imagen al directorio de destino
        $image_destination = 'uploads/' . $image_name;
        move_uploaded_file($image_tmp_name, $image_destination);

        // Inserta el contenido y la ruta de la imagen en la base de datos
        $conn->query("INSERT INTO post (content, image_path, date_posted, member_id) VALUES ('$content', '$image_destination', NOW(), '$session_id')");
    } else {
        // Si no se seleccionó una imagen, inserta solo el contenido en la base de datos
        $conn->query("INSERT INTO post (content, date_posted, member_id) VALUES ('$content', NOW(), '$session_id')");
    }

    header('location: home.php');
}
?>
