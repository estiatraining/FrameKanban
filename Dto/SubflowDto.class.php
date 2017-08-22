<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:56
*/
class Subflow {

	private $sub_id;
	private $sub_flo_id;
	private $sub_org_id;
	private $sub_name;
	private $sub_dateini;
	private $sub_datefim;
	private $sub_ordem;
	private $sub_limite;

	public function getSubId(){
		return $this->sub_id;
	}
	public function setSubId( $sub_id ){
		$this->sub_id = $sub_id;
	}

	public function getSubFloId(){
		return $this->sub_flo_id;
	}
	public function setSubFloId( $sub_flo_id ){
		$this->sub_flo_id = $sub_flo_id;
	}

	public function getSubOrgId(){
		return $this->sub_org_id;
	}
	public function setSubOrgId( $sub_org_id ){
		$this->sub_org_id = $sub_org_id;
	}

	public function getSubName(){
		return $this->sub_name;
	}
	public function setSubName( $sub_name ){
		$this->sub_name = $sub_name;
	}

	public function getSubDateini(){
		return $this->sub_dateini;
	}
	public function setSubDateini( $sub_dateini ){
		$this->sub_dateini = $sub_dateini;
	}

	public function getSubDatefim(){
		return $this->sub_datefim;
	}
	public function setSubDatefim( $sub_datefim ){
		$this->sub_datefim = $sub_datefim;
	}

	public function getSubOrdem(){
		return $this->sub_ordem;
	}
	public function setSubOrdem( $sub_ordem ){
		$this->sub_ordem = $sub_ordem;
	}

	public function getSubLimite(){
		return $this->sub_limite;
	}
	public function setSubLimite( $sub_limite ){
		$this->sub_limite = $sub_limite;
	}

}
?>