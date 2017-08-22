<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:18
*/
class Caseuse {

	private $cas_id;
	private $cas_usr_id;
	private $cas_org_id;
	private $cas_name;
	private $cas_dateini;
	private $cas_datefim;
	private $cas_desc;
	private $cas_validate;

	public function getCasId(){
		return $this->cas_id;
	}
	public function setCasId( $cas_id ){
		$this->cas_id = $cas_id;
	}

	public function getCasUsrId(){
		return $this->cas_usr_id;
	}
	public function setCasUsrId( $cas_usr_id ){
		$this->cas_usr_id = $cas_usr_id;
	}

	public function getCasOrgId(){
		return $this->cas_org_id;
	}
	public function setCasOrgId( $cas_org_id ){
		$this->cas_org_id = $cas_org_id;
	}

	public function getCasName(){
		return $this->cas_name;
	}
	public function setCasName( $cas_name ){
		$this->cas_name = $cas_name;
	}

	public function getCasDateini(){
		return $this->cas_dateini;
	}
	public function setCasDateini( $cas_dateini ){
		$this->cas_dateini = $cas_dateini;
	}

	public function getCasDatefim(){
		return $this->cas_datefim;
	}
	public function setCasDatefim( $cas_datefim ){
		$this->cas_datefim = $cas_datefim;
	}

	public function getCasDesc(){
		return $this->cas_desc;
	}
	public function setCasDesc( $cas_desc ){
		$this->cas_desc = $cas_desc;
	}

	public function getCasValidate(){
		return $this->cas_validate;
	}
	public function setCasValidate( $cas_validate ){
		$this->cas_validate = $cas_validate;
	}

}
?>