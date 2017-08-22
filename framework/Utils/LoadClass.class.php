<?php

/*
  Arquivo carregar.class.php � o arquivo que carrega as classes do sistema
  Autor: Cleison Ferreira de Melo.
 */
if (!class_exists('Utilitarios'))
    include 'Utilitarios.class.php';
if (!class_exists('Logs'))
    include 'Logs.class.php';

class LoadClass {

    private $classes = '';
    private $temp = '';
    private $pastas = '';
    private $pasta = '';

    public function __construct() {
        /*function errorSistema($errno, $errstr) {
            //error_reporting(0);
            throw new Exception("<b>Error: [$errno] $errstr<br />");
        }
        set_error_handler("errorSistema");*/
    }

    public final function carregar($_vetor) {
        $utils = new Utilitarios();
        $logs = new Logs();
        try {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $utils->getContexto() . '/framework/sysConf/diretorios.ini')) {
                $dados = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/' . $utils->getContexto() . '/framework/sysConf/diretorios.ini');
                $this->classes = explode(';', $_vetor);
                $this->temp = $_SERVER['DOCUMENT_ROOT'] . '/' . $utils->getContexto() . '/';
                $this->pastas = array($dados);
                $arrayPath = array();
                $count = 0;
                for ($i = 0; $i < sizeof($this->classes); $i++) {
                    foreach ($this->pastas as $this->pasta) {
                        for ($j = 0; $j < sizeof($this->pasta); $j++) {
                            if (@file_exists($this->temp . "{$this->pasta[$j]}/{$this->classes[$i]}.class.php")) {
                                if (!class_exists($this->classes[$i])) {
                                    include $this->temp . $this->pasta[$j] . "/" . $this->classes[$i] . ".class.php";
                                    //echo $this->temp . $this->pasta[$j] . "/" . $this->classes[$i] . ".class.php" . "<br \>";
                                }
                            }
                        }
                    }
                }
            }
            else
                throw new Exception("Erro ao abrir arquivo de configuração");
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }

}

?>
