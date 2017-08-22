<?php

include $_SERVER['DOCUMENT_ROOT'] . '/kanban/framework/Utils/LoadClass.class.php';
$__autoload = new LoadClass();
$__autoload->carregar('Logs;Sessoes;Utilitarios;Ambiente;Expression;Filter;Criteria;FilterJoin;CriteriaJoin;SqlInstruction;SqlDelete;SqlInsert;SqlSelect;SqlUpdate;Conn;UtilsDB;CrudAction;CrudActionImp;CrudService;CrudServiceImp;CrudBusiness;CrudBusinessImp;CrudDao;CrudDaoImp');
$utils = new Utilitarios();
$contexto = $utils->getContexto();
$sgbd = '';
$dsn = '';
$usr = '';
$pass = '';
$res = '';
$attr = '';
$classe = @$_REQUEST['classe'];
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
    $res = $Conn->query("DESCRIBE {$classe}");
} else {
    $res = $Conn->query("SELECT column_name FROM information_schema.columns WHERE table_schema = 'public' AND table_name = '{$classe}' ORDER BY ordinal_position");
}
$arr = array();
$x = array();
$result = $res->fetchAll();
foreach ($result as $id => $valor) {
    $x[] = strtolower($valor[0]);
}
$attr = implode(";", $x);
$arr['attr'] = $attr;
echo json_encode($arr);
?>
