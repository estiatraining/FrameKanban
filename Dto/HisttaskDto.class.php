<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:29
*/
class Histtask {

	private $his_id;
	private $his_usr_id;
	private $his_tas_id;
	private $his_sub_id;
	private $his_flo_id;
	private $his_org_id;
	private $his_date;
	private $his_time;

	public function getHisId(){
		return $this->his_id;
	}
	public function setHisId( $his_id ){
		$this->his_id = $his_id;
	}

	public function getHisUsrId(){
		return $this->his_usr_id;
	}
	public function setHisUsrId( $his_usr_id ){
		$this->his_usr_id = $his_usr_id;
	}

	public function getHisTasId(){
		return $this->his_tas_id;
	}
	public function setHisTasId( $his_tas_id ){
		$this->his_tas_id = $his_tas_id;
	}

	public function getHisSubId(){
		return $this->his_sub_id;
	}
	public function setHisSubId( $his_sub_id ){
		$this->his_sub_id = $his_sub_id;
	}

	public function getHisFloId(){
		return $this->his_flo_id;
	}
	public function setHisFloId( $his_flo_id ){
		$this->his_flo_id = $his_flo_id;
	}

	public function getHisOrgId(){
		return $this->his_org_id;
	}
	public function setHisOrgId( $his_org_id ){
		$this->his_org_id = $his_org_id;
	}

	public function getHisDate(){
		return $this->his_date;
	}
	public function setHisDate( $his_date ){
		$this->his_date = $his_date;
	}

	public function getHisTime(){
		return $this->his_time;
	}
	public function setHisTime( $his_time ){
		$this->his_time = $his_time;
	}

}
?>