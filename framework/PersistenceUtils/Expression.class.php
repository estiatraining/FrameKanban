<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Expression
 *
 * @author Destroyer
 */
abstract class Expression {
    const AND_OPERATOR = ' AND ';
    const OR_OPERATOR = ' OR ';
    const WHERE_OPERATOR = ' WHERE ';
    abstract public function retorno();
}
?>
