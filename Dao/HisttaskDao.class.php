<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:29
*/


class HisttaskDao extends CrudDaoImp {

	public function getColumns() {
		return $array = @array('his_id' => (integer)$this->getDto()->his_id, 
			'his_usr_id' => $this->getDto()->his_usr_id, 
			'his_tas_id' => $this->getDto()->his_tas_id, 
			'his_sub_id' => $this->getDto()->his_sub_id, 
			'his_flo_id' => $this->getDto()->his_flo_id, 
			'his_org_id' => $this->getDto()->his_org_id, 
			'his_date' => $this->getDto()->his_date, 
			'his_time' => $this->getDto()->his_time);
	}

	public function getTable() {
		return 'HISTTASK';
	}

	public function setDto($obj) {
		$this->dto = $obj; 
	}

	public function getDto() {
		return $this->dto;
	}

}
?>