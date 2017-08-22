<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SqlInsert
 *
 * @author Destroyer
 */
class SqlDelete extends SqlInstruction {

    public function getInstruction() {
        $logs = new Logs();
        $criteria = '';
        try {
            if ($this->criteria) {
                $criteria = $this->criteria->retorno();
            }
            $this->sql = "DELETE FROM " . $this->tabela . " " . $criteria;
            return $this->sql;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage() . " - Delete - SQL com problemas: " . $sql, $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

}

?>
