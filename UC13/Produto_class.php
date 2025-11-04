<?php
/*
Código de modelo para utilização.
*/


// Importar o Banco.class.php:
require_once('Banco_class.php');

class Produto {
    // Atributos:
    public $id;
    public $nome;
    public $descricao;
    public $preco;
    public $quantidade_estoque;
    public $categoria;

    // Métodos:
    public function Cadastrar() {
        $sql = "INSERT INTO produtos(nome, descricao, preco, quantidade_estoque, categoria)
                VALUES (?, ?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([
            $this->nome,
            $this->descricao,
            $this->preco,
            $this->quantidade_estoque,
            $this->categoria
        ]);
        Banco::desconectar();
        return $comando->rowCount();
    }

    public function Listar() {
        $sql = "SELECT * FROM produtos";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute();
        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $arr_resultado;
    }

    public function ListarPorID() {
        $sql = "SELECT * FROM produtos WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->id]);
        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $arr_resultado;
    }

    public function Apagar() {
        $sql = "DELETE FROM produtos WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->id]);
        Banco::desconectar();
        return $comando->rowCount();
    }

    public function Editar() {
        $sql = "UPDATE produtos
                SET nome = ?, descricao = ?, preco = ?, quantidade_estoque = ?, categoria = ?
                WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([
            $this->nome,
            $this->descricao,
            $this->preco,
            $this->quantidade_estoque,
            $this->categoria,
            $this->id
        ]);
        Banco::desconectar();
        return $comando->rowCount();
    }
}
?>
