<?php
/*
 * CLASSE EM PHP QUE FAZ A MANIPULAÇÃO DE DADOS NO BANCO DE DADOS MYSQL
 * VERSAO 1.0
 * DATA 24/03/2013
 * ESTA CLASSE SÓ PODER�? SER USANDO EM MODO DE HERANÇA
 */


/**
 * @author AlvaroBacelar
 */
class Conectar {

    var $result;
    private $host;
    private $usuario;
    private $senha;
    private $banco;
    private $conexao;
    private $qr;
    private $data;
    private $selecaobanco;
    protected $totalFields;

    function __construct() {
        $this->host = "localhost";
        $this->usuario = "root";
        $this->senha = "258276";
        $this->banco = "cadvision";

        $this->conexao = @mysql_connect($this->host, $this->usuario, $this->senha) or erro_msg("01");
        $this->selecaobanco = @mysql_select_db($this->banco, $this->conexao) or erro_msg("02");
    }

    function getHost() {
        return $this->host;
    }

    function setHost($host) {
        $this->host = $host;
    }

    function getResult() {
        return $this->result;
    }

    function getTotalFields() {
        return $this->totalFields;
    }

    function fechar($conexao) {
        @mysql_close($conexao);
    }

    function query($sql) {

        $this->result = @mysql_query($sql, $this->conexao) or die
                        ("<b><cente>ERRO AO EXECUTAR QUERY: $sql - </center></b>" . mysql_error());

        return ($this->result);
    }

    function resultSelect($busca_db, $numLinha, $coluna) {
        $result = @mysql_result($busca_db, $numLinha, $coluna);

        return $result;
    }

    function registros_retornados() {
        $quantLinhas = @mysql_num_rows($this->result);
        return $quantLinhas;
    }

    function registros_afetados() {
        return @mysql_affected_rows();
    }

    //METODO UTILIZADO PARA EXECUTAR COMANDOS SQL
    protected function execSQL($sql) {
        $this->result = @mysql_query($sql) or die
                        ("<b><cente>ERRO AO EXECUTAR QUERY: $sql - </center></b>" . mysql_error());
        return $this->result;
    }

    //METODO UTILIZADO PARA LISTAR REGISTROS DO BANCO DE DADOS
    public function listar($qr) {
        $this->data = @mysql_fetch_assoc($qr);
        return $this->data;
    }

    function fetch_object() {
        return @mysql_fetch_object($this->result);
    }

    // TIRA TODOS OS CARACTERES QUE NÃO SEJA NUMEROS
    function somenteNumeros($str) {
        return preg_replace("/[^0-9]/", "", $str);
    }

    function fetch_array() {
        return @mysql_fetch_array($this->result);
    }

    //METODOS UTILIZADO PARA RETORNAR O TOTAL DE REGIsTROS NA QUERY
    function countData() {
        $this->totalFields = mysql_num_rows($this->result);
        return $this->totalFields;
    }

    function autentica($login, $senha) {

        $funcao[0] = "Administrador";
        $funcao[1] = "Usuario";
        $funcao[2] = "Supervisor";

        $fun_max = 2;

        $db = new Conectar();
        $db->query("select * from usuario where login='$login' and senha= '$senha' and status=1");
        if ($db->registros_retornados()) {
            $obj = $db->fetch_object();
            $session_id = md5(time() . $obj->id_usuario);

            $_SESSION["SessionId"] = $session_id;
            $_SESSION["login"] = $obj->login;
            $_SESSION["usuario"] = $obj->nome;
            $_SESSION["usuario_id"] = $obj->id_usuario;
            $id = $_SESSION["usuario_id"];

            //$this->logAcesso($login, "Acesso autorizado");

            if ($fun_max > 2) {
                $_SESSION["nivel"] = "Não identificado";
            } else {
                $_SESSION["nivel"] = $funcao[$obj->nivel];
                $nivel = $_SESSION['nivel'];
            }
            $data = date("Y-m-d");
            $hora = date("H:i:s");
            $ip = $_SERVER["REMOTE_ADDR"];

            header("Location: ../../");
            exit();
        } else {

            $_SESSION["erro"] = "erro";
            //$this->logAcesso($login, "Tentativa de acesso não aotorizado.");
            header("Location: ../../");
            exit();
        }
    }
    

}

function erro_msg($erro) {
    switch ($erro) {
        case"01": die("Não foi possivel se conectar ao gerenciador");
        case"02": die("Verifique a existencia do banco de dados");
        case "03": die("Erro ao executar comando");

        default: die("Erro não localizado");
    }
}
