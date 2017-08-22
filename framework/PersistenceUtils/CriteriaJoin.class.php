<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CriteriaJoin
 *
 * @author Destroyer
 */
class CriteriaJoin extends Expression {

    private $expressions;
    private $operators;

    public function add(Expression $expression, $operator = self::AND_OPERATOR) {
        if (empty($this->expressions)) {
            unset($operator);
        }
        $this->expressions[] = $expression;
        $this->operators[] = $operator;
    }

    public function retorno() {
        if (is_array($this->expressions)) {
            foreach ($this->expressions as $key => $expression) {
                $operator = $this->operators[$key];
                $result .= $operator . $expression->retorno() . ' ';
            }
            $result = trim($result);
            return "({$result})";
        }
    }

}

?>
