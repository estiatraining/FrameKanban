<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CodeGenerator
 *
 * @author Destroyer
 * @version 1.0
 * @copyright 2011 - TI Forte
 */
class CodeGenerator {

    private $class;
    private $tipoPage = "";
    private $geraPage = "";
    private $methods;
    private $pathDto = "";
    private $pathAction = "";
    private $pathDao = "";
    private $pathService = "";
    private $pathBusiness = "";
    private $pathReports = "";
    private $pathPages = "";
    private $pathCSS = "";
    private $pathJScript = "";

    public function __construct() {
        $utils = new Utilitarios();
        $this->pathAction = $_SERVER['DOCUMENT_ROOT'] . "/" . $utils->getContexto() . "/Action/";
        $this->pathDto = $_SERVER['DOCUMENT_ROOT'] . "/" . $utils->getContexto() . "/Dto/";
        $this->pathDao = $_SERVER['DOCUMENT_ROOT'] . "/" . $utils->getContexto() . "/Dao/";
        $this->pathService = $_SERVER['DOCUMENT_ROOT'] . "/" . $utils->getContexto() . "/Service/";
        $this->pathBusiness = $_SERVER['DOCUMENT_ROOT'] . "/" . $utils->getContexto() . "/Business/";
        $this->pathReports = $_SERVER['DOCUMENT_ROOT'] . "/" . $utils->getContexto() . "/Reports/";
        $this->pathPages = $_SERVER['DOCUMENT_ROOT'] . "/" . $utils->getContexto() . "/pages/";
        $this->pathCSS = $_SERVER['DOCUMENT_ROOT'] . "/" . $utils->getContexto() . "/CSS/";
        $this->pathJScript = $_SERVER['DOCUMENT_ROOT'] . "/" . $utils->getContexto() . "/JScript/";
    }

    public function genDto() {
        $arquivo = fopen($this->pathDto . $this->getClass() . "Dto.class.php", "w+");
        $dados = @split(';', $this->getMethods());
        $estruturaClass = "<?php\n/*\n";
        $estruturaClass .= "\tAnalista Desenvolvedor Cleison Ferreira de Melo\n";
        $estruturaClass .= "\tEspecialista em desenvolvimento WEB com Java e PHP\n";
        $estruturaClass .= "\tJava certified development 6.0\n";
        $estruturaClass .= "\tEmail: cleisommais@gmail.com\n";
        $estruturaClass .= "\tTel: 62 8511 3435\n";
        $estruturaClass .= "\tData: " . date("d/m/Y H:i:s") . "\n";
        $estruturaClass .= "*/\n";
        $estruturaClass .= "class " . $this->getClass() . " {\n";
        $estruturaAttributes = "\n";
        $estruturaMethod = "";
        foreach ($dados as $key => $valor) {
            $methodo = @split("_", $valor);
            $estruturaAttributes .= "\tprivate $" . strtolower($valor) . ";\n";
            $get = "get" . ucwords($methodo[0]) . ucwords($methodo[1]) . @ucwords($methodo[2]) . "(){\n";
            $set = "set" . ucwords($methodo[0]) . ucwords($methodo[1]) . @ucwords($methodo[2]) . "( $" . $valor . " ){\n";
            $estruturaMethod .= "\tpublic function " . $get;
            $estruturaMethod .= "\t\treturn $" . "this->" . strtolower($valor) . ";\n";
            $estruturaMethod .= "\t}\n";
            $estruturaMethod .= "\tpublic function " . $set;
            $estruturaMethod .= "\t\t$" . "this->" . strtolower($valor) . " = $" . strtolower($valor) . ";\n";
            $estruturaMethod .= "\t}\n";
            $estruturaMethod .= "\n";
        }
        $estruturaClass .= $estruturaAttributes . "\n";
        $estruturaClass .= $estruturaMethod;
        $estruturaClass .= "}\n?>";
        if (fwrite($arquivo, $estruturaClass)) {
            fclose($arquivo);
            return true;
        } else {
            fclose($arquivo);
            return false;
        }
    }

    public function genAction() {
        $arquivo = fopen($this->pathAction . $this->getClass() . "Action.class.php", "w+");
        $dados = @split(';', $this->getMethods());
        $estruturaTop = "<?php\n/*\n";
        $estruturaTop .= "\tAnalista Desenvolvedor Cleison Ferreira de Melo\n";
        $estruturaTop .= "\tEspecialista em desenvolvimento WEB com Java e PHP\n";
        $estruturaTop .= "\tJava certified development 6.0\n";
        $estruturaTop .= "\tEmail: cleisommais@gmail.com\n";
        $estruturaTop .= "\tTel: 62 8511 3435\n";
        $estruturaTop .= "\tData: " . date("d/m/Y H:i:s") . "\n";
        $estruturaTop .= "*/\n";
        $estruturaTop .= "\n";
        $estruturaClass = $estruturaTop . "\nclass " . $this->getClass() . "Action extends CrudActionImp {\n\n";
        $estruturaMethod = "";
        $estruturaMethod .= "\tpublic function __construct() {\n";
        $estruturaMethod .= "\t\t$" . "utils = new Utilitarios();\n";
        $estruturaMethod .= "\t\t$" . "request = $" . "_REQUEST;\n";
        $estruturaMethod .= "\t\t$" . "this->setDto($" . "utils->getBean($" . "request, $" . "this->getPropertiesDto()));\n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaMethod .= "\tpublic function getPropertiesDto() {\n";
        $estruturaMethod .= "\t\treturn $" . "array = array(";
        $estruturaMethod .= "'" . implode("', '", $dados) . "'";
        $estruturaMethod .= ");\n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaMethod .= "\tpublic function getService() {\n";
        $estruturaMethod .= "\t\treturn new " . $this->getClass() . "Service();\n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaMethod .= "\tpublic function setDto($" . "obj) {\n";
        $estruturaMethod .= "\t\t$" . "this->Dto = $" . "obj; \n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaMethod .= "\tpublic function getDto() {\n";
        $estruturaMethod .= "\t\treturn $" . "this->Dto;\n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaClass .= $estruturaMethod;
        $estruturaClass .= "}\n?>";
        if (fwrite($arquivo, $estruturaClass)) {
            fclose($arquivo);
            return true;
        } else {
            fclose($arquivo);
            return false;
        }
    }

    public function genService() {
        $arquivo = fopen($this->pathService . $this->getClass() . "Service.class.php", "w+");
        $dados = @split(';', $this->getMethods());
        $estruturaTop = "<?php\n/*\n";
        $estruturaTop .= "\tAnalista Desenvolvedor Cleison Ferreira de Melo\n";
        $estruturaTop .= "\tEspecialista em desenvolvimento WEB com Java e PHP\n";
        $estruturaTop .= "\tJava certified development 6.0\n";
        $estruturaTop .= "\tEmail: cleisommais@gmail.com\n";
        $estruturaTop .= "\tTel: 62 8511 3435\n";
        $estruturaTop .= "\tData: " . date("d/m/Y H:i:s") . "\n";
        $estruturaTop .= "*/\n";
        $estruturaTop .= "\n";
        $estruturaClass = $estruturaTop . "\nclass " . $this->getClass() . "Service extends CrudServiceImp {\n\n";
        $estruturaMethod = "\tpublic function getDao() {\n";
        $estruturaMethod .= "\t\treturn new " . $this->getClass() . "Dao;\n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaMethod .= "\tpublic function getBusiness() {\n";
        $estruturaMethod .= "\t\treturn new " . $this->getClass() . "Business();\n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaClass .= $estruturaMethod;
        $estruturaClass .= "}\n?>";
        if (fwrite($arquivo, $estruturaClass)) {
            fclose($arquivo);
            return true;
        } else {
            fclose($arquivo);
            return false;
        }
    }

    public function genBusiness() {
        $arquivo = fopen($this->pathBusiness . $this->getClass() . "Business.class.php", "w+");
        $dados = @split(';', $this->getMethods());
        $estruturaTop = "<?php\n/*\n";
        $estruturaTop .= "\tAnalista Desenvolvedor Cleison Ferreira de Melo\n";
        $estruturaTop .= "\tEspecialista em desenvolvimento WEB com Java e PHP\n";
        $estruturaTop .= "\tJava certified development 6.0\n";
        $estruturaTop .= "\tEmail: cleisommais@gmail.com\n";
        $estruturaTop .= "\tTel: 62 8511 3435\n";
        $estruturaTop .= "\tData: " . date("d/m/Y H:i:s") . "\n";
        $estruturaTop .= "*/\n";
        $estruturaTop .= "\n";
        $estruturaClass = $estruturaTop . "\nclass " . $this->getClass() . "Business extends CrudBusinessImp {\n\n";
        $estruturaMethod = "\tpublic function getDao() {\n";
        $estruturaMethod .= "\t\treturn new " . $this->getClass() . "Dao;\n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaMethod .= "\tpublic function getService() {\n";
        $estruturaMethod .= "\t\treturn new " . $this->getClass() . "Service();\n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaClass .= $estruturaMethod;
        $estruturaClass .= "}\n?>";
        if (fwrite($arquivo, $estruturaClass)) {
            fclose($arquivo);
            return true;
        } else {
            fclose($arquivo);
            return false;
        }
    }

    public function genDao() {
        $arquivo = fopen($this->pathDao . $this->getClass() . "Dao.class.php", "w+");
        $dados = @split(';', $this->getMethods());
        $estruturaTop = "<?php\n/*\n";
        $estruturaTop .= "\tAnalista Desenvolvedor Cleison Ferreira de Melo\n";
        $estruturaTop .= "\tEspecialista em desenvolvimento WEB com Java e PHP\n";
        $estruturaTop .= "\tJava certified development 6.0\n";
        $estruturaTop .= "\tEmail: cleisommais@gmail.com\n";
        $estruturaTop .= "\tTel: 62 8511 3435\n";
        $estruturaTop .= "\tData: " . date("d/m/Y H:i:s") . "\n";
        $estruturaTop .= "*/\n";
        $estruturaTop .= "\n";
        $estruturaClass = $estruturaTop . "\nclass " . $this->getClass() . "Dao extends CrudDaoImp {\n\n";
        $estruturaMethod = "";
        $estruturaMethod .= "\tpublic function getColumns() {\n";
        $estruturaMethod .= "\t\treturn $" . "array = @array(";
        $i = 0;
        $virgula = "";
        foreach ($dados as $campo => $valor) {
            if ($i == (sizeof($dados) - 1)) {
                $virgula = "";
            } else {
                $virgula = ", \n\t\t\t";
            }
            if ($i == 0) {
                $estruturaMethod .= "'" . $valor . "' => (integer)$" . "this->getDto()->" . $valor . $virgula;
            } else {
                $estruturaMethod .= "'" . $valor . "' => $" . "this->getDto()->" . $valor . $virgula;
            }
            $i++;
        }
        $estruturaMethod .= ");\n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaMethod .= "\tpublic function getTable() {\n";
        $estruturaMethod .= "\t\treturn '" . strtoupper($this->getClass()) . "';\n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaMethod .= "\tpublic function setDto($" . "obj) {\n";
        $estruturaMethod .= "\t\t$" . "this->dto = $" . "obj; \n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaMethod .= "\tpublic function getDto() {\n";
        $estruturaMethod .= "\t\treturn $" . "this->dto;\n";
        $estruturaMethod .= "\t}\n\n";
        $estruturaClass .= $estruturaMethod;
        $estruturaClass .= "}\n?>";
        if (fwrite($arquivo, $estruturaClass)) {
            fclose($arquivo);
            return true;
        } else {
            fclose($arquivo);
            return false;
        }
    }

    public function genReports() {
        $arquivo = fopen($this->pathReports . $this->getClass() . "Report.class.php", "w+");
        $dados = @split(';', $this->getMethods());
        $estruturaTop = "<?php\n/*\n";
        $estruturaTop .= "\tAnalista Desenvolvedor Cleison Ferreira de Melo\n";
        $estruturaTop .= "\tEspecialista em desenvolvimento WEB com Java e PHP\n";
        $estruturaTop .= "\tJava certified development 6.0\n";
        $estruturaTop .= "\tEmail: cleisommais@gmail.com\n";
        $estruturaTop .= "\tTel: 62 8511 3435\n";
        $estruturaTop .= "\tData: " . date("d/m/Y H:i:s") . "\n";
        $estruturaTop .= "*/\n";
        $estruturaTop .= "?>\n";
        if (fwrite($arquivo, $estruturaTop)) {
            fclose($arquivo);
            return true;
        } else {
            fclose($arquivo);
            return false;
        }
    }

    public function genPages() {
        if ($this->getGeraPage() == 's') {
            mkdir($this->pathPages . strtolower($this->getClass()) . "");
            $arquivo = fopen($this->pathPages . strtolower($this->getClass()) . "/" . strtolower($this->getClass()) . "." . $this->getTipoPage(), "w+");
            $dados = @split(';', $this->getMethods());
            if ($this->getTipoPage() == 'xhtml') {
                $estruturaTop = "<!--\n/*\n";
                $estruturaTop .= "\tAnalista Desenvolvedor Cleison Ferreira de Melo\n";
                $estruturaTop .= "\tEspecialista em desenvolvimento WEB com Java e PHP\n";
                $estruturaTop .= "\tJava certified development 6.0\n";
                $estruturaTop .= "\tEmail: cleisommais@gmail.com\n";
                $estruturaTop .= "\tTel: 62 8511 3435\n";
                $estruturaTop .= "\tData: " . date("d/m/Y H:i:s") . "\n";
                $estruturaTop .= "*/\n";
                $estruturaTop .= "-->\n";
                if (fwrite($arquivo, $estruturaTop)) {
                    fclose($arquivo);
                    return true;
                } else {
                    fclose($arquivo);
                    return false;
                }
            } else {
                $estruturaTop = "<?php\n/*\n";
                $estruturaTop .= "\tAnalista Desenvolvedor Cleison Ferreira de Melo\n";
                $estruturaTop .= "\tEspecialista em desenvolvimento WEB com Java e PHP\n";
                $estruturaTop .= "\tJava certified development 6.0\n";
                $estruturaTop .= "\tEmail: cleisommais@gmail.com\n";
                $estruturaTop .= "\tTel: 62 8511 3435\n";
                $estruturaTop .= "\tData: " . date("d/m/Y H:i:s") . "\n";
                $estruturaTop .= "*/\n";
                $estruturaTop .= "?>\n";
                if (fwrite($arquivo, $estruturaTop)) {
                    fclose($arquivo);
                    return true;
                } else {
                    fclose($arquivo);
                    return false;
                }
            }
        }
        return true;
    }

    public function genCSS() {
        if ($this->getGeraPage() == 's') {
            $arquivo = fopen($this->pathCSS . strtolower($this->getClass()) . ".css", "w+");
            $dados = @split(';', $this->getMethods());
            $estruturaTop = "/*\n";
            $estruturaTop .= "\tAnalista Desenvolvedor Cleison Ferreira de Melo\n";
            $estruturaTop .= "\tEspecialista em desenvolvimento WEB com Java e PHP\n";
            $estruturaTop .= "\tJava certified development 6.0\n";
            $estruturaTop .= "\tEmail: cleisommais@gmail.com\n";
            $estruturaTop .= "\tTel: 62 8511 3435\n";
            $estruturaTop .= "\tData: " . date("d/m/Y H:i:s") . "\n";
            $estruturaTop .= "*/\n";
            $estruturaTop .= "\n";
            $estrutura = $estruturaTop . "*{\n";
            $estrutura .= "\ttext-decoration: none;\n";
            $estrutura .= "\tpadding: 0;\n";
            $estrutura .= "\tmargin: 0;\n";
            $estrutura .= "}\n";
            $estrutura .= "body{\n";
            $estrutura .= "\twidth: 100%;\n";
            $estrutura .= "\theight: 100%;\n";
            $estrutura .= "\tfont-size: 16px;\n";
            $estrutura .= "\ttext-align: center;\n";
            $estrutura .= "}\n";
            if (fwrite($arquivo, $estrutura)) {
                fclose($arquivo);
                return true;
            } else {
                fclose($arquivo);
                return false;
            }
        }
        return true;
    }

    public function genJScript() {
        if ($this->getGeraPage() == 's') {
            $arquivo = fopen($this->pathJScript . strtolower($this->getClass()) . ".js", "w+");
            $dados = @split(';', $this->getMethods());
            $estruturaTop = "/*\n";
            $estruturaTop .= "\tAnalista Desenvolvedor Cleison Ferreira de Melo\n";
            $estruturaTop .= "\tEspecialista em desenvolvimento WEB com Java e PHP\n";
            $estruturaTop .= "\tJava certified development 6.0\n";
            $estruturaTop .= "\tEmail: cleisommais@gmail.com\n";
            $estruturaTop .= "\tTel: 62 8511 3435\n";
            $estruturaTop .= "\tData: " . date("d/m/Y H:i:s") . "\n";
            $estruturaTop .= "*/\n";
            $estruturaTop .= "\n";
            $estrutura = $estruturaTop . "";
            if (fwrite($arquivo, $estrutura)) {
                fclose($arquivo);
                return true;
            } else {
                fclose($arquivo);
                return false;
            }
        }
        return true;
    }

    public function getClass() {
        return $this->class;
    }

    public function setClass($class) {
        $this->class = ucwords(strtolower($class));
    }

    public function getMethods() {
        return $this->methods;
    }

    public function setMethods($methods) {
        $this->methods = strtolower($methods);
    }

    public function getGeraPage() {
        return $this->geraPage;
    }

    public function setGeraPage($geraPage) {
        $this->geraPage = $geraPage;
    }

    public function getTipoPage() {
        return $this->tipoPage;
    }

    public function setTipoPage($tipoPage) {
        $this->tipoPage = $tipoPage;
    }

}

?>
