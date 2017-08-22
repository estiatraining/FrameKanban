<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:45:10
*/


class TaskDao extends CrudDaoImp {

	public function getColumns() {
		return $array = @array('tas_id' => (integer)$this->getDto()->tas_id, 
			'tas_sub_id' => $this->getDto()->tas_sub_id, 
			'tas_cas_id' => $this->getDto()->tas_cas_id, 
			'tas_usr_id' => $this->getDto()->tas_usr_id, 
			'tas_org_id' => $this->getDto()->tas_org_id, 
			'tas_name' => $this->getDto()->tas_name, 
			'tas_dateini' => $this->getDto()->tas_dateini, 
			'tas_datefim' => $this->getDto()->tas_datefim, 
			'tas_ordem' => $this->getDto()->tas_ordem, 
			'tas_desc' => $this->getDto()->tas_desc, 
			'tas_type' => $this->getDto()->tas_type, 
			'tas_problem' => $this->getDto()->tas_problem, 
			'tas_urgent' => $this->getDto()->tas_urgent, 
			'tas_color' => $this->getDto()->tas_color);
	}

	public function getTable() {
		return 'TASK';
	}

	public function setDto($obj) {
		$this->dto = $obj; 
	}

	public function getDto() {
		return $this->dto;
	}

}
?>