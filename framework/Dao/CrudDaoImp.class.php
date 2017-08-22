<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CrudDao
 *
 * @author Cleison Ferreira
 */
abstract class CrudDaoImp extends UtilsDB implements CrudDao {

    protected $dto = "";

    public function create($obj) {
        $logs = new Logs();
        try {
            $this->setDto($obj);
            $bean = $this->getDto();
            $tabela = $this->getTable();
            $colunas = $this->getColumns();
            $bean = $this->executeInsert($tabela, $colunas, $bean);
            $this->closeConn();
            return $bean;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function delete($obj) {
        $logs = new Logs();
        try {
            $this->setDto($obj);
            $bean = $this->getDto();
            $tabela = $this->getTable();
            $colunas = $this->getColumns();
            $bean = $obj;
            return $this->executeDelete($tabela, $colunas);
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function restore($obj) {
        $logs = new Logs();
        try {
            $this->setDto($obj);
            $bean = $this->getDto();
            $tabela = $this->getTable();
            $colunas = $this->getColumns();
            $bean = $obj;
            $bean = $this->executeRestore($tabela, $colunas);
            $this->closeConn();
            return $bean;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function select($obj, $campos = "*") {
        $logs = new Logs();
        try {
            $this->setDto($obj);
            $bean = $this->getDto();
            $tabela = $this->getTable();
            $colunas = $this->getColumns();
            $bean = $obj;
            $bean = $this->executeSelect($tabela, $campos = "*");
            $this->closeConn();
            return $bean;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function update($obj) {
        $logs = new Logs();
        try {
            $this->setDto($obj);
            $bean = $this->getDto();
            $tabela = $this->getTable();
            $colunas = $this->getColumns();
            $bean = $obj;
            $bean = $this->executeUpdate($tabela, $colunas);
            $this->closeConn();
            return $bean;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public abstract function getDto();

    public abstract function setDto($obj);

    public abstract function getTable();

    public abstract function getColumns();
}

?>
