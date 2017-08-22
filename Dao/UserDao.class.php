<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:45:30
*/


class UserDao extends CrudDaoImp {

	public function getColumns() {
		return $array = @array('usr_id' => (integer)$this->getDto()->usr_id, 
			'usr_org_id' => $this->getDto()->usr_org_id, 
			'usr_name' => $this->getDto()->usr_name, 
			'usr_login' => $this->getDto()->usr_login, 
			'usr_pass' => $this->getDto()->usr_pass, 
			'usr_dateini' => $this->getDto()->usr_dateini, 
			'usr_datefim' => $this->getDto()->usr_datefim, 
			'usr_email' => $this->getDto()->usr_email, 
			'usr_type' => $this->getDto()->usr_type);
	}

	public function getTable() {
		return 'USER';
	}

	public function setDto($obj) {
		$this->dto = $obj; 
	}

	public function getDto() {
		return $this->dto;
	}

}
?>