<?php

    class Pessoa {
        privet $dataNascimento;
        privet $nome;

        public function imprimeDados(){
            echo "Data de Nascimento: ". $this->dataNascimento;
            echo "Nome: ". $this->nome;
        }

        public function mostrarNome($nome){
            return $this->nome;
        }

        $pessoa1 = new Pessoa();
        $pessoa1->dataNascimento = "21/11/1997";
        $pessoa1->nome = "Fernanda Belo";

        $pessoa2 = new Produto();
        $pessoa2->dataNascimento = "05/07/1997";
        $pessoa2->nome = "Denilson Oliveira";
 
        $pessoa1->imprimeDados();
        $pessoa1->imprimeDados();
    }

?>