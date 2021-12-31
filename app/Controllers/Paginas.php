<?php

    Class Paginas extends Controller{

        public function index() {
            $dados = [
                'tituloPagina' => 'Pagina Inicial'
            ];

            $this->view('paginas/home', $dados);           
        }

        public function sobre() {
            $dados = [
                'tituloPagina' => 'Pagina Sobre'
            ];

            $this->view('paginas/sobre');
        }
      
    }

  
?>