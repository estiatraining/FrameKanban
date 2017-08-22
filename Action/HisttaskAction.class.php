<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:29
*/


class HisttaskAction extends CrudActionImp {

	public function __construct() {
		$utils = new Utilitarios();
		$request = $_REQUEST;
		$this->setDto($utils->getBean($request, $this->getPropertiesDto()));
	}

	public function getPropertiesDto() {
		return $array = array('his_id', 'his_usr_id', 'his_tas_id', 'his_sub_id', 'his_flo_id', 'his_org_id', 'his_date', 'his_time');
	}

	public function getService() {
		return new HisttaskService();
	}

	public function setDto($obj) {
		$this->Dto = $obj; 
	}

	public function getDto() {
		return $this->Dto;
	}

}
?>