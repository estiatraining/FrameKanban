<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:29
*/


class HisttaskService extends CrudServiceImp {

	public function getDao() {
		return new HisttaskDao;
	}

	public function getBusiness() {
		return new HisttaskBusiness();
	}

}
?>