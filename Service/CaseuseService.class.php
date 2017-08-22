<?php
/*
	Analista Desenvolvedor Cleison Ferreira de Melo
	Especialista em desenvolvimento WEB com Java e PHP
	Java certified development 6.0
	Email: cleisommais@gmail.com
	Tel: 62 8511 3435
	Data: 11/04/2012 02:44:18
*/


class CaseuseService extends CrudServiceImp {

	public function getDao() {
		return new CaseuseDao;
	}

	public function getBusiness() {
		return new CaseuseBusiness();
	}

}
?>