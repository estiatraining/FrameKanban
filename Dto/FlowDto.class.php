<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:41:24
*/
class Flow {

	private $flo_id;
	private $flo_pro_id;
	private $flo_org_id;
	private $flo_name;
	private $flo_ordem;
	private $flo_dateini;
	private $flo_datefim;

	public function getFloId(){
		return $this->flo_id;
	}
	public function setFloId( $flo_id ){
		$this->flo_id = $flo_id;
	}

	public function getFloProId(){
		return $this->flo_pro_id;
	}
	public function setFloProId( $flo_pro_id ){
		$this->flo_pro_id = $flo_pro_id;
	}

	public function getFloOrgId(){
		return $this->flo_org_id;
	}
	public function setFloOrgId( $flo_org_id ){
		$this->flo_org_id = $flo_org_id;
	}

	public function getFloName(){
		return $this->flo_name;
	}
	public function setFloName( $flo_name ){
		$this->flo_name = $flo_name;
	}

	public function getFloOrdem(){
		return $this->flo_ordem;
	}
	public function setFloOrdem( $flo_ordem ){
		$this->flo_ordem = $flo_ordem;
	}

	public function getFloDateini(){
		return $this->flo_dateini;
	}
	public function setFloDateini( $flo_dateini ){
		$this->flo_dateini = $flo_dateini;
	}

	public function getFloDatefim(){
		return $this->flo_datefim;
	}
	public function setFloDatefim( $flo_datefim ){
		$this->flo_datefim = $flo_datefim;
	}

}
?>