<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Destroyer
 */
interface CrudBusiness {
    public function validCreate($obj);

    public function validUpdate($obj);

    public function validDelete($obj);

    public function validRestore($obj);

    public function validSelect($obj);
}

?>
