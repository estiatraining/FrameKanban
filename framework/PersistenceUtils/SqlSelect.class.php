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
class SqlSelect extends SqlInstruction {

    private $columns;

    public function addColumn($colum) {
        $this->columns[] = $colum;
    }

    public function getInstruction() {
        $logs = new Logs();
        $colum = '*';
        $criteria = '';
        $order = '';
        $limit = '';
        $offset = '';
        $join = '';
        try {
            if ($this->columns) {
                $colum = implode(', ', $this->columns);
            }
            if ($this->criteria) {
                $criteria = $this->criteria->retorno();
                @$order = $this->criteria->getProperty('order');
                @$limit = $this->criteria->getProperty('limit');
                @$offset = $this->criteria->getProperty('offset');
                if ($order != '' AND $order != NULL) {
                    $order = ' ORDER BY ' . $order;
                }
                if ($limit != '' AND $limit != NULL) {
                    $limit = ' LIMIT ' . $limit;
                }
                if ($offset != '' AND $offset != NULL) {
                    $offset = ' OFFSET ' . $offset;
                }
            }
            if ($this->criteriaJoin) {
                $join = $this->criteriaJoin->retorno();
            }
            $this->sql = "SELECT " . $colum . " FROM " . $this->tabela . " " . $join . " " . $criteria . $order . $limit . $offset;
            return $this->sql;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage() . " - Delete - SQL com problemas: " . $sql, $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

}

?>
