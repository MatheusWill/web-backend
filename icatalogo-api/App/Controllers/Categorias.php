<?php
session_start();

use App\Core\Controller;

class Categorias extends Controller
{

    public function index()
    {

        $categoriaModel = $this->model("Categoria");

        $dados = $categoriaModel->listarTodas();

        //Colocar os dados no corpo da requisição
        echo json_encode($dados);
    }

    public function find($id)
    {
        $categoriaModel = $this->model("Categoria");

        $categoriaModel = $categoriaModel->buscarPorId($id);

        if ($categoriaModel) {

            echo json_encode($categoriaModel, JSON_UNESCAPED_UNICODE);
        } else {

            http_response_code(404);

            $erro = ["ERRO" => "Categoria não encontrada!"];

            echo json_encode($erro, JSON_UNESCAPED_UNICODE);
        }
    }

    public function store()
    {

        //Pegando o corpo da requisição
        $json = file_get_contents("php://input");

        //Transformando o json string em obj php
        $novaCategoria = json_decode($json);

        //Instanciando o model e colocando nele a descrição recebida
        $categoriaModel = $this->model("Categoria");
        $categoriaModel->descricao = $novaCategoria->descricao;

        //Chamando o inserir, que salva no banco
        $categoriaModel = $categoriaModel->inserir();

        //Verificando se deu certo, e enviando a resposta apropriada
        if ($categoriaModel) {

            http_response_code(201);
            echo json_encode($categoriaModel);
        } else {

            http_response_code(500);
            echo json_encode(["ERRO => Problemas ao inserir categoria!"]);
        }
    }

    public function update($id)
    {
        $json = file_get_contents("php://input");

        $atualizarCategoria = json_decode($json);

        $categoriaModel = $this->model("Categoria");

        $categoriaModel = $categoriaModel->buscarPorId($id);

        if (!$categoriaModel) {

            http_response_code(404);
            echo json_encode(["ERRO => Categoria não encontrada!"]);
            exit;
        }

        $categoriaModel->descricao = $atualizarCategoria->descricao;
        $categoriaModel->id = $id;

        $categoriaModel = $categoriaModel->atualizar();

        if ($categoriaModel) {

            http_response_code(204);
        } else {

            http_response_code(500);
            echo json_encode(["ERRO => Problemas ao atualizar categoria!"]);
        }
    }

    public function delete($id)
    {

        $categoriaModel = $this->model("Categoria");
        $categoriaModel = $categoriaModel->buscarPorId($id);

        if (!$categoriaModel) {

            http_response_code(404);
            echo json_encode(["ERRO => Categoria não encontrada!"]);
            exit;
        }

        $produtos = $categoriaModel->getProdutos();

        if ($produtos != []) {

            http_response_code(400);
            echo json_encode(["ERRO => Categoria atribuida a um produto"]);
            exit;
        }

        $categoriaModel->id = $id;

        $categoriaModel = $categoriaModel->deletar();

        if ($categoriaModel) {

            http_response_code(204);
        } else {

            http_response_code(500);
            echo json_encode(["ERRO => Problemas ao deletar categoria!"]);
        }
    }
}
