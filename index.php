<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include $_SERVER['DOCUMENT_ROOT'] . '/kanban/framework/Utils/LoadClass.class.php';
header('Content-Type: text/html; charset=utf-8');
try {
    $__autoload = new LoadClass();
    $__autoload->carregar('Logs;Sessoes;Utilitarios;Ambiente;Expression;Filter;Criteria;FilterJoin;CriteriaJoin;SqlInstruction;SqlDelete;SqlInsert;SqlSelect;SqlUpdate;Conn;UtilsDB;CrudAction;CrudActionImp;CrudService;CrudServiceImp;CrudBusiness;CrudBusinessImp;CrudDao;CrudDaoImp');
    $utils = new Utilitarios();
} catch (Exception $e) {
    $logs = new Logs();
    $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $utils->i18n("default.title"); ?></title>
        <link rel="shortcut icon" href="img/icone.ico" />
        <link rel="stylesheet" href="CSS/custom-theme/jquery-ui-1.8.14.custom.css" type="text/css" />
        <link rel="stylesheet" href="CSS/painel.css" type="text/css" />
        <script type="text/javascript" src="JScript/jquery-1.6.2.js" ></script>
        <script type="text/javascript" src="JScript/jquery-ui-1.8.js" ></script>
        <script type="text/javascript" src="JScript/jquery.json-2.2.min.js" ></script>
        <script type="text/javascript" src="JScript/utils.js"> </script>
        <script type="text/javascript" src="JScript/painel.js"> </script>
    </head>
    <body class="ui-widget">
        <a href="pages/painel/" ><?php echo $utils->i18n("default.dashboard"); ?></a>
    </body>
</html>