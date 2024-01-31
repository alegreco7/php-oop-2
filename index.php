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

// Creazione delle categorie
$caneCategoria = new Categoria('Cane', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000'); 
$gattoCategoria = new Categoria('Gatto', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');
$uccelliCategoria = new Categoria('Uccelli', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg');
$pesciCategoria = new Categoria('Pesci', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg');


// Creazione di alcuni prodotti
$prodotto1 = new Prodotto('Cibo per cani', 20.99, $caneCategoria);
$prodotto2 = new Prodotto('Cibo per gatti', 15.49, $gattoCategoria);
$prodotto3 = new Prodotto('Voliera', 89.99, $uccelliCategoria);
$prodotto4 = new Prodotto('Cibo per pesci', 12.99, $pesciCategoria);

// Funzione per stampare la card del prodotto
function stampaCardProdotto($prodotto) {
    echo '<div class="card">';
    echo '<img src="' . $prodotto->getCategoria()->getIcona() . '" alt="' . $prodotto->getCategoria()->getNome() . '">';
    echo '<h3>' . $prodotto->getNome() . '</h3>';
    echo '<p>Prezzo: $' . $prodotto->getPrezzo() . '</p>';
    echo '<p>Categoria: ' . $prodotto->getCategoria()->getNome() . '</p>';
    echo '</div>';
}

// Stampa delle card dei prodotti
stampaCardProdotto($prodotto1);
stampaCardProdotto($prodotto2);
stampaCardProdotto($prodotto3);
stampaCardProdotto($prodotto4);

?>