<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:18
*/


class CaseuseDao extends CrudDaoImp {

	public function getColumns() {
		return $array = @array('cas_id' => (integer)$this->getDto()->cas_id, 
			'cas_usr_id' => $this->getDto()->cas_usr_id, 
			'cas_org_id' => $this->getDto()->cas_org_id, 
			'cas_name' => $this->getDto()->cas_name, 
			'cas_dateini' => $this->getDto()->cas_dateini, 
			'cas_datefim' => $this->getDto()->cas_datefim, 
			'cas_desc' => $this->getDto()->cas_desc, 
			'cas_validate' => $this->getDto()->cas_validate);
	}

	public function getTable() {
		return 'CASEUSE';
	}

	public function setDto($obj) {
		$this->dto = $obj; 
	}

	public function getDto() {
		return $this->dto;
	}

}
?>