<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:46
*/


class ProjectDao extends CrudDaoImp {

	public function getColumns() {
		return $array = @array('pro_id' => (integer)$this->getDto()->pro_id, 
			'pro_org_id' => $this->getDto()->pro_org_id, 
			'pro_name' => $this->getDto()->pro_name, 
			'pro_dateini' => $this->getDto()->pro_dateini, 
			'pro_datefim' => $this->getDto()->pro_datefim, 
			'pro_type' => $this->getDto()->pro_type, 
			'pro_private' => $this->getDto()->pro_private, 
			'pro_desc' => $this->getDto()->pro_desc);
	}

	public function getTable() {
		return 'PROJECT';
	}

	public function setDto($obj) {
		$this->dto = $obj; 
	}

	public function getDto() {
		return $this->dto;
	}

}
?>