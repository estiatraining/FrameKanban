<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:45:52
*/
class Usrproject {

	private $usp_id;
	private $usp_usr_id;
	private $usp_pro_id;
	private $usp_dateini;
	private $usp_datefim;

	public function getUspId(){
		return $this->usp_id;
	}
	public function setUspId( $usp_id ){
		$this->usp_id = $usp_id;
	}

	public function getUspUsrId(){
		return $this->usp_usr_id;
	}
	public function setUspUsrId( $usp_usr_id ){
		$this->usp_usr_id = $usp_usr_id;
	}

	public function getUspProId(){
		return $this->usp_pro_id;
	}
	public function setUspProId( $usp_pro_id ){
		$this->usp_pro_id = $usp_pro_id;
	}

	public function getUspDateini(){
		return $this->usp_dateini;
	}
	public function setUspDateini( $usp_dateini ){
		$this->usp_dateini = $usp_dateini;
	}

	public function getUspDatefim(){
		return $this->usp_datefim;
	}
	public function setUspDatefim( $usp_datefim ){
		$this->usp_datefim = $usp_datefim;
	}

}
?>