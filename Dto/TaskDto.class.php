<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:45:10
*/
class Task {

	private $tas_id;
	private $tas_sub_id;
	private $tas_cas_id;
	private $tas_usr_id;
	private $tas_org_id;
	private $tas_name;
	private $tas_dateini;
	private $tas_datefim;
	private $tas_ordem;
	private $tas_desc;
	private $tas_type;
	private $tas_problem;
	private $tas_urgent;
	private $tas_color;

	public function getTasId(){
		return $this->tas_id;
	}
	public function setTasId( $tas_id ){
		$this->tas_id = $tas_id;
	}

	public function getTasSubId(){
		return $this->tas_sub_id;
	}
	public function setTasSubId( $tas_sub_id ){
		$this->tas_sub_id = $tas_sub_id;
	}

	public function getTasCasId(){
		return $this->tas_cas_id;
	}
	public function setTasCasId( $tas_cas_id ){
		$this->tas_cas_id = $tas_cas_id;
	}

	public function getTasUsrId(){
		return $this->tas_usr_id;
	}
	public function setTasUsrId( $tas_usr_id ){
		$this->tas_usr_id = $tas_usr_id;
	}

	public function getTasOrgId(){
		return $this->tas_org_id;
	}
	public function setTasOrgId( $tas_org_id ){
		$this->tas_org_id = $tas_org_id;
	}

	public function getTasName(){
		return $this->tas_name;
	}
	public function setTasName( $tas_name ){
		$this->tas_name = $tas_name;
	}

	public function getTasDateini(){
		return $this->tas_dateini;
	}
	public function setTasDateini( $tas_dateini ){
		$this->tas_dateini = $tas_dateini;
	}

	public function getTasDatefim(){
		return $this->tas_datefim;
	}
	public function setTasDatefim( $tas_datefim ){
		$this->tas_datefim = $tas_datefim;
	}

	public function getTasOrdem(){
		return $this->tas_ordem;
	}
	public function setTasOrdem( $tas_ordem ){
		$this->tas_ordem = $tas_ordem;
	}

	public function getTasDesc(){
		return $this->tas_desc;
	}
	public function setTasDesc( $tas_desc ){
		$this->tas_desc = $tas_desc;
	}

	public function getTasType(){
		return $this->tas_type;
	}
	public function setTasType( $tas_type ){
		$this->tas_type = $tas_type;
	}

	public function getTasProblem(){
		return $this->tas_problem;
	}
	public function setTasProblem( $tas_problem ){
		$this->tas_problem = $tas_problem;
	}

	public function getTasUrgent(){
		return $this->tas_urgent;
	}
	public function setTasUrgent( $tas_urgent ){
		$this->tas_urgent = $tas_urgent;
	}

	public function getTasColor(){
		return $this->tas_color;
	}
	public function setTasColor( $tas_color ){
		$this->tas_color = $tas_color;
	}

}
?>