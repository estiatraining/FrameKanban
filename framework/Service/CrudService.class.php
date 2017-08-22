<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Destroyer
 */
interface CrudService {
    public function load($obj);

    public function save($obj);

    public function delete($obj);

    public function restore($obj);

    public function update($obj);
}

?>
