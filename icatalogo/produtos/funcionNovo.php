<?php
session_start();
function validarCampos()
{

    $erros = [];

    if (!isset($_POST["peso"]) && $_POST["peso"] == "") {
        $erros[] = "O campo peso é obrigatório";
    } elseif (!is_numeric(str_replace(",", ".", $_POST["peso"]))) {
        $erros[] = "O campo peso deve ser um número";
    }

    if (!isset($_POST["valor"]) && $_POST["valor"] == "") {
        $erros[] = "O campo valor é obrigatório";
    } elseif (!is_numeric(str_replace(",", ".", $_POST["valor"]))) {
        $erros[] = "O campo valor deve ser um número";
    }

    if (!isset($_POST["quantidade"]) && $_POST["quantidade"] == "") {
        $erros[] = "O campo quantidade é obrigatório";
    } elseif (!is_numeric(str_replace(",", ".", $_POST["quantidade"]))) {
        $erros[] = "O campo quantidade deve ser um número";
    }

    if (!isset($_POST["cor"]) && $_POST["cor"] == "") {
        $erros[] = "O campo cor é obrigatório";
    }

    return $erros;

}

//Função de maskara

// function mask($val, $mask)
// {
//     $maskared = '';
//     $k = 0;
//     for ($i = 0; $i <= strlen($mask) - 1; ++$i) {
//         if ($mask[$i] == '#') {
//             if (isset($val[$k])) {
//                 $maskared .= $val[$k++];
//             }
//         } else {
//             if (isset($mask[$i])) {
//                 $maskared .= $mask[$i];
//             }
//         }
//     }

//     return $maskared;
// }

// $cnpj = '11222333000199';
// $cpf = '00100200300';

// echo mask($cnpj, '##.###.###/####-##').'<br>';
// echo mask($cpf, '###.###.###-##');