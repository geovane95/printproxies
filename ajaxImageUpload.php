<?php
//error_reporting(0);
session_start();

define("MAX_SIZE","9000");

$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");

if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

    $uploaddir = "./uploads/"; // directoria que vai receber os ficheiros

    foreach ($_FILES['photoimg']['name'] as $name => $value) {

        $filename = stripslashes($_FILES['photoimg']['name'][$name]);

        $size=filesize($_FILES['photoimg']['tmp_name'][$name]);

        /* Recolhe extensão do ficheiro em caixa baixa (lowercase)
         */
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $ext = strtolower($ext);

        if (in_array($ext,$valid_formats)) {

            if ($size < (MAX_SIZE*1024)) {

                $image_name=time().trim(strtolower($filename));

                $newname=$uploaddir.$image_name;

                if (move_uploaded_file($_FILES['photoimg']['tmp_name'][$name], $newname)) {
                    /* ficheiro carregado com sucesso,
                     * envia HTML com imagem para apresentar ao visitante
                     */
                    echo "<img src='".$uploaddir.$image_name."' class='imgList'>";
                } else {
                    echo '<span class="imgList">Ficheiro não foi carregado!</span>';
                }
            } else {
                echo '<span class="imgList">Limite de tamanho atingido!</span>';
            }
        } else {
            echo '<span class="imgList">Extensão do ficheiro desconhecida!</span>';
        }
    }
}

?>
