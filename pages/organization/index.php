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
<html>
    <header>
        
    </header>
    <body>
        <form name="formulario" action="index.php">
            <div>
                <label>
                    
                </label>
            </div>
        </form>
    </body>
</html>