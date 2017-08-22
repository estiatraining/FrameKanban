<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:41:24
*/


class FlowService extends CrudServiceImp {

	public function getDao() {
		return new FlowDao;
	}

	public function getBusiness() {
		return new FlowBusiness();
	}

}
?>