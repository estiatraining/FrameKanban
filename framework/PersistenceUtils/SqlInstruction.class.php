<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SqlInstruction
 *
 * @author Destroyer
 */
abstract class SqlInstruction {

    protected $sql;
    protected $criteria;
    protected $criteriaJoin;
    protected $tabela;

    final public function setTabela($tabela) {
        $this->tabela = $tabela;
    }

    final public function getTabela() {
        return $this->tabela;
    }

    public function setCriteria(Criteria $criteria) {
        $this->criteria = $criteria;
    }

    public function getCriteria() {
        return $this->criteria;
    }
    
    public function setCriteriaJoin(CriteriaJoin $criteriaJoin) {
        $this->criteriaJoin = $criteriaJoin;
    }

    public function getCriteriaJoin() {
        return $this->criteriaJoin;
    }    

    abstract function getInstruction();
}

?>
