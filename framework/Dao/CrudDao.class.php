<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Cleison Ferreira
 */
interface CrudDao {
    public function create($obj);
    public function update($obj);
    public function delete($obj);
    public function restore($obj);
    public function select($obj, $campos = "*");
}
?>
