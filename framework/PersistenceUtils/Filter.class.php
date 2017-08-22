<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Filter
 *
 * @author Destroyer
 */
class Filter extends Expression {

    private $variable;
    private $operator;
    private $value;

    public function __construct($variable, $operator, $value) {
        $this->variable = $variable;
        $this->operator = $operator;
        $this->value = $this->transform($value);
    }

    public function transform($value) {
        if (is_array($value)) {
            foreach ($value as $x) {
                if (is_integer($x)) {
                    $dado[] = $x;
                } else if (is_string($x)) {
                    $dado[] = "'" . $x . "'";
                } else if (is_bool($x)) {
                    $dado[] = $x ? 'TRUE' : 'FALSE';
                }
            }
            $result = ' ( ' . implode(', ', $dado) . ' ) ';
        } else if (is_integer($value)) {
            $result = $value;
        } else if (is_string($value)) {
            $result = "'" . $value . "'";
        } else if (is_null($value)) {
            $result = 'NULL';
        } else if (is_bool($value)) {
            $result = $value ? 'TRUE' : 'FALSE';
        } else {
            $result = $value;
        }
        return $result;
    }

    public function retorno() {
        return "{$this->variable} {$this->operator} {$this->value}";
    }

}

?>
