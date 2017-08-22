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
        <link rel="shortcut icon" href="../../img/icone.ico" />
        <link rel="stylesheet" href="../../CSS/custom-theme/jquery-ui-1.8.14.custom.css" type="text/css" />
        <link rel="stylesheet" href="../../CSS/painel.css" type="text/css" />
        <script type="text/javascript" src="../../JScript/jquery-1.6.2.js" ></script>
        <script type="text/javascript" src="../../JScript/jquery-ui-1.8.js" ></script>
        <script type="text/javascript" src="../../JScript/jquery.json-2.2.min.js" ></script>
        <script type="text/javascript" src="../../JScript/utils.js"> </script>
        <script type="text/javascript" src="../../JScript/painel.js"> </script>
    </head>
    <body class="ui-widget">
        <div id="estrutura" data-corner="10px" class="ui-widget" style="">
            <div id="top" class="ui-widget" >
                <img border="0" src="../../IMG/logo.png" height="70" />
                <h2><?php echo $utils->i18n("default.title"); ?></h2>
                <label><input type="button" onclick="eventDash();" class="botao" name="dashboard" id="dashboard" value="<?php echo $utils->i18n("default.dashboard"); ?>" title="<?php echo $utils->i18n("default.dashboard"); ?>" /></label>
                <label><input type="button" onclick="eventOrg();" class="botao" name="org" id="org" value="<?php echo $utils->i18n("default.org"); ?>" title="<?php echo $utils->i18n("index.org"); ?>" /></label>
                <label><input type="button" onclick="eventProj();" class="botao" name="proj" id="proj" value="<?php echo $utils->i18n("default.proj"); ?>" title="<?php echo $utils->i18n("index.proj"); ?>" /></label>
            </div>
            <div id="body" class="ui-widget">
                <form name="formulario" action="index.php" >
                    <div id="dialogOrg" class="dialog" title="<?php echo $utils->i18n("index.org"); ?>">
                        <p id="contDialogOrg"></p>
                    </div>
                </form>
            </div>
            <div id="footer" class="ui-widget">
            </div>
        </div>
    </body>
</html>