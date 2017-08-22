<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:45:10
*/


class TaskAction extends CrudActionImp {

	public function __construct() {
		$utils = new Utilitarios();
		$request = $_REQUEST;
		$this->setDto($utils->getBean($request, $this->getPropertiesDto()));
	}

	public function getPropertiesDto() {
		return $array = array('tas_id', 'tas_sub_id', 'tas_cas_id', 'tas_usr_id', 'tas_org_id', 'tas_name', 'tas_dateini', 'tas_datefim', 'tas_ordem', 'tas_desc', 'tas_type', 'tas_problem', 'tas_urgent', 'tas_color');
	}

	public function getService() {
		return new TaskService();
	}

	public function setDto($obj) {
		$this->Dto = $obj; 
	}

	public function getDto() {
		return $this->Dto;
	}

}
?>