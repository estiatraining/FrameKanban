<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:45:30
*/
class User {

	private $usr_id;
	private $usr_org_id;
	private $usr_name;
	private $usr_login;
	private $usr_pass;
	private $usr_dateini;
	private $usr_datefim;
	private $usr_email;
	private $usr_type;

	public function getUsrId(){
		return $this->usr_id;
	}
	public function setUsrId( $usr_id ){
		$this->usr_id = $usr_id;
	}

	public function getUsrOrgId(){
		return $this->usr_org_id;
	}
	public function setUsrOrgId( $usr_org_id ){
		$this->usr_org_id = $usr_org_id;
	}

	public function getUsrName(){
		return $this->usr_name;
	}
	public function setUsrName( $usr_name ){
		$this->usr_name = $usr_name;
	}

	public function getUsrLogin(){
		return $this->usr_login;
	}
	public function setUsrLogin( $usr_login ){
		$this->usr_login = $usr_login;
	}

	public function getUsrPass(){
		return $this->usr_pass;
	}
	public function setUsrPass( $usr_pass ){
		$this->usr_pass = $usr_pass;
	}

	public function getUsrDateini(){
		return $this->usr_dateini;
	}
	public function setUsrDateini( $usr_dateini ){
		$this->usr_dateini = $usr_dateini;
	}

	public function getUsrDatefim(){
		return $this->usr_datefim;
	}
	public function setUsrDatefim( $usr_datefim ){
		$this->usr_datefim = $usr_datefim;
	}

	public function getUsrEmail(){
		return $this->usr_email;
	}
	public function setUsrEmail( $usr_email ){
		$this->usr_email = $usr_email;
	}

	public function getUsrType(){
		return $this->usr_type;
	}
	public function setUsrType( $usr_type ){
		$this->usr_type = $usr_type;
	}

}
?>