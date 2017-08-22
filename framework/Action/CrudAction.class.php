<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Cleison Ferreira
 */
interface CrudAction {
    public function load();

    public function save();

    public function delete();

    public function restore();

    public function update();
}

?>
