<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Elements
 *
 * @author Destroyer
 */
class ElementsHtml {

    private $name;
    private $properties;
    private $children;

    public function __construct($name) {
        $this->name = $name;
    }

    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    public function add($child){
        $this->children[] = $child;
    }

    public function open(){
        echo "<{$this->name}";
        if($this->properties){
            foreach($this->properties as $name => $value){
                echo " {$name}=\"{$value}\"";
            }
        }
        switch ($this->name){
            case 'input':{
               echo '';
            }
        default :
            echo ' >';
        }
    }

    public function show(){
        $this->open();
        echo '\n';
        if($this->children){
            foreach ($this->children as $child) {
                if(is_object($child)){
                    $child->show();
                }else if((is_string($child)) or (is_numeric($child))){
                    echo $child;
                }
            }
            $this->close();
        }
    }

    public function close(){
        switch ($this->name){
            case 'input':{
               echo ' />';
            }
        default :
            echo "</{$this->name}>";
        }
    }
}

?>
