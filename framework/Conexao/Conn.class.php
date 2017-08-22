<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Conn extends Utilitarios {

    private  $host;
    private  $port;
    private  $dbname;
    private  $usr;
    private  $passwd;
    private  $sgbd;
    public  $conn;    

    public function connect() {
        $util = new Utilitarios();
        $contexto = $util->getContexto();
        $logs = new Logs();
        try {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $contexto . '/framework/sysConf/conf.ini')) {
                $dados = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/' . $contexto . '/framework/sysConf/conf.ini');
                $this->usr = $dados['user'];
                $this->passwd = $dados['password'];
                $this->host = $dados['host'];
                $this->port = $dados['port'];
                $this->dbname = $dados['bank'];
                $this->sgbd = $dados['sgbd'];
                $dsn = $this->sgbd . ':dbname=' . $dados['bank'] . ';host=' . $dados['host'] . '';
                $this->conn = new PDO($dsn, $this->usr, $this->passwd);
                $this->conn->beginTransaction();
                if (!$this->conn) {
                    throw new PDOException("Erro ao conectar no banco de dados");
                }
                else
                    return $this->conn;
            }
            else
                throw new Exception("Erro ao abrir arquivo de configuração");
        } catch (Exception $e) {
            $logs->escrever($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }
    }
    
    public function rollBack(){
        if($this->conn){
            $this->conn->rollback();
            $this->closeConn();
        }
    }
    
    public function commit(){
        if($this->conn){
            $this->conn->commit();
            $this->closeConn();
        }        
    }

    public function closeConn() {
        $this->conn = NULL;
    }

}

?>
