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
class SqlUpdate extends SqlInstruction {

    private $columValues;

    public function setRowData($colum, $value) {
        if (is_string($value)) {
            $value = addslashes($value);
            $this->columValues[$colum] = "'" . $value . "'";
        } else if (is_bool($value)) {
            $this->columValues[$colum] = $value ? 'TRUE' : 'FALSE';
        } else if (isset($value)) {
            $this->columValues[$colum] = $value;
        } else {
            $this->columValues[$colum] = "NULL";
        }
    }

    public function getInstruction() {
        $logs = new Logs();
        $set = '';
        $criteria = '';
        try {
            if ($this->columValues) {
                foreach ($this->columValues as $column => $value) {
                    $set[] = $column . " = " . $value;
                }
            }
            if ($this->criteria) {
                $criteria = $this->criteria->retorno();
            }
            $this->sql = "UPDATE " . $this->tabela . " SET " . implode(', ', $set) . " " . $criteria;
            return $this->sql;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage() . " - Delete - SQL com problemas: " . $sql, $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

}

?>
