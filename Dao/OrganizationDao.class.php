<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:38
*/


class OrganizationDao extends CrudDaoImp {

	public function getColumns() {
		return $array = @array('org_id' => (integer)$this->getDto()->org_id, 
			'org_name' => $this->getDto()->org_name, 
			'org_dateini' => $this->getDto()->org_dateini, 
			'org_datefim' => $this->getDto()->org_datefim);
	}

	public function getTable() {
		return 'ORGANIZATION';
	}

	public function setDto($obj) {
		$this->dto = $obj; 
	}

	public function getDto() {
		return $this->dto;
	}

}
?>