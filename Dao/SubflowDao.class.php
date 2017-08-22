<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:56
*/


class SubflowDao extends CrudDaoImp {

	public function getColumns() {
		return $array = @array('sub_id' => (integer)$this->getDto()->sub_id, 
			'sub_flo_id' => $this->getDto()->sub_flo_id, 
			'sub_org_id' => $this->getDto()->sub_org_id, 
			'sub_name' => $this->getDto()->sub_name, 
			'sub_dateini' => $this->getDto()->sub_dateini, 
			'sub_datefim' => $this->getDto()->sub_datefim, 
			'sub_ordem' => $this->getDto()->sub_ordem, 
			'sub_limite' => $this->getDto()->sub_limite);
	}

	public function getTable() {
		return 'SUBFLOW';
	}

	public function setDto($obj) {
		$this->dto = $obj; 
	}

	public function getDto() {
		return $this->dto;
	}

}
?>