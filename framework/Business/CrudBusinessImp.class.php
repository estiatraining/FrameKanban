<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Business
 *
 * @author Destroyer
 */
abstract class CrudBusinessImp implements CrudBusiness {

    public abstract function getService();

    public abstract function getDao();

    public function validCreate($obj) {
        return true;
    }

    public function validDelete($obj) {
        return true;
    }

    public function validRestore($obj) {
        return true;
    }

    public function validSelect($obj) {
        return true;
    }

    public function validUpdate($obj) {
        return true;
    }

}

?>
