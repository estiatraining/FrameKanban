<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:41:24
*/


class FlowAction extends CrudActionImp {

	public function __construct() {
		$utils = new Utilitarios();
		$request = $_REQUEST;
		$this->setDto($utils->getBean($request, $this->getPropertiesDto()));
	}

	public function getPropertiesDto() {
		return $array = array('flo_id', 'flo_pro_id', 'flo_org_id', 'flo_name', 'flo_ordem', 'flo_dateini', 'flo_datefim');
	}

	public function getService() {
		return new FlowService();
	}

	public function setDto($obj) {
		$this->Dto = $obj; 
	}

	public function getDto() {
		return $this->Dto;
	}

}
?>