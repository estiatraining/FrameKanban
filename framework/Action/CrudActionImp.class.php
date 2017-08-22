<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CrudAction
 *
 * @author Cleison Ferreira
 */
abstract class CrudActionImp implements CrudAction {

    protected $Dto;
    protected $Service;

    public abstract function getService();

    public abstract function getDto();
    
    public abstract function setDto($obj);

    public abstract function getPropertiesDto();

    public function save() {
        $logs = new Logs();
        try {
            $action = true;
            $action = $this->getService()->save($this->getDto());
            if(!$action){
                $_REQUEST['msgError'] = 'Erro: Não foi possível gravar!';
                $action = false;
            }
            return $action;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function update() {
        $logs = new Logs();
        try {
            $action = true;
            $action = $this->getService()->update($this->getDto());
            if(!$action){
                $_REQUEST['msgError'] = 'Erro: Não foi possível atualizar!';
                $action = false;
            }  
            return $action;
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function load() {
        $logs = new Logs();
        try { 
            $action = true;
            $action = $this->getService()->load($this->getDto());
            if(!$action){
                $_REQUEST['msgError'] = 'Erro: Não foi possível trazer os dados!';
                $action = false;
            }  
            return $action;            
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function restore() {
        $logs = new Logs();
        try {
            $action = true;
            $action = $this->getService()->restore($this->getDto());
            if(!$action){
                $_REQUEST['msgError'] = 'Erro: Não foi possível restaurar os dados!';
                $action = false;
            }  
            return $action;              
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

    public function delete() {
        $logs = new Logs();
        try {
            $action = true;
            $action = $this->getService()->delete($this->getDto());
            if(!$action){
                $_REQUEST['msgError'] = 'Erro: Não foi possível deletar!';
                $action = false;
            }  
            return $action;              
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }
}
?>
