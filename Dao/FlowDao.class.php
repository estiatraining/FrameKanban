<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:41:24
*/


class FlowDao extends CrudDaoImp {

	public function getColumns() {
		return $array = @array('flo_id' => (integer)$this->getDto()->flo_id, 
			'flo_pro_id' => $this->getDto()->flo_pro_id, 
			'flo_org_id' => $this->getDto()->flo_org_id, 
			'flo_name' => $this->getDto()->flo_name, 
			'flo_ordem' => $this->getDto()->flo_ordem, 
			'flo_dateini' => $this->getDto()->flo_dateini, 
			'flo_datefim' => $this->getDto()->flo_datefim);
	}

	public function getTable() {
		return 'FLOW';
	}

	public function setDto($obj) {
		$this->dto = $obj; 
	}

	public function getDto() {
		return $this->dto;
	}

}
?>