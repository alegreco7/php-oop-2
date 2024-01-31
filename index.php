<?php

// Definizione della classe Prodotto
class Prodotto {
    private $nome;
    private $prezzo;
    private $categoria;

    public function __construct($nome, $prezzo, $categoria) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getCategoria() {
        return $this->categoria;
    }
}

// Definizione della classe Categoria
class Categoria {
    private $nome;
    private $icona;

    public function __construct($nome, $icona) {
        $this->nome = $nome;
        $this->icona = $icona;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIcona() {
        return $this->icona;
    }
}

?>