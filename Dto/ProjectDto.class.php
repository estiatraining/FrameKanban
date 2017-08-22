<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:46
*/
class Project {

	private $pro_id;
	private $pro_org_id;
	private $pro_name;
	private $pro_dateini;
	private $pro_datefim;
	private $pro_type;
	private $pro_private;
	private $pro_desc;

	public function getProId(){
		return $this->pro_id;
	}
	public function setProId( $pro_id ){
		$this->pro_id = $pro_id;
	}

	public function getProOrgId(){
		return $this->pro_org_id;
	}
	public function setProOrgId( $pro_org_id ){
		$this->pro_org_id = $pro_org_id;
	}

	public function getProName(){
		return $this->pro_name;
	}
	public function setProName( $pro_name ){
		$this->pro_name = $pro_name;
	}

	public function getProDateini(){
		return $this->pro_dateini;
	}
	public function setProDateini( $pro_dateini ){
		$this->pro_dateini = $pro_dateini;
	}

	public function getProDatefim(){
		return $this->pro_datefim;
	}
	public function setProDatefim( $pro_datefim ){
		$this->pro_datefim = $pro_datefim;
	}

	public function getProType(){
		return $this->pro_type;
	}
	public function setProType( $pro_type ){
		$this->pro_type = $pro_type;
	}

	public function getProPrivate(){
		return $this->pro_private;
	}
	public function setProPrivate( $pro_private ){
		$this->pro_private = $pro_private;
	}

	public function getProDesc(){
		return $this->pro_desc;
	}
	public function setProDesc( $pro_desc ){
		$this->pro_desc = $pro_desc;
	}

}
?>