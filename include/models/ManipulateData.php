<?php

include "Conexao.php";

/*
 * CLASSE EM PHP QUE FAZ A MANIPULAÇÃO DE DADOS NO BANCO DE DADOS MYSQL
 * VERSAO 1.0
 * DATA 24/03/2013
 */

class ManipulateData extends Conectar {

    private $sql, $table, $camposBanco, $dados, $status, $campoTable, $campoTable2, $valueId, $valueId2, $orderBy=null;

    //ENVIA O NOME DA TABELA A SER USADA NA CLASSE
    public function setTable($t) {
        $this->table = $t;
    }

    //ENVIA OS CAMPOS A SEREM USADOS NA CLASSE
    public function setCamposBanco($f) {
        $this->camposBanco = $f;
    }
    
    public function setOrderBy($o){
        $this->orderBy = $o;
    }

    //ENVIA OS DADOS A SEREM USADOS NA CLASSE
    public function setDados($d) {
        $this->dados = $d;
    }

    //ENVIA O CAMPO DE PESQUISA, NORMALMENTE O CAMPO CODIGO
    public function setCampoTable($fi) {
        $this->campoTable = $fi;
    }

    // ENVIA O SEGUNDO CAMPO A SER PROCURADO
    public function setCampoTable2($c) {
        $this->campoTable2 = $c;
    }

    //ENVIA OS DADOS A SEREM CADASTRADOS OU PESQUISADOS
    public function setValueId($vi) {
        $this->valueId = $vi;
    }

    // ENVIA O CAMPO DO BANCO A SER PROCURADO
    public function setValueId2($t) {
        $this->valueId2 = $t;
    }

    //RECEBE O STATUS ATUAL,ERROS OU ACERTOS
    public function getStatus() {
        return $this->status;
    }

    //METODO QUE EFETUA CADASTROS DE DADOS NO BANCO
    public function insert() {
        $this->sql = "INSERT INTO $this->table ($this->camposBanco) VALUES ($this->dados)";
        if (self::execSql($this->sql)) {
            $this->status = "Cadastrado";
        }
    }

    //METODO QUE EFETUA A EXCLUSAO DE DADOS NO BANCO
    public function delete() {
        $this->sql = "DELETE FROM $this->table WHERE $this->campoTable = '$this->valueId'";
        self::execSql($this->sql);
    }

    //METODO QUE FAZ A ALTERACAO DE DADOS NO BANCO
    public function update() {
        $this->sql = "UPDATE $this->table SET $this->camposBanco WHERE $this->campoTable = '$this->valueId'";
        if (self::execSql($this->sql)) {
            $this->status = "Alterado com Sucesso!";
        }
    }

    // FUNCAO DE BUSCA MAIS ESPECIFICA
    public function selectEspecifi() {
        $this->sql = $this->query("SELECT * FROM $this->table
                WHERE $this->campoTable = '$this->valueId' AND $this->campoTable2 = '$this->valueId2'");
    }
    
    // selecionando as visitas cadastradas
    public function selectVisita(){
        $this->sql = $this->query("SELECT * FROM pessoa, visita
                                WHERE pessoa.id_pessoa = visita.id_pessoa AND status = 1
                                ORDER BY id_visita DESC");
    }
    
    // selecionando todas as visitas 
    public function selectVisitaTodas(){
        $this->sql = $this->query("SELECT * FROM pessoa, visita WHERE pessoa.id_pessoa = visita.id_pessoa AND status = 1 ORDER BY nome");
    }
    
    public function selectVisitanteNome($nome){
        $this->sql = $this->query("SELECT * FROM pessoa WHERE pessoa.nome like '%$nome%'");
    }
    
    // selecionando todos os visitados cadastrados
    public function selectVisitados(){
        $this->sql = $this->query("SELECT * FROM visitado WHERE status = 1 ORDER BY visitado_nome");
    }
    
    /**
     * countVisitado
     * (Conta todos os registros da tabela visitados)
     */
    public function count() {
        $this->sql = "SELECT count(*) as total FROM $this->table $this->orderBy ";
        $this->execSQL($this->sql);
        $total = $this->fetch_object();
        $cont = $total->total;
        return $cont;
    }
    
    // selecionando visitante especifico
    public function selectVisitaEspec($cpf){
        $this->sql = $this->query("SELECT * FROM pessoa, visita
                                WHERE pessoa.id_pessoa = visita.id_pessoa 
                                AND status = 1 AND cpf = '$cpf'
                                ORDER BY nome");
    }
    
    public function selectMensagem($msg){
        $this->sql = $this->query("SELECT * FROM contato WHERE id_contato = '$msg'");
    }
    
    public function selectUsuario($user){
        $this->sql = $this->query("SELECT * FROM usuario WHERE id_usuario = '$user'");
    }
    
    public function selectPessoa($id){
        $this->sql = $this->query("SELECT * FROM pessoa WHERE id_pessoa = '$id'");
    }

    // seleciona militar para alterar
    public function selectMilitar($id) {
        $this->sql = $this->query("SELECT * FROM visitado WHERE id_visitado = '$id'");
    }

    public function gerarRelatorioData($dataInicial, $dataFinal) {
        $this->sql = $this->query("SELECT visita.visitante_data, visita.visitante_hora, visita.visita_saida, visita.visitante_quem_vis, visita.visitante_obs, visita.status, pessoa.nome, pessoa.foto, visita.veiculo, visita.placa FROM visita, pessoa
                                    WHERE visita.id_pessoa = pessoa.id_pessoa
                                    AND visita.visitante_data BETWEEN ('$dataInicial') AND ('$dataFinal')
                                    ORDER BY visita.id_visita;");
    }

    public function gerarRelatorioNome($nome) {
        $this->sql = $this->query("SELECT visita.visitante_data, visita.visitante_hora, visita.visita_saida, visita.visitante_quem_vis, visita.visitante_obs, visita.status, pessoa.nome, pessoa.foto, visita.veiculo, visita.placa FROM visita, pessoa
                                    WHERE visita.id_pessoa = pessoa.id_pessoa
                                    AND pessoa.nome like '%$nome%'
                                    ORDER BY visita.id_visita;");
    }

    public function gerarRelatorioDiario($data) {
        $this->sql = $this->query("SELECT visita.visitante_data, visita.visitante_hora, visita.visita_saida, visita.visitante_quem_vis, visita.visitante_obs, visita.status, pessoa.nome, pessoa.foto, visita.veiculo, visita.placa FROM visita, pessoa
                                    WHERE visita.id_pessoa = pessoa.id_pessoa
                                    AND visita.visitante_data = '$data'
                                    ORDER BY visita.id_visita;");
    }

    public function gerarRelatorioNomeVis($nome) {
        $this->sql = $this->query("SELECT visita.visitante_data, visita.visitante_hora, visita.visita_saida, visita.visitante_quem_vis, visita.visitante_obs, pessoa.nome, pessoa.foto, visita.veiculo, visita.placa FROM visita, pessoa
                                    WHERE visita.id_pessoa = pessoa.id_pessoa
                                    AND visita.visitante_quem_vis like '%$nome%'
                                    ORDER BY visita.id_visita;");
    }

    // METODO QUE SELECIONA TODA A TABELA
    public function select() {
        $this->sql = $this->query("SELECT * FROM $this->table WHERE status = 1");
    }
    
    public function selectTodosVisitados($pg, $total) {
        $this->sql = $this->query("SELECT * FROM $this->table WHERE status = 1 ORDER BY visitado_nome LIMIT $pg, $total");
    }

    // FUNCAO DE SELEÇÃO E ORDENAÇÃO COM STATUS 1
    public function selectOrder() {
        $this->sql = $this->query("SELECT * FROM $this->table WHERE status = 1 ORDER BY $this->valueId DESC");
    }

    // FUNCAO DE SELEÇÃO E ORDENAÇÃO
    public function selectTodoOrder() {
        $this->query("SELECT * FROM $this->table ORDER BY $this->valueId DESC");
    }

    // SELECIONANDO TUDO NO BANCO
    public function selectTodo() {
        $this->query("SELECT * FROM $this->table $this->orderBy");
    }

    //METODO QUE BUSCA O ULTIMO CODIGO CADASTRADO NA TABELA
    public function getLastId() {
        $this->sql = "SELECT $this->campoTable FROM $this->table ORDER BY $this->campoTable";
        $this->qr = self::execSql($this->sql);
        $this->data = self::listQr($this->qr);
        return $this->data["$this->campoTable"];
    }

    //METODO QUE VERIFICA SE EXISTEM VALORES DUPLICADOS, RETORNA 1 EXISTE - RETORNA 0 NAO EXISTE
    public function getDadosDuplicados($valorPesquisado) {
        $this->sql = "SELECT $this->campoTable FROM $this->table WHERE $this->campoTable = '$valorPesquisado'";
        $this->qr = $this->query($this->sql);
        return self::countData($this->qr);
    }

    //METODO QUE BUSCA O TOTAL DE DADOS CADASTRADO EM UMA QUERY
    public function getTotalData() {
        $this->sql = "SELECT $this->campoTable FROM $this->table ORDER BY $this->campoTable";
        $this->qr = $this->query($this->sql);
        return self::countData($this->qr);
    }

    // METODO QUE BUSCA O TOTAL DE DADOS CADASTRADO EM UMA QUERY
    public function numRows() {
        $this->countData($this->sql);
        return $this->countData();
    }

    function formataData($data) {
        list($ano, $mes, $dia) = explode("-", $data);
        return $dia . "/" . $mes . "/" . $ano;
    }

    function formata_data_db($data) {
        if (($data[4] != '-') || ($data[7] != '-')) {
            list($dia, $mes, $ano) = explode("/", $data);
            return $ano . "-" . $mes . "-" . $dia;
        } else {
            return $data;
        }
    }

}
?>

