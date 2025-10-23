<?php
class Pessoa {

    public $nome;
    public $idade;

    public function falar() {
        echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
}
?>
