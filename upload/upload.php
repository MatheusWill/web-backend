<?php

function validaCampos(){
    $erros = [];
    //se o arquivo não foi enviado    
    if ($_FILES["foto"]["error"] == UPLOAD_ERR_NO_FILE) {
        $erros[] = "O campo foto é obrigatório";

    //se houver um arquivo, porém com erro de upload    
    } else if (!isset($_FILES["foto"]) || $_FILES["foto"]["error"] != UPLOAD_ERR_OK) {
        $erros[] = "Ops, houve um erro inesperado. Verifique o arquivo e tente novamente.";

    } else {
        $imagemInfo = getimagesize($_FILES["foto"]["tmp_name"]);

        //se o arquivo não for uma imagem        
        if (!$imagemInfo) {
            $erros[] = "Este arquivo não é uma imagem";
        }
        //se o tamanho da imagem for maior que 1MB        
        if ($_FILES["foto"]["size"] > 1024 * 1024) {
            $erros[] = "O arquivo não pode ser maior que 1MB";
        }
    }
    return $erros;
}
$erros = validaCampos();
if (count($erros) > 0) {
    echo $erros[0];
    exit();
}
var_dump($_FILES);
$fileName = $_FILES["foto"]["name"];
//daqui pra baixo salvamos o arquivo.move_uploaded_file($_FILES["foto"]["tmp_name"], "fotos/$fileName");