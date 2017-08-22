<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:38
*/
class Organization {

	private $org_id;
	private $org_name;
	private $org_dateini;
	private $org_datefim;

	public function getOrgId(){
		return $this->org_id;
	}
	public function setOrgId( $org_id ){
		$this->org_id = $org_id;
	}

	public function getOrgName(){
		return $this->org_name;
	}
	public function setOrgName( $org_name ){
		$this->org_name = $org_name;
	}

	public function getOrgDateini(){
		return $this->org_dateini;
	}
	public function setOrgDateini( $org_dateini ){
		$this->org_dateini = $org_dateini;
	}

	public function getOrgDatefim(){
		return $this->org_datefim;
	}
	public function setOrgDatefim( $org_datefim ){
		$this->org_datefim = $org_datefim;
	}

}
?>