<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:46
*/


class ProjectAction extends CrudActionImp {

	public function __construct() {
		$utils = new Utilitarios();
		$request = $_REQUEST;
		$this->setDto($utils->getBean($request, $this->getPropertiesDto()));
	}

	public function getPropertiesDto() {
		return $array = array('pro_id', 'pro_org_id', 'pro_name', 'pro_dateini', 'pro_datefim', 'pro_type', 'pro_private', 'pro_desc');
	}

	public function getService() {
		return new ProjectService();
	}

	public function setDto($obj) {
		$this->Dto = $obj; 
	}

	public function getDto() {
		return $this->Dto;
	}

}
?>