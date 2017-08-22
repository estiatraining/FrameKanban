<?php
include $_SERVER['DOCUMENT_ROOT'] . '/kanban/framework/Utils/LoadClass.class.php';
include 'CodeGenerator.class.php';
$__autoload = new LoadClass();
$__autoload->carregar('Logs;Sessoes;Utilitarios;Ambiente;Expression;Filter;Criteria;FilterJoin;CriteriaJoin;SqlInstruction;SqlDelete;SqlInsert;SqlSelect;SqlUpdate;Conn;UtilsDB;CrudAction;CrudActionImp;CrudService;CrudServiceImp;CrudBusiness;CrudBusinessImp;CrudDao;CrudDaoImp');
$utils = new Utilitarios();
$CodeGenerator = new CodeGenerator();
$retorno = FALSE;
if (isset($_REQUEST['classe'])) {
    if (@$_REQUEST['classe'] != "0" and @$_REQUEST['metodo'] != "") {
        $CodeGenerator->setClass($_REQUEST['classe']);
        $CodeGenerator->setMethods($_REQUEST['metodo']);
        $CodeGenerator->setGeraPage($_REQUEST['geraPage']);
        $CodeGenerator->setTipoPage($_REQUEST['tipoPage']);
        $retorno = $CodeGenerator->genDto();
        $retorno = $CodeGenerator->genAction();
        $retorno = $CodeGenerator->genBusiness();
        $retorno = $CodeGenerator->genDao();
        $retorno = $CodeGenerator->genService();
        $retorno = $CodeGenerator->genReports();
        $retorno = $CodeGenerator->genCSS();
        $retorno = $CodeGenerator->genJScript();
        $retorno = $CodeGenerator->genPages();
        if ($retorno) {
            echo "<script>alert('Arquivos gerados com sucesso!');</script>";
        } else {
            echo "<script>alert('Ocorreu algum erro ao gerar os arquivos!');</script>";
        }
    } else {
        echo "<script>alert('Digite os campos Classe e Atributo antes de gerar!');</script>";
    }
}
$contexto = $utils->getContexto();
$sgbd = '';
$dsn = '';
$usr = '';
$pass = '';
$res = '';
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $contexto . '/framework/sysConf/conf.ini')) {
    $dados = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/' . $contexto . '/framework/sysConf/conf.ini');
    $sgbd = $dados['sgbd'];
    $pass = $dados['password'];
    $usr = $dados['user'];
    $dsn = $sgbd . ':dbname=' . $dados['bank'] . ';host=' . $dados['host'] . '';
}
$Conn = new PDO($dsn, $usr, $pass);
$Conn->beginTransaction();
if ($sgbd == 'mysql') {
    $res = $Conn->query("SHOW TABLES");
} else {
    $res = $Conn->query("SELECT tablename AS tabela FROM pg_catalog.pg_tables WHERE schemaname NOT IN ('pg_catalog', 'information_schema', 'pg_toast') ORDER BY tablename");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gerador de códigos para o Framework</title>
        <link rel="stylesheet" href="CSS/custom-theme/jquery-ui-1.8.14.custom.css" type="text/css" />        
        <link rel="stylesheet" href="css/codeGenerator.css" type="text/css" />
        <script type="text/javascript" src="JScript/jquery-1.6.2.js" ></script>
        <script type="text/javascript" src="JScript/jquery-ui-1.8.js" ></script>
        <script type="text/javascript" src="JScript/jquery.json-2.2.min.js" ></script>
        <script type="text/javascript" src="JScript/utils.js"> </script>   
        <script type="text/javascript" >
            function acao(){
                ajax("framework/CodeGenerator/auxGerador.php", "form" , acaoBack);
            }
            function acaoBack(dados){
                document.getElementById('metodo').value = "";
                document.getElementById('metodo').value = dados.attr;
            }
        </script>
    </head>
    <body onload="document.getElementById('classe').focus();">
        <h2>Gerador de Códigos para o Framework</h2>
        <div id="estrutura">
            <form id="formulario" name="formulario" method="post" action="gerador.php">
                <div id="dir">
                    <label style="width: 100%;">
                        Gerar páginas(viwer): <span>Para criar as páginas do sistema!</span>
                    </label> 
                    <label class="geraPage">
                        <input type="radio" name="geraPage" id="geraPage" value="s" />Sim
                    </label>
                    <label class="geraPage">
                        <input type="radio" checked name="geraPage" id="geraPage" value="n" />Não
                    </label>                     
                </div>                 
                <div id="esq">
                    <label style="width: 100%;">
                        Tipo de geração de páginas: <span>Para escolher que tipo de página é para ser gerada!</span>
                    </label> 
                    <label class="tipoPage">
                        <input type="radio" name="tipoPage" id="tipoPage" value="xhtml" />xhtml
                    </label>
                    <label class="tipoPage">
                        <input type="radio" name="tipoPage" checked id="tipoPage" value="php" />php
                    </label>
                    <label class="tipoPage">
                        <input type="radio" name="tipoPage" id="tipoPage" value="phtml" />phtml
                    </label> 
                </div>                               
                <label for="classe" class="classe">Classe:* <span>Escolha a tabela - Ex: usuario</span>
                    <!--input type="text" name="classe" id="classe" /-->
                    <select name="classe" id="classe" onchange="acao()" style="width: 250px" >  
                        <option value="0">--Escolha uma Tabela--</option>
                    <?php
                    $result = $res->fetchAll();
                    foreach ($result as $id => $valor) {
                        echo "<option value='" . ucwords( $valor[0] ) . "'>" . ucwords( $valor[0] ) . "</option>";
                    }
                    ?>    
                    </select>                        
                </label>
                <label for="metodo" class="metodo">Atributos:* <span>Digite o(s) nome(s) do(s) atributos(s) separado por ";"(ponto-vírgula) - Ex: usr_id;usr_login;usr_senha</span>
                    <textarea name="metodo" id="metodo" ></textarea>
                </label>
                <hr />
                <label for="botao" class="botaos">
                    <input type="submit" id="botao" name="botao" class="botao" value="GERAR" title="Clique aqui para gerar os códigos!" />
                </label>
                <label for="limpar" class="limpar">
                    <input type="reset" id="limpar" name="limpar" class="botao" value="LIMPAR" title="Clique aqui para limpar os códigos!" />
                </label>
            </form>
        </div>
    </body>
</html>
