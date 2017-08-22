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
class SqlInsert extends SqlInstruction {

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
        try {
            $columns = implode(', ', array_keys($this->columValues));
            $values = implode(', ', array_values($this->columValues));
            $this->sql = "INSERTs INTO " . $this->tabela . " ( " . $columns . " ) VALUES ( " . $values . " );";
            return $this->sql;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage() . " - Delete - SQL com problemas: " . $sql, $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

}

?>
