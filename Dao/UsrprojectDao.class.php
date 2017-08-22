<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:45:52
*/


class UsrprojectDao extends CrudDaoImp {

	public function getColumns() {
		return $array = @array('usp_id' => (integer)$this->getDto()->usp_id, 
			'usp_usr_id' => $this->getDto()->usp_usr_id, 
			'usp_pro_id' => $this->getDto()->usp_pro_id, 
			'usp_dateini' => $this->getDto()->usp_dateini, 
			'usp_datefim' => $this->getDto()->usp_datefim);
	}

	public function getTable() {
		return 'USRPROJECT';
	}

	public function setDto($obj) {
		$this->dto = $obj; 
	}

	public function getDto() {
		return $this->dto;
	}

}
?>