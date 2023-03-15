<?php
class Sequencia {
    private $inicio ;
    private $fim ;

    public function setInicio($i){$this->inicio = $i ;}
    public function setFim($f){$this->fim = $f ;}

    public function exibirTodosNumeros(){

            echo "Todos os números de ". $this->inicio . " até " .$this->fim ." : <br>";
            for($i = $this->inicio ; $i <= $this->fim ; $i++){
                echo "$i   ";
            if($i == $this->fim || $i == $this->fim){
                echo "<br>";
                echo "<hr>";
            }
        }
    }
    
    public function exibirNumerosPares(){
            
            echo "Todos os números pares de " .$this->inicio. " até " .$this->fim. " : <br>";
            for($i = $this->inicio; $i <= $this->fim ; $i++){
                if($i%2 == 0){
                    echo "$i   ";
                    if($i == $this->fim || $i == $this->fim-1){
                        echo "<br>";
                        echo "<hr>";    
                } 
            }
        }
    }

    public function exibirNumerosImpares(){
            
                echo "Todos os números ímpares de " .$this->inicio. " até " .$this->fim. " : <br>";
                for($i = $this->inicio; $i <= $this->fim ; $i++){
                    if($i%2 == 1){
                        echo "$i   ";
                        if($i == $this->fim || $i == $this->fim-1){
                            echo "<br>";
                            echo "<hr>";
                    
                } 
            }
        }
    }
}



?>