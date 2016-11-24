<?php

require_once ("smarty/Smarty.class.php");
require_once ("include/models/ManipulateData.php");

/*
 * CLASSE DE INICIALIZAÇÃO DO SISTEMA
 * DATA CRIAÇÃO: 04-06-2013
 * VERSÃO 1.0
 */

class Main {

    private $nivel;
    private $usuario;

    // SETANDO UM VALOR A VARIAVEL NIVEL
    public function setNivel($n) {
        $this->nivel = $n;
    }

    // MOSTRA O VALOR ATRIBUIDO A VARIAVEL NIVEL
    public function getNivel() {
        return $this->nivel;
    }

    // SETANDO UM VALOR A VARIAVEL NIVEL
    public function setUsuario($u) {
        $this->usuario = $u;
    }

    // MOSTRA O VALOR ATRIBUIDO A VARIAVEL USUARIO
    public function getUsuario() {
        return $this->usuario;
    }

    // FUNCAO QUE INICIALIZA O ADMINISTRADOR
    public function startAdmin() {
        $smarty = new Smarty();

        // FAZENDO A LISTAGEM DOS CONTATOS ENVIADOS QUE SE ENCONTRAM NO BANCO DE DADOS
        $listar = new ManipulateData();
        $listar->setTable("contato"); // SETANDO A TABELA DA SELEÇÃO
        $listar->setValueId("id_contato"); // SETANDO O ID_CONTATO PARA ORDENAR EM ORDEM DECRESCENTE
        $listar->selectOrder(); // FAZENDO A SELEÇÃO EM ORDEM DECRESCENTE
        // FAZENDO A BUSCA NO BANCO DE DADOS
        if ($listar->registros_retornados()) {
            while ($contato = $listar->fetch_object()) {
                $listId[] = $contato->id_contato;
                $listRemetente[] = $contato->contato_nome;
                $listAssunto[] = $contato->contato_assunto;

                $smarty->assign("listId", $listId);
                $smarty->assign("nomeRemetente", $listRemetente);
                $smarty->assign("listAssunto", $listAssunto);
            }
            $smarty->assign("qnt", "sim");
        } else {
            $smarty->assign("listId", "");
            $smarty->assign("nomeRemetente", "");
            $smarty->assign("listAssunto", "");
            $smarty->assign("qnt", "nao");
        }
        // VERIFICAÇAO PARA MOSTRAR O FREEDBAK PARA O USUARIO, CASO A MENSAGEM FOR MARCADA COMO LIDA
        if (isset($_SESSION['lida'])) {
            $numMensagem = $_SESSION['lida'];
            $smarty->assign("lida", "A mensagem de numero $numMensagem foi marcada como lida");
        } else {
            $smarty->assign("lida", "&nbsp;");
        }
        unset($_SESSION['lida']); // DESTROI A SESSION SE A PAGINA FOR ATUALIZADA
        // FIM DA VERIFICAÇÃO DO FREEDBAK

        $busca2 = new ManipulateData();
        // FAZENDO A PESQUISA UNINDO AS DUAS TABELAS DO BANCO DE DADOS
        $busca2->selectVisita();

        // LOOP PARA SETAR OS RESULTADOS NAS VARIAVEIS PARA TPL
        while ($obj = $busca2->fetch_object()) {
            $id_vis[] = $obj->id_visita;
            $nome_vis[] = $obj->nome;
            $hora[] = $obj->visitante_hora;
            $data[] = $busca2->formataData($obj->visitante_data);
            $quemVis[] = $obj->visitante_quem_vis;
            $foto[] = $obj->foto;
            $secao[] = $obj->visitante_obs;
            $cracha[] = $obj->cracha;

            $smarty->assign("idVis", $id_vis);
            $smarty->assign("nomeVis", $nome_vis);
            $smarty->assign("data", $data);
            $smarty->assign("hora", $hora);
            $smarty->assign("quemVis", $quemVis);
            $smarty->assign("foto", $foto);
            $smarty->assign("secao", $secao);
            $smarty->assign("cracha", $cracha);
        }

        if ($busca2->registros_retornados()) {
            $smarty->assign("existe", "SIM");
        } else {
            $smarty->assign("existe", "NAO");
        }

        $smarty->assign("titulo", "CadVisiOn - Administrador"); // VARIAVEL DO TITULO DA PAGINA
        $smarty->assign("menu", $this->getNivel()); // DEFINE O MENU A SER MOSTADO NA LAYOUT.TPL
        $smarty->assign('login', $this->getUsuario());
        $smarty->assign("local", "Home"); // VARIAVEL DE LOCALIZAÇÃO
        $smarty->assign("conteudo", "admin/admin.tpl"); // DEFINE A VARIAVEL QUE IRÁ CHAMAR A TPL

        $smarty->display("layout.tpl"); // CHAMA O LAYOUT PADRÃO DO SISTEMA
    }

    // FUNCAO QUE INICIALIZA USUARIO
    public function startUsuario() {
        $smarty = new Smarty();

        $smarty->assign("titulo", "CadVisiOn - Usuário"); // VARIAVEL DO TITULO DA PAGINA
        $smarty->assign('login', $this->getUsuario()); // VARIAVEL DE USUARIO
        $smarty->assign("menu", $this->getNivel()); // DEFINE O MENU A SER MOSTADO NA LAYOUT.TPL
        $smarty->assign("local", "Home"); // VARIAVEL DE LOCALIZAÇÃO
        $smarty->assign("conteudo", "usuario/usuario.tpl"); // DEFINE A VARIAVEL QUE IRÁ CHAMAR A TPL
        $smarty->display("layout.tpl"); // CHAMA O LAYOUT PADRÃO DO SISTEMA
    }

    // FUNCAO QUE INICIALIZA O SUPERVISOR
    public function startSupervis() {
        $smarty = new Smarty();

        $smarty->assign("titulo", "CadVisiOn - Supervisor"); // VARIAVEL DO TITULO DA PAGINA
        $smarty->assign('login', $this->getUsuario()); // VARIAVEL DE USUARIO
        $smarty->assign("menu", $this->getNivel()); // DEFINE O MENU A SER MOSTADO NA LAYOUT.TPL
        $smarty->assign("local", "Home"); // VARIAVEL DE LOCALIZAÇÃO
        $smarty->assign("conteudo", "supervisor/supervis.tpl"); // DEFINE A VARIAVEL QUE IRÁ CHAMAR A TPL
        // FAZENDO A LISTAGEM DOS CONTATOS ENVIADOS QUE SE ENCONTRAM NO BANCO DE DADOS

        $busca2 = new ManipulateData();
        // FAZENDO A PESQUISA UNINDO AS DUAS TABELAS DO BANCO DE DADOS
        $busca2->selectVisita();

        // LOOP PARA SETAR OS RESULTADOS NAS VARIAVEIS PARA TPL
        while ($obj = $busca2->fetch_object()) {
            $id_vis[] = $obj->id_visita;
            $nome_vis[] = $obj->nome;
            $hora[] = $obj->visitante_hora;
            $data[] = $busca2->formataData($obj->visitante_data);
            $quemVis[] = $obj->visitante_quem_vis;
            $foto[] = $obj->foto;
            $secao[] = $obj->visitante_obs;
            $cracha[] = $obj->cracha;

            $smarty->assign("idVis", $id_vis);
            $smarty->assign("nomeVis", $nome_vis);
            $smarty->assign("data", $data);
            $smarty->assign("hora", $hora);
            $smarty->assign("quemVis", $quemVis);
            $smarty->assign("foto", $foto);
            $smarty->assign("secao", $secao);
            $smarty->assign("cracha", $cracha);
        }

        if ($busca2->registros_retornados()) {
            $smarty->assign("existe", "SIM");
        } else {
            $smarty->assign("existe", "NAO");
        }

        // VERIFICAÇAO PARA MOSTRAR O FREEDBAK PARA O USUARIO, CASO A MENSAGEM FOR MARCADA COMO LIDA
        if (isset($_SESSION['lida'])) {
            $numMensagem = $_SESSION['lida'];
            $smarty->assign("lida", "A mensagem de numero $numMensagem foi marcada como lida");
        } else {
            $smarty->assign("lida", "&nbsp;");
        }
        unset($_SESSION['lida']); // DESTROI A SESSION SE A PAGINA FOR ATUALIZADA
        // FIM DA VERIFICAÇÃO DO FREEDBAK

        $smarty->display("layout.tpl"); // CHAMA O LAYOUT PADRÃO DO SISTEMA
    }

    // FUNCAO QUE INICIA A PAGINA DE CADASTRO NOVO USUARIO
    public function startNovoUsuario() {
        $smarty = new Smarty();

        // VERIFICA SE O USUÁRIO FOI CADASTRADO NO BANCO DE DADOS
        if (isset($_SESSION["cadastro"])) {
            $cadastro = $_SESSION["cadastro"];
            if ($cadastro == "OK") {
                $smarty->assign("cadastro", "<div class='alert alert-success'> Usuario Cadastrado com sucesso</div>");
            } else
            if ($cadastro == "ERRO") {
                $smarty->assign("cadastro", "<div class='alert alert-error'>Usuario não cadastrado</div>");
            } else
            if ($cadastro == "ALTERADO") {
                $smarty->assign("cadastro", "<div class='alert alert-success'> Usuario alterado com sucesso!</div>");
            } else
            if ($cadastro == "Erro alterar") {
                $smarty->assign("cadastro", "<div class='alert alert-error'>Erro ao alterar o usuario</div>");
            }
        } else {
            $smarty->assign("cadastro", "&nbsp;"); // PASSANDO UMA VARIAVEL VAZIA
        }
        unset($_SESSION["cadastro"]); // DESTRUINDO A SESSION CRIADA PARA MOSTRAR SE O USUARIO FOI CADASTRADO
        // FIM DA VERIFICAÇÃO DE CADASTRO DE USUARIo
        // REALIZANDO A BUSCA NO BANCO DE DADOS PARA MOSTRAR TODOS OS USUARIOS CADASTRADOS
        $busca = new ManipulateData(); // INSTANCIANDO O OBJETO DE MANIPULAÇÃO E SELECAO DO BANCO

        $busca->setTable("usuario"); // SETANDO A TABELA DE BUSCA
        $busca->select(); // REALIZA A PESQUISA NO BANCO DE DADOS COM OS PARAMETROS PASSADOS
        // RETORNA A SELEÇÃO EM UM LOOP
        while ($obj = $busca->fetch_object()) {
            $nome[] = $obj->nome;
            $id[] = $obj->id_usuario;
            $smarty->assign("nomeAdm", $nome);
            $smarty->assign("idAdm", $id);
        }
        // FIM DA BUSCA DO BANCO DE DADOS
        // VERIFICAÇÃO DE EXCLUSÃO DE USUARIO
        if (isset($_SESSION["excluir"])) {
            $smarty->assign("excluido", "Usuario excluido com sucesso");
        } else {
            $smarty->assign("excluido", "&nbsp;");
        }
        unset($_SESSION["excluir"]); // DESTRUINDO A SESSION AO ATUALIZAR A PAGINA
        // FIM DA VERIFICAÇÃO
        // CHAMANDO A PAGINA DE CADASTRO DE USUARIO COM OS RESPECTIVOS ATRIBUTOS QUE ELA PERTECEM
        $smarty->assign("titulo", "CadVisiOn - Cadastrar novo usuário");
        $smarty->assign("local", "<a href='index.php'>Home</a> > Cadastrar Novo"); // VARIAVEL DE LOCALIZAÇÃO
        $smarty->assign("menu", $this->getNivel()); //  DEFINE O MENU A SER MOSTADO NA LAYOUT.TPL
        $smarty->assign('login', $this->getUsuario()); // VARIAVEL DE USUARIO
        $smarty->assign("conteudo", "admin/cadastra.tpl"); // VARIAVEL DE CONTEUDO
        $smarty->display("layout.tpl"); // CHAMANDO O LAYOUT PRINCIPAL
    }

    // FUNÇÃO QUE INICIALIZA A PAGINA DE CADASTRO DE VISITA
    public function startCadVisita() {
        $smarty = new Smarty();

        if (isset($_GET["var"]) && $_GET["var"] == "cancela") {

            unset($_SESSION["visi"]);
            unset($_SESSION["cpf"]);
        }

        // TITULO DA PAGINA
        $smarty->assign("titulo", "CadVisiOn - Cadastro de visitantes");
        $smarty->assign("menu", $this->getNivel()); // DEFINE O MENU A MOSTRAR NO LAYOUT
        $smarty->assign('login', $this->getUsuario()); // VARIAVEL DE USUARIO
        $smarty->assign("local", "<a href='index.php'>Home</a> > Verifica Visitante"); // LOCALIZAÇÃO DO USUARIO
        // VERIFICA SE CPF INFORMADO EXISTE
        if (isset($_SESSION["visi"])) {

            // SE EXISTIR VISITANTE JÁ CADASTRADO, SERÁ DIRECIONADO PARA A PAGINA DE VISITATE CADASTRADO
            if ($_SESSION["visi"] == "CAD") {

                $smarty->assign("titulo", "CadVisiOn - Visitantes Cadastrados");
                $smarty->assign("menu", $this->getNivel()); // DEFINE O MENU A MOSTRAR NO LAYOUT
                $smarty->assign('login', $this->getUsuario()); // VARIAVEL DE USUARIO
                $smarty->assign("local", "<a href='index.php'>Home</a> > <a href='cad_visita.php'>Verifica Visitante</a> > Visitantes Cadastrados"); // LOCALIZAÇÃO DO USUARIO
                $smarty->assign("conteudo", "paginas/visita_cadastradas.tpl"); // CHAMA A PAGINA DE CADASTRO DE VISITA
                $busca2 = new ManipulateData();
                // FAZENDO A PESQUISA UNINDO AS DUAS TABELAS DO BANCO DE DADOS
                $cpf = $_SESSION["cpf"];
                $busca2->selectVisitaEspec($cpf);
                // LOOP PARA SETAR OS RESULTADOS NAS VARIAVEIS PARA TPL

                while ($obj = $busca2->fetch_object()) {
                    $id_vis = $obj->id_visita;
                    $nome_vis = $obj->nome;
                    $hora = $obj->visitante_hora;
                    $quemVis = $obj->visitante_quem_vis;
                    $foto = $obj->foto;
                    $smarty->assign("idVis", $id_vis);
                    $smarty->assign("nomeVis", $nome_vis);
                    $smarty->assign("hora", $hora);
                    $smarty->assign("quemVis", $quemVis);
                    $smarty->assign("foto", $foto);
                }
                unset($_SESSION["visi"]);
            } else

            // SE O CPF INFORMADO TIVER CADASTRADO MANDA O NOME DA PESSOA E O ID PARA UMA PAGINA DE CADASTRO DE VISITA
            if ($_SESSION["visi"] == "OK") {
                // FAZENDO A BUSCA DO NOME DE TODOS OS MILITARES CADASTRADOS
                $visitado = new ManipulateData();
                $visitado->selectVisitados();
                while ($resultado = $visitado->fetch_object()) { // LOOP DE REPETIÇÃO PARA ADICIONAR OS VALORES A UMA ARRAY
                    $nome[] = $resultado->visitado_nome;
                    $smarty->assign("nome", $nome);
                }
                // FIM DA PESQUISA NO BANCO DE DADOS PARA MOSTRAR TODOS OS MILITARES CADASTRADOS
                // RETORNA A SELEÇÃO EM UMA SESSION
                $smarty->assign("local", "<a href='index.php'>Home</a> > <a href='cad_visita.php?var=cancela'>Verifica Visitante</a> > Cadastrar Visita"); // define o local onde o usuario está
                $smarty->assign("idPessoa", $_SESSION["id_pessoa"]);
                $smarty->assign("nomePessoa", $_SESSION["nomePessoa"]); // RECEBENDO A PESQUISA EM UMA SESSION
                $smarty->assign("fotoVisitante", $_SESSION["filename"]);
                $smarty->assign("conteudo", "paginas/cad_visita.tpl"); // CHAMA A PAGINA DE CADASTRO DE VISITA

                $busca2 = new ManipulateData();
                // FAZENDO A PESQUISA UNINDO AS DUAS TABELAS DO BANCO DE DADOS
                $busca2->selectVisitaTodas();

                // LOOP PARA SETAR OS RESULTADOS NAS VARIAVEIS PARA TPL
                while ($obj = $busca2->fetch_object()) {
                    $id_vis[] = $obj->id_visita;
                    $nome_vis[] = $obj->nome;
                    $hora[] = $obj->visitante_hora;
                    $data[] = $obj->visitante_data;
                    $quemVis[] = $obj->visitante_quem_vis;
                    $foto[] = $obj->foto;

                    $smarty->assign("idVis", $id_vis);
                    $smarty->assign("nomeVis", $nome_vis);
                    $smarty->assign("data", $data);
                    $smarty->assign("hora", $hora);
                    $smarty->assign("quemVis", $quemVis);
                    $smarty->assign("foto", $foto);
                }

                if ($busca2->registros_retornados()) {
                    $smarty->assign("existe", "SIM");
                } else {
                    $smarty->assign("existe", "NAO");
                }
            } else
            // SE NÃO TIVER, MANDA PARA UMA PAGINA DE CADASTRO DE PESSOA
            if ($_SESSION["visi"] == "NAO") {
                $smarty->assign("local", "<a href='index.php'>Home</a> > <a href='cad_visita.php?var=cancela'>Verifica Visitante</a> > Cadastrar Pessoa"); // define o local onde o usuario está

                if (isset($_SESSION["cpf"])) { // se vier da verificação de CPF manda o cpf informado para cadastro, senão, manda para uma pagina sem o numero de cpf
                    $smarty->assign("cpf", $_SESSION["cpf"]);
                } else {
                    $smarty->assign("cpf", "");
                }

                if (isset($_SESSION["cpfInvalido"])) {
                    if ($_SESSION["cpfInvalido"] == "SIM") {
                        $smarty->assign("cadPessoa", "<div class='alert alert-danger'>Pessoa não cadastrada, CPF inválido</div>");
                    } else {
                        $smarty->assign("cadPessoa", "");
                    }
                } else {
                    $smarty->assign("cadPessoa", "");
                }
                unset($_SESSION["cpfInvalido"]);

                $smarty->assign("conteudo", "paginas/cad_pessoa.tpl"); // CHAMA A PAGINA DE CADASTRO DE PESSOA
                // REALIZANDO A BUSCA NO BANCO DE DADOS PARA MOSTRAR TODOS AS PESSOAS CADASTRADOS
                $busca = new ManipulateData(); // INSTANCIANDO O OBJETO DE MANIPULAÇÃO E SELECAO DO BANCO
                $busca->setTable("pessoa"); // SETANDO A TABELA DE BUSCA
                $busca->selectTodo(); // REALIZA A PESQUISA NO BANCO DE DADOS COM OS PARAMETROS PASSADOS
                // RETORNA A SELEÇÃO EM UM LOOP
                while ($obj = $busca->fetch_object()) {
                    $nome[] = $obj->nome;
                    $id[] = $obj->id_pessoa;
                    $smarty->assign("nomePessoa", $nome);
                    $smarty->assign("idPessoa", $id);
                }

                if (isset($_SESSION["cadastro"])) {
                    $cadastro = $_SESSION["cadastro"];
                    if ($cadastro == "OK") {
                        $smarty->assign("cadastro", "<div class='alert alert-success'> Usuario Cadastrado com sucesso</div>");
                    } else
                    if ($cadastro == "ERRO") {
                        $smarty->assign("cadastro", "<div class='alert alert-error'>Usuario não cadastrado</div>");
                    } else
                    if ($cadastro == "ALTERADO") {
                        $smarty->assign("cadastro", "<div class='alert alert-success'> Usuario alterado com sucesso!</div>");
                    } else
                    if ($cadastro == "Erro alterar") {
                        $smarty->assign("cadastro", "<div class='alert alert-error'>Erro ao alterar o usuario</div>");
                    }
                } else {
                    $smarty->assign("cadastro", "&nbsp;"); // PASSANDO UMA VARIAVEL VAZIA
                }
                unset($_SESSION["cadastro"]); // DESTRUINDO A SESSION CRIADA PARA MOSTRAR SE O USUARIO FOI CADASTRADO
                // FIM DA BUSCA DO BANCO DE DADOS
            }
        } else {
            // CASO NÃO TENHA NENHUMA SESSION CRIADA, É DIRECIONADO PARA A PAGINA DE VERIFICAÇÃO DE VISITANTE
            // MENSAGEM DE CADASTRO DE VISITA
            if (isset($_SESSION['cadVisita'])) {
                if ($_SESSION['cadVisita'] == "OK") {
                    $smarty->assign("cadVisita", "<div id='ok' class='alert alert-success'>Visitante cadastrado com sucesso</div>");
                } else
                if ($_SESSION['cadVisita'] == "NAO") {
                    $smarty->assign("cadVisita", "<div id='ok' class='alert alert-danger'>Visitante não cadastrado, preencha corretamente</div>");
                }
            } else {
                $smarty->assign("cadVisita", "");
            }

            if (isset($_SESSION['desativar'])) {
                $visitante = $_SESSION['desativar'];
                $smarty->assign("desativa", "<div id='ok' class='alert alert-success'>Visitante de numero $visitante desativado</div>");
            } else {
                $smarty->assign("desativa", "");
            }
            unset($_SESSION['desativar']);

            $busca2 = new ManipulateData();
            // FAZENDO A PESQUISA UNINDO AS DUAS TABELAS DO BANCO DE DADOS
            $busca2->selectVisitaTodas();

            // LOOP PARA SETAR OS RESULTADOS NAS VARIAVEIS PARA TPL
            while ($obj = $busca2->fetch_object()) {
                $id_vis[] = $obj->id_visita;
                $nome_vis[] = $obj->nome;
                $hora[] = $obj->visitante_hora;
                $data[] = $obj->visitante_data;
                $quemVis[] = $obj->visitante_quem_vis;
                $foto[] = $obj->foto;

                $smarty->assign("idVis", $id_vis);
                $smarty->assign("nomeVis", $nome_vis);
                $smarty->assign("data", $data);
                $smarty->assign("hora", $hora);
                $smarty->assign("quemVis", $quemVis);
                $smarty->assign("foto", $foto);
            }

            if ($busca2->registros_retornados()) {
                $smarty->assign("existe", "SIM");
            } else {
                $smarty->assign("existe", "NAO");
            }

            unset($_SESSION['cadVisita']); // DESTRUINDO A SESSION
            // CHAMANDO A TPL DE VERIFICAÇÃO DE VISITA
            $smarty->assign("conteudo", "paginas/verifica_vis.tpl");
        }

        $smarty->display("layout.tpl"); // CHAMANDO O LAYOUT PRINCIPAL
        // unset($_SESSION["visi"]); // DESTRUINDO A SESSÃO CRIADA, CASO O USUARIO ATUALIZE A PAGINA
    }

    public function startMensagem() {
        $smarty = new Smarty();
        $list = new ManipulateData();

        // SE USUARIO CLICAR PARA VISIUALIZAR UMA UNICA MENSAGEM ELE PASSA OS PARAMETROS ABAIXO PARA O ARQUIVO TPL
        if (isset($_GET['msg'])) {
            $msg = addslashes($_GET['msg']);
            $list->selectMensagem($msg); // selecionando mensagem especifica
            $contatoUnico = $list->fetch_object();
            // SE EXISTIR BUSCA RELACIONADA AO ID PASSADO POR URL ELE MOSTRA A MENSAGEM
            if ($contatoUnico) {

                $idMensagem[] = $contatoUnico->id_contato;
                $nomeMensagem[] = $contatoUnico->contato_nome;
                $assuntoMensagem[] = $contatoUnico->contato_assunto;
                $mensagem[] = $contatoUnico->contato_mensagem;
                $email[] = $contatoUnico->contato_email;
                $data[] = formataData($contatoUnico->contato_data); // FORMATANDO A DATA PARA O FORMATO PADRÃO PT-BR

                $smarty->assign("idMensagem", $idMensagem);
                $smarty->assign("nomeMensagem", $nomeMensagem);
                $smarty->assign("assuntoMensagem", $assuntoMensagem);
                $smarty->assign("mensagem", $mensagem);
                $smarty->assign("email", $email);
                $smarty->assign("data", $data);
                $idMsg = $contatoUnico->id_contato;
                $smarty->assign("local", "<a href='index.php'>Home</a> > Mensagem numero $idMsg"); // VARIAVEL DE LOCALIZAÇÃO
                // SE NÃO EXISTIR BUSCA RELACIONADA AO ID PASSADO ELE MOSTRA A VARIAVEL VAZIA
            } else {
                $smarty->assign("idMensagem", "");
                $smarty->assign("nomeMensagem", "");
                $smarty->assign("assuntoMensagem", "");
                $smarty->assign("mensagem", "");
                $smarty->assign("email", "");
                $smarty->assign("data", "");
            }
            $smarty->assign("msg", $msg);
            $smarty->assign("local", "<a href='index.php'>Home</a> > Mensagem numero"); // VARIAVEL DE LOCALIZAÇÃO
            // SE NÃO FOR ESCOLHIDO UMA UNICA MENSAGEM PARA MOSTAR, APARECERÁ TODAS AS MENSAGENS
        } else {

            // FAZENDO A LISTAGEM DOS ARQUIVOS NO BANCO DE DADOS
            $list->setTable("contato"); // SETANDO A TABELA CONTATO PARA PESQUISA
            $list->setValueId("id_contato"); // SETANDO A ID_CONTATO PARA ORDENAR DESCRESCENTE
            $list->selectTodoOrder(); // FAZENDO A SELEÇÃO DE TODO O CONTEUDO EM ORDEM DECRESCENTA
            while ($msg = $list->fetch_object()) {
                $idMensagem[] = $msg->id_contato;
                $nomeMensagem[] = $msg->contato_nome;
                $assuntoMensagem[] = $msg->contato_assunto;
                $mensagem[] = $msg->contato_mensagem;
                $data[] = formataData($msg->contato_data); // FORMATANDO A DATA PARA O FORMATO PADRÃO PT-BR

                $smarty->assign("idMensagem", $idMensagem);
                $smarty->assign("nomeMensagem", $nomeMensagem);
                $smarty->assign("assuntoMensagem", $assuntoMensagem);
                $smarty->assign("mensagem", $mensagem);
                $smarty->assign("data", $data);
            }
            $smarty->assign("local", "<a href='index.php'>Home</a> > Mensagem"); // VARIAVEL DE LOCALIZAÇÃO
        }
        $smarty->assign("titulo", "CadVisiOn - Todas as mensagens"); // TITULO DA PAGINA
        $smarty->assign("menu", $this->getNivel()); // DEFINE O MENU A SER MOSTADO NA LAYOUT.TPL
        $smarty->assign('login', $this->getUsuario()); // VARIAVEL DE USUARIO
        $smarty->assign("conteudo", "admin/mensagem.tpl"); // PAGINA FALE CONOSCO
        $smarty->display("layout.tpl");
    }

    // FUNCAO DE ALTERAÇÃO DE USUARIO CADASTRADO
    public function alteraUsuario() {
        $smarty = new Smarty();
        $altera = new ManipulateData();

        $user = addslashes($_GET['user']);
        $altera->selectUsuario($user);

        if ($altera->registros_retornados()) {

            while ($usuario = $altera->fetch_object()) {

                $idUsuario = $usuario->id_usuario;
                $nome = $usuario->nome;
                $login1 = $usuario->login;
                $senha = $usuario->senha;
                $email = $usuario->email;
                $nivel = $usuario->nivel;

                $smarty->assign("idUsuario", $idUsuario);
                $smarty->assign("nome", $nome);
                $smarty->assign("login1", $login1);
                $smarty->assign("email", $email);
                $smarty->assign("nivel", $nivel);
            }
            $smarty->assign("titulo", "CadVisiOn - Alterar Usuario");
            $smarty->assign("local", "<a href='index.php'>Home</a> > <a href='cadastra_novo.php'>Cadastrar Novo Usuario</a> > Alterar Usuario");
            $smarty->assign("menu", $_SESSION['nivel']);
            $smarty->assign("login", $_SESSION["usuario"]);
            $smarty->assign("conteudo", "admin/alterar_usuario.tpl");
            $smarty->display("layout.tpl");
        } else {

            $smarty->assign("titulo", "CadVisiOn - Alterar Usuario");
            $smarty->assign("local", "<a href='index.php'>Home</a> > <a href='cadastra_novo.php'>Cadastrar Novo Usuario</a> > Erro");
            $smarty->assign("menu", $_SESSION['nivel']);
            $smarty->assign("login", $_SESSION["usuario"]);
            $smarty->assign("conteudo", "paginas/erro.tpl");
            $smarty->display("layout.tpl");
        }
    }

    public function alteraPessoa() {
        $smarty = new Smarty();
        $altera = new ManipulateData();

        $id = addslashes($_GET['id_pessoa']);
        $altera->selectPessoa($id);

        if ($altera->registros_retornados()) {

            while ($usuario = $altera->fetch_object()) {

                $smarty->assign("objeto", $usuario);
            }
            $smarty->assign("titulo", "CadVisiOn - Alterar Usuario");
            $smarty->assign("local", "<a href='index.php'>Home</a> > <a href='cadastra_novo.php'>Cadastrar Novo Usuario</a> > Alterar Usuario");
            $smarty->assign("menu", $_SESSION['nivel']);
            $smarty->assign("login", $_SESSION["usuario"]);
            $smarty->assign("conteudo", "paginas/alterar_pessoa.tpl");
            $smarty->display("layout.tpl");
        } else {

            $smarty->assign("titulo", "CadVisiOn - Alterar Usuario");
            $smarty->assign("local", "<a href='index.php'>Home</a> > <a href='cadastra_novo.php'>Alterar Pessoa</a> > Erro");
            $smarty->assign("menu", $_SESSION['nivel']);
            $smarty->assign("login", $_SESSION["usuario"]);
            $smarty->assign("conteudo", "paginas/erro.tpl");
            $smarty->display("layout.tpl");
        }
    }

    public function startVisitado() {

        $smarty = new Smarty();
        $manipula = new ManipulateData();

        // VERIFICAÇÃO DE FREDBEEK DE CADASTRO
        if (isset($_SESSION["visitado"])) {
            $visitado = $_SESSION["visitado"];
            if ($visitado == "OK") {
                $smarty->assign("visitado", "<div class='alert alert-success'>Cadastro realizado com sucesso</div>");
            } else
            if ($visitado == "CADASTRADO") {
                $smarty->assign("visitado", "<div class='alert alert-danger'>Militar ja cadastrado!</div>");
            } else
            if ($visitado == "ALTERADO") { // retorno da alteração de visitado (SUCESSO)
                $smarty->assign("visitado", "<div class='alert alert-success'>Pessoa alterada com sucesso!</div>");
            } else
            if ($visitado == "NAO") { // retorno da alteração de visitado (ERRO)
                $smarty->assign("visitado", "<div class='alert alert-danger'>Erro ao alterar, parâmetros inválidos!</div>");
            }
        } else {
            $smarty->assign("visitado", "&nbsp;");
        }
        unset($_SESSION["visitado"]); // DESTROI A SESSION CASO A PAGINA SEJA ATUALIZADA
        //
        
        if (isset($_GET["pg"])) { // se exitir uma variavel na URL é setado para a paginação
            $pg = $_GET["pg"];
        } else {
            $pg = 1;
        }
        $quantVisitado = 15; // Quantidade de pessoa por pagina

        $inicio = ($pg * $quantVisitado) - $quantVisitado; // Definindo o inicio da paginação

        $manipula->setTable("visitado");
        $manipula->setOrderBy("WHERE status = 1");
        $pagina = new Pagination($pg, $quantVisitado, $manipula->count());
        //
        // PESQUISA NO BANCO DE DADOS (INCOMPLETA)
        
        $manipula->selectTodosVisitados($inicio, $quantVisitado);

        // setando os valores do banco de dados para a template
        while ($db[] = $manipula->fetch_object()) {
            $smarty->assign("resultado", $db);
        }

        if (isset($_SESSION["excluir"])) {
            if ($_SESSION["excluir"] == "SIM") {
                $smarty->assign("excluir", "<div class='alert alert-success'> Pessoa excluida com sucesso! </div>");
            } else {
                $smarty->assign("excluir", "<div class='alert alert-danger'> Erro ao excluir! </div>");
            }
        } else {
            $smarty->assign("excluir", "");
        }
        unset($_SESSION["excluir"]);



        $smarty->assign("titulo", "CadVisiOn - Cadastra Militar");
        $smarty->assign("menu", $this->getNivel());
        $smarty->assign('login', $this->getUsuario());
        $smarty->assign("local", "<a href='index.php'>Home</a> > Cadastrar Militar");
        $smarty->assign("paginacao", $pagina->paginacao());
        $smarty->assign("conteudo", "paginas/cadastra_visitado.tpl");
        $smarty->display("layout.tpl");
    }

    // ############################################

    public function cadVisitado() {

        $smarty = new Smarty();

        $smarty->assign("titulo", "CadVisiOn - Cadastra Militar");
        $smarty->assign("menu", $this->getNivel());
        $smarty->assign('login', $this->getUsuario());
        $smarty->assign("local", "<a href='index.php'>Home</a> > Cadastrar Militar");
//
//        // VERIFICAÇÃO DE FREDBEEK DE CADASTRO
//        if (isset($_SESSION["visitado"])) {
//            $visitado = $_SESSION["visitado"];
//            if ($visitado == "OK") {
//                $smarty->assign("visitado", "<div class='alert alert-success'>Cadastro realizado com sucesso</div>");
//            } else {
//                $smarty->assign("visitado", "<div class='alert alert-danger'>Cadastro não realizado. Repita a operação</div>");
//            }
//        } else {
//            $smarty->assign("visitado", "&nbsp;");
//        }
//        unset($_SESSION["visitado"]); // DESTROI A SESSION CASO A PAGINA SEJA ATUALIZADA
//        // PESQUISA NO BANCO DE DADOS (INCOMPLETA)
//        $manipula = new ManipulateData();
//        $manipula->setTable("visitado");
//        $manipula->select();
//
//        while ($vis = $manipula->fetch_object()) {
//            $idVis[] = $vis->id_visitado;
//            $nomeVis[] = $vis->visitado_nome;
//
//            $smarty->assign("idVis", "$idVis");
//            $smarty->assign("nomeVis", $nomeVis);
//        }

        $smarty->assign("conteudo", "paginas/erro.tpl");
        $smarty->display("layout.tpl");
    }

    // ############################################
    // FUNÇÃO DE ALTERAR MILITAR
    public function alteraMilitar() {
        $smarty = new Smarty();
        $alteraMil = new ManipulateData();

        if (isset($_GET['id'])) { // SE EXISTIR UMA VARIAVEL GET FAZ O TRATAMENTO
            $id = addslashes($_GET['id']);
            if ($id == "") {
                $smarty->assign("titulo", "CadVisiOn -ERRO");
                $smarty->assign("local", "<a href='index.php'>Home</a> > <a href='cad_visitado.php'>Cadastrar Novo Militar</a> > ERRO");
                $smarty->assign("menu", $_SESSION['nivel']);
                $smarty->assign("login", $_SESSION["usuario"]);
                $smarty->assign("conteudo", "paginas/erro_mil.tpl");
                $smarty->display("layout.tpl");
            } else { // FAZENDO A SELEÇÃO DO MILITAR NO BD
                $alteraMil->selectMilitar($id);
                // se retornar algum parametro, mostra o militar cadastrado, senão mostra a pagina de erro
                if ($alteraMil->registros_retornados()) {

                    while ($obj = $alteraMil->fetch_object()) {

                        $smarty->assign("visitadoAltera", $obj);
                    }

                    $smarty->assign("titulo", "CadVisiOn - Alterar Militar");
                    $smarty->assign("local", "<a href='index.php'>Home</a> > <a href='cad_visitado.php'>Cadastrar Novo Militar</a> > Alterar Militar");
                    $smarty->assign("menu", $_SESSION['nivel']);
                    $smarty->assign("login", $_SESSION["usuario"]);
                    $smarty->assign("conteudo", "paginas/altera_militar.tpl");
                    $smarty->display("layout.tpl");
                } else {
                    $smarty->assign("titulo", "CadVisiOn -ERRO");
                    $smarty->assign("local", "<a href='index.php'>Home</a> > <a href='cad_visitado.php'>Cadastrar Novo Militar</a> > ERRO");
                    $smarty->assign("menu", $_SESSION['nivel']);
                    $smarty->assign("login", $_SESSION["usuario"]);
                    $smarty->assign("conteudo", "paginas/erro.tpl");
                    $smarty->display("layout.tpl");
                }
            }  // SE NÃO PASSAR NENHUM PARAMETRO O USUÁRIO É DIRECIONADO PARA A PAGINA DE CADASTRO
        } else {
            header("location: cad_visitado.php");
        }
    }

    public function relNomeVisitante() {
        $smarty = new Smarty();

        // verifica de existe uma variavel no post para geração de relatorios
        if (isset($_GET["rel"])) {
            $rel = $_GET["rel"];
            $data = date("d/m/Y");
            $hora = date("H:i:s");

            $formataData = new ManipulateData();
            if ($rel == "nome") { // se a variavel for "nome" envia para a pagina de pesquisa por nome
                $smarty->assign("conteudo", "paginas/rel_nome_visitante.tpl");
                $smarty->assign("titulo", "CadVisiOn - Relatorio");
                $smarty->assign("local", "<a href='index.php'>Home</a> > Relatório por nome do visitante");
                $smarty->assign("menu", $_SESSION['nivel']);
                $smarty->assign("login", $_SESSION["usuario"]);
                $smarty->display("layout.tpl");
            } else

            if ($rel == "data") { // se a variavel for "data" envia para a pagina de pesquisa por data
                $smarty->assign("conteudo", "paginas/rel_data.tpl");
                $smarty->assign("titulo", "CadVisiOn - Relatorio");
                $smarty->assign("data", $data);
                $smarty->assign("hora", $hora);
                $smarty->assign("local", "<a href='index.php'>Home</a> > Relatório por data");
                $smarty->assign("menu", $_SESSION['nivel']);
                $smarty->assign("login", $_SESSION["usuario"]);
                $smarty->display("layout.tpl");
            } else
            if ($rel == "visitado") { // se a variavel for "visitado" envia para a pagina de pesquisa por nome do visitado
                $smarty->assign("conteudo", "paginas/rel_visitado.tpl");
                $smarty->assign("titulo", "CadVisiOn - Relatorio");
                $smarty->assign("local", "<a href='index.php'>Home</a> > Relatório por nome do visitado");
                $smarty->assign("menu", $_SESSION['nivel']);
                $smarty->assign("login", $_SESSION["usuario"]);
                $smarty->display("layout.tpl");
            } else
            if ($rel == "diario") {

                header("Location: relatorioDiario.php");
                exit();
            } else {
                $smarty->assign("conteudo", "paginas/erro_mil.tpl");
                $smarty->assign("titulo", "CadVisiOn - Relatorio");
                $smarty->assign("local", "<a href='index.php'>Home</a> >  Erro");
                $smarty->assign("menu", $_SESSION['nivel']);
                $smarty->assign("login", $_SESSION["usuario"]);
                $smarty->display("layout.tpl");
            }
        } else { // caso não tenha nenhuma variavel, mostra a pagina de menu para escolha
            $smarty->assign("conteudo", "paginas/erro_mil.tpl");
            $smarty->assign("titulo", "CadVisiOn - Relatorio");
            $smarty->assign("local", "<a href='index.php'>Home</a> >  Erro");
            $smarty->assign("menu", $_SESSION['nivel']);
            $smarty->assign("login", $_SESSION["usuario"]);
            $smarty->display("layout.tpl");
        }
    }

    public function pessoasCadastradas() {
        $smarty = new Smarty();
        // REALIZANDO A BUSCA NO BANCO DE DADOS PARA MOSTRAR TODOS AS PESSOAS CADASTRADOS
        $busca = new ManipulateData(); // INSTANCIANDO O OBJETO DE MANIPULAÇÃO E SELECAO DO BANCO
        $busca->setTable("pessoa"); // SETANDO A TABELA DE BUSCA
        $busca->selectTodo(); // REALIZA A PESQUISA NO BANCO DE DADOS COM OS PARAMETROS PASSADOS
        // RETORNA A SELEÇÃO EM UM LOOP
        while ($obj = $busca->fetch_object()) {
            $id[] = $obj->id_pessoa;
            $nome[] = $obj->nome;
            $cidade[] = $obj->cidade;
            $estado[] = $obj->uf;
            $foto[] = $obj->foto;
            $telefone[] = $obj->telefone;
            $cpf[] = $obj->cpf;

            $smarty->assign("estado", $estado);
            $smarty->assign("foto", $foto);
            $smarty->assign("cidade", $cidade);
            $smarty->assign("nome", $nome);
            $smarty->assign("telefone", $telefone);
            $smarty->assign("id", $id);
            $smarty->assign("cpf", $cpf);
        }

        // VERIFICA SE O USUÁRIO FOI CADASTRADO NO BANCO DE DADOS
        if (isset($_SESSION["cadastro"])) {
            $cadastro = $_SESSION["cadastro"];
            if ($cadastro == "OK") {
                $smarty->assign("cadastro", "<div class='alert alert-success'><center><strong> Pessoa Cadastrada com sucesso</center></strong></div>");
            } else
            if ($cadastro == "ERRO") {
                $smarty->assign("cadastro", "<div class='alert alert-error'>Usuario não cadastrado</div>");
            } else
            if ($cadastro == "ALTERADO") {
                $smarty->assign("cadastro", "<div class='alert alert-success'><center><strong> Pessoa alterada com sucesso!</center></strong></div>");
            } else
            if ($cadastro == "Erro alterar") {
                $smarty->assign("cadastro", "<div class='alert alert-error'>Erro ao alterar o usuario</div>");
            }
        } else {
            $smarty->assign("cadastro", "&nbsp;"); // PASSANDO UMA VARIAVEL VAZIA
        }
        unset($_SESSION["cadastro"]); // DESTRUINDO A SESSION CRIADA PARA MOSTRAR SE O USUARIO FOI CADASTRADO

        if (isset($_SESSION["excluir"])) {
            $excluir = $_SESSION["excluir"];
            if ($excluir == "SIM") {
                $smarty->assign("excluir", "<div class='alert alert-success'><center><strong>Usuário excluido com sucesso!</strong></center></div>");
            } else {
                $smarty->assign("excluir", "Erro ao excluir usuário");
            }
        } else {
            $smarty->assign("excluir", "");
        }
        unset($_SESSION["excluir"]);
        unset($_SESSION["filename"]);

        $smarty->assign("titulo", "CadVisiOn - Pessoas Cadastradas");
        $smarty->assign("local", "<a href='index.php'>Home</a> > Pessoas Cadastradas");
        $smarty->assign("menu", $_SESSION['nivel']);
        $smarty->assign("login", $_SESSION["usuario"]);
        $smarty->assign("conteudo", "paginas/pessoas-cadastradas.tpl");
        $smarty->display("layout.tpl");
    }

    public function buscaPessoaCad() {

        $nome = addslashes($_GET["nome"]);
        $smarty = new Smarty();
        // REALIZANDO A BUSCA NO BANCO DE DADOS PARA MOSTRAR TODOS AS PESSOAS CADASTRADOS
        $busca = new ManipulateData(); // INSTANCIANDO O OBJETO DE MANIPULAÇÃO E SELECAO DO BANCO
        $busca->selectVisitanteNome($nome); // realizando a busca

        while ($obj[] = $busca->fetch_object()) {

            $smarty->assign("busca", $obj);
        }

        $smarty->assign("nomeBusca", $nome);
        $smarty->assign("titulo", "CadVisiOn - Busca Pessoa");
        $smarty->assign("local", "<a href='index.php'>Home</a> > <a href='cad_visita.php'>Cadastrar Visita</a> > Buscar Pessoa");
        $smarty->assign("menu", $_SESSION['nivel']);
        $smarty->assign("login", $_SESSION["usuario"]);
        $smarty->assign("conteudo", "paginas/busca_pessoa.tpl");
        $smarty->display("layout.tpl");
    }

    public function relatorios() {
        $smarty = new Smarty();

        if (isset($_GET['rel'])) {
            $rel = $_GET['rel'];

            if ($rel == "data") {
                $smarty->assign("titulo", "CadVisiOn - Relatorios por data");
                $smarty->assign("local", "<a href='index.php'>Home</a> > Relatorios Por Data");
                $smarty->assign("menu", $_SESSION['nivel']);
                $smarty->assign("login", $_SESSION["usuario"]);
                $smarty->assign("conteudo", "paginas/relatorio_data.tpl");
                $smarty->assign("relatorio", "data");
                $smarty->display("layout.tpl");
            } else
            if ($rel == "nomeVis") {
                $smarty->assign("titulo", "CadVisiOn - Relatorios por nome do visitante");
                $smarty->assign("local", "<a href='index.php'>Home</a> > Relatorios Por Nome Do Visitante");
                $smarty->assign("menu", $_SESSION['nivel']);
                $smarty->assign("login", $_SESSION["usuario"]);
                $smarty->assign("conteudo", "paginas/relatorio_nome_vis.tpl");
                $smarty->assign("relatorio", "data");
                $smarty->display("layout.tpl");
            } else
            if ($rel == "nomeVisit") {
                $smarty->assign("titulo", "CadVisiOn - Relatorios por nome do visitado");
                $smarty->assign("local", "<a href='index.php'>Home</a> > Relatorios Por Nome Do Visitado");
                $smarty->assign("menu", $_SESSION['nivel']);
                $smarty->assign("login", $_SESSION["usuario"]);
                $smarty->assign("conteudo", "paginas/relatorio_nome_visitado.tpl");
                $smarty->assign("relatorio", "data");
                $smarty->display("layout.tpl");
            } else {
                header("location: /cadvision"); // CASO SEJA PASSADO UM PARAMETRO INVALIDO PELA URL, É DIRECIONADO PARA A HOME
            }
        }
    }

    // função da pagina de logs de acesso ao sistema
    public function startLogUser() {
        $smarty = new Smarty();
        $logUser = new ManipulateData();

        if (isset($_GET["pg"])) { // se exitir uma variavel na URL é setado para a paginação
            $pg = $_GET["pg"];
        } else {
            $pg = 1;
        }
        $quantLog = 20; // Quantidade de pessoa por pagina

        $inicio = ($pg * $quantLog) - $quantLog; // Definindo o inicio da paginação

        $logUser->setTable("acesso_usuario");
        $pagina = new Pagination($pg, $quantLog, $logUser->count());
        
        $logUser->setOrderBy("ORDER BY id_acesso DESC LIMIT $inicio, $quantLog");
        $logUser->selectTodo();

        while ($objLog[] = $logUser->fetch_object()) {
            $smarty->assign("logUsr", $objLog);
        }

        $smarty->assign("titulo", "CadVisiOn - Log de acesso ao sistema");
        $smarty->assign("local", "<a href='index.php'>Home</a> > Log de acesso ao sistema");
        $smarty->assign("menu", $_SESSION['nivel']);
        $smarty->assign("login", $_SESSION["usuario"]);
        $smarty->assign("paginacao", $pagina->paginacao());
        $smarty->assign("conteudo", "paginas/log_acesso.tpl");
        $smarty->display("layout.tpl");
    }

    public function acesso_negado() {
        $smarty = new Smarty();

        $smarty->assign("titulo", "CadVisiOn - Erro! Acesso negado");
        $smarty->assign("local", "<a href='index.php'>Home</a> > Erro! Acesso negado");
        $smarty->assign("menu", $_SESSION['nivel']);
        $smarty->assign("login", $_SESSION["usuario"]);
        $smarty->assign("conteudo", "paginas/acesso_negado.tpl");
        $smarty->display("layout.tpl");
    }

}

?>
