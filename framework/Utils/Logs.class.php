<?php

/*
  Arquivo logs.class.php � o arquivo que cria um arquivo de log do sistema
  Autor: Cleison Ferreira de Melo.
 */
if (!class_exists('Utilitarios'))
    include 'Utilitarios.class.php';

class Logs {

    private $diretorio = '';

    public function __construct() {
        $utils = new Utilitarios();
        $this->diretorio = $_SERVER['DOCUMENT_ROOT'] . '/' . $utils->getContexto() . '/logsError/';
    }

    public function escrever($mensagem, $codigo, $linha, $arquivo) {
        $estrutura = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
        $estrutura .= "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n";
        $estrutura .= "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n";
        $estrutura .= "\t<head>\n";
        $estrutura .= "\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>\n";
        $estrutura .= "\t\t<title>" . $arquivo . " - " . date("d - m - Y H:i:s") . "</title>\n";
        $estrutura .= "\t\t<style>\n";
        $estrutura .= "\t\t\t*{ text-decoration: none; padding: 0; margin: 0; }\n";
        $estrutura .= "\t\t\tbody{ text-align: center; width: 100%; height: 100%; font-family: Verdana; }\n";
        $estrutura .= "\t\t\th2{  margin-top: 30px; letter-spacing: 3px; }\n";
        $estrutura .= "\t\t\tdiv#estrutura{ text-align: left; display: block; width: 800px;  margin: 0 auto; margin-top: 20px; padding: 10px; border: 2px dotted #808080; }\n";
        $estrutura .= "\t\t\tdiv#estrutura p{ text-indent: 30px; text-align: justify; color: blue; }\n";
        $estrutura .= "\t\t</style>\n";
        $estrutura .= "\t</head>\n";
        $estrutura .= "\t<body>\n";
        $estrutura .= "\t\t<h2>" . utf8_decode( $mensagem ) . "</h2>\n";
        $estrutura .= "\t\t<div id=\"estrutura\">\n";
        $estrutura .= "\t\t\t<p>\n";
        $estrutura .= "\t\t\t\t<b>Erro: </b>" . utf8_decode( $mensagem ) . "<b> - Código do erro: </b>" . $codigo . "<b>\n\t\t\t\tLinha: </b>" . $linha . "<b> - Arquivo: </b>" . $arquivo;
        $estrutura .= "\t\t\t</p>\n";
        $estrutura .= "\t\t</div>\n";
        $estrutura .= "\t</body>\n";
        $estrutura .= "</html>";
        $file = fopen($this->diretorio . "logErro_" . date("d-m-Y H-i-s") . ".xhtml", "w+");
        fwrite($file, $estrutura);
        @fclose($arquivar);
    }

}

?>