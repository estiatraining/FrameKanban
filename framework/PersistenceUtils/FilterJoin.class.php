<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FilterJoin
 *
 * @author Destroyer
 */
class FilterJoin extends Expression {

    private $joinTipo;
    private $joinOperadores;
    private $joinTabela;
    private $joinAttInterno;
    private $joinAttExterno;

    public function __construct($joinTabela, $joinAttInterno, $joinAttExterno, $joinTipo = " INNER JOIN ", $joinOperadores = " = ") {
        $this->joinTabela = $joinTabela;
        $this->joinAttInterno = $joinAttInterno;
        $this->joinAttExterno = $joinAttExterno;
        $this->joinTipo = $joinTipo;
        $this->joinOperadores = $joinOperadores;
    }

    public function retorno() {
        return "{$this->joinTipo} {$this->joinTabela} ON {$this->joinAttInterno} {$this->joinOperadores} {$this->joinAttExterno}";
    }

}

?>
