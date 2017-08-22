<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UtilsDB
 *
 * @author Cleison Ferreira
 */
class UtilsDB extends Conn {

    private $sgbd;

    public function __construct() {
        $utils = new Utilitarios();
        $contexto = $utils->getContexto();
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $contexto . '/framework/sysConf/conf.ini')) {
            $dados = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/' . $contexto . '/framework/sysConf/conf.ini');
            $this->sgbd = $dados['sgbd'];
        }
    }

    public function executeDelete($tabela, $colunas) {
        $conn = $this->connect();
        $logs = new Logs();
        $result = false;
        $criteria = new Criteria();
        $sql = new SqlDelete();
        try {
            foreach ($colunas as $campo => $valor) {
                $valor;
                $criteria->add(new Filter($campo, ' = ', $valor));
                break;
            }
            $sql->setTabela($tabela);
            $sql->setCriteria($criteria);
            $result = $conn->Query($sql->getInstruction());
            if ($result) {
                $conn->commit();
                return true;
            }
            else{
                return false;
            }
        } catch (PDOException  $e) {
            $logs->escrever($e->getMessage() . " - Delete - SQL com problemas: " . $sql->getInstruction(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function executeRestore($tabela, $colunas) {
        $conn = $this->connect();
        $logs = new Logs();
        $result = null;
        $criteria = new Criteria();
        $sql = new SqlSelect();
        try {
            $sql->setTabela($tabela);
            foreach ($colunas as $campo => $valor) {
                $criteria->add(new Filter($campo, ' = ', $valor));
                break;
            }
            $criteria->setProperty('order', $campo);
            $sql->setCriteria($criteria);
            $query = $conn->prepare($sql->getInstruction());
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if ($result != null) {
                $conn->commit();
                return $result;
            } else {
                return null;
            }
        } catch (PDOException  $e) {
            $conn->rollBack();
            $logs->escrever($e->getMessage() . " - Restore - SQL com problemas: " . $sql->getInstruction(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function executeSelect($tabela) {
        $conn = $this->connect();
        $logs = new Logs();
        $result = null;
        $sql = new SqlSelect();
        try {
            $sql->setTabela($tabela);
            $query = $conn->prepare($sql->getInstruction());
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                $conn->commit();
                return $result;
            } else {
                return false;
            }
        } catch (PDOException  $e) {
            $conn->rollBack();
            $logs->escrever($e->getMessage() . " - Select - SQL com problemas: " . $sql->getInstruction(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function executeUpdate($tabela, $colunas) {
        $conn = $this->connect();
        $logs = new Logs();
        $result = null;
        $criteria = new Criteria();
        $sql = new SqlUpdate();
        try {
            $sql->setTabela($tabela);
            $i = 0;
            foreach ($colunas as $campo => $valor) {
                if ($i == 0) {
                    $criteria->add(new Filter($campo, ' = ', $valor));
                } else {
                    $sql->setRowData($campo, $valor);
                }
                $i++;
            }
            $sql->setCriteria($criteria);
            $query = $conn->prepare($sql->getInstruction());
            $result = $query->execute();
            if ($result) {
                $conn->commit();
                return $result;
            } else {
                return false;
            }
        } catch (PDOException  $e) {
            $conn->rollBack();
            $logs->escrever($e->getMessage() . " - Update - SQL com problemas: " . $sql->getInstruction(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function executeInsert($tabela, $colunas, $bean) {
        $logs = new Logs();
        $conn = $this->connect();
        $result = true;
        $criteria = new Criteria();
        $sql = new SqlInsert();
        try {
            $sql->setTabela($tabela);
            $i = 0;
            foreach ($colunas as $campo => $valor) {
                if ($i > 0) {
                    $sql->setRowData($campo, $valor);
                }
                $i++;
            }
            $sql->setCriteria($criteria);
            
            $query = $conn->prepare($sql->getInstruction());
            $result = $query->execute();  
            if ($result) {                
                $conn->commit();
                return $result;
            } else {
                //throw new Exception;
                return false;
            }
        } catch (PDOException $e) { 
            $conn->rollBack();
            $logs->escrever($e->getMessage() . " - SQL com problemas: " . $sql->getInstruction(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

}

?>
