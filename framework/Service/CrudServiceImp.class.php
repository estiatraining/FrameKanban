<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CrudServiceImp
 *
 * @author Destroyer
 */
abstract class CrudServiceImp implements CrudService {

    protected $Dao;
    
    public abstract function getBusiness();

    public abstract function getDao();

    public function save($obj) {
        $logs = new Logs();
        try {
            $valida = false;
            $valida = $this->getBusiness()->validCreate($obj);
            if ($valida)
                return $this->getDao()->create($obj);
            else
                return false;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function update($obj) {
        $logs = new Logs();
        try {
            $valida = false;
            $valida = $this->getBusiness()->validUpdate($obj);
            if ($valida)
                return $this->getDao()->update($obj);
            else
                return false;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function load($obj) {
        $logs = new Logs();
        try {
            $valida = false;
            $valida = $this->getBusiness()->validSelect($obj);
            if ($valida)
                return $this->getDao()->select($obj);
            else
                return false;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function restore($obj) {
        $logs = new Logs();
        try {
            $valida = false;
            $valida = $this->getBusiness()->validRestore($obj);
            if ($valida)
                return $this->getDao()->restore($obj);
            else
                return false;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function delete($obj) {
        $logs = new Logs();
        try {
            $valida = false;
            $valida = $this->getBusiness()->validDelete($obj);
            if ($valida)
                return $this->getDao()->delete($obj);
            else
                return false;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

}

?>
