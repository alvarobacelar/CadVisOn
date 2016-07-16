<?php

require_once "Conexao.php";

/* classe VerificaVisitante herda as funções de Conectar
 * criada em 16/05/2013
 * Versao 1.0
 */

/*
 * @author Alvaro Bacelar
 */

class VerificaVisitante extends Conectar {

    private $retorno;
    private $idPessoa;
    private $pesquisa;

    function getRetorno() {
        return $this->retorno;
    }

    function setIdPessoa($id) {
        $this->idPessoa;
    }

    function getIdPessoa() {
        return $this->idPessoa;
    }

    function getPesquisa() {
        return $this->pesquisa;
    }

    // FAZ UMA PESQUISA NO BANCO DE DADOS E RETORNA A PESQUISA
    public function verifUsuario($cpf) {
        $this->query("SELECT * FROM pessoa WHERE cpf='$cpf'");

        $this->registros_retornados();
        $obj = $this->fetch_object();
        session_start();
        // VERIFICA SE JÁ EXISTE O CPF INFORMADO
        if ($obj) {
            $this->query("SELECT * FROM pessoa, visita WHERE pessoa.id_pessoa = visita.id_pessoa AND cpf = '$cpf' AND visita.status = 1 ORDER BY nome");
            if ($this->fetch_object()) {
                $_SESSION["visi"] = "CAD";
                $_SESSION["cpf"] = $cpf;
                $_SESSION["filename"] = $obj->foto; 
                header("location: ../../cad_visita.php");
                exit();
            } else {
                $_SESSION["visi"] = "OK"; // SESSION DE VERIFICAÇÃO PARA CONDIÇÃO NA PAGINA CAD_VISITA.PHP

                $_SESSION["id_pessoa"] = $obj->id_pessoa;
                $_SESSION["nomePessoa"] = $obj->nome;
                $_SESSION["endereco"] = $obj->endereco;
                $_SESSION["cidade"] = $obj->cidade;
                $_SESSION["filename"] = $obj->foto;
                header("location: ../../cad_visita.php");
                exit();
            }
        } else {
            // SE NÃO ENCONTRAR O CPF LISTADO DIRECIONA PARA A PAGINA CADASTRO DE PESSOA
            $_SESSION["visi"] = "NAO";
            $_SESSION["cpf"] = $cpf;
            header("location: ../../cad_visita.php");
            exit();
        }
        return $obj;
    }

}

?>
