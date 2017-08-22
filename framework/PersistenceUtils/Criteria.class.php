<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Criteria
 *
 * @author Destroyer
 */
class Criteria extends Expression {

    private $expressions;
    private $operators;
    private $properties;

    public function add(Expression $expression, $operator = self::WHERE_OPERATOR) {
        $this->expressions[] = $expression;
        $this->operators[] = $operator;
    }

    public function retorno() {
        $result = '';
        if (is_array($this->expressions)) {
            foreach ($this->expressions as $key => $expression) {
                $operator = $this->operators[$key];
                $result .= $operator . $expression->retorno() . ' ';
            }
            $result = trim($result);
            return $result;
        }
    }

    public function setProperty($property, $value) {
        $this->properties[$property] = $value;
    }

    public function getProperty($property) {
        return $this->properties[$property];
    }

}

?>
