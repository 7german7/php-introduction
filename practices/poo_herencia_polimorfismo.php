<?php

class Product {
    public $id;
    public $title;
    public $price;
    public $description;

    public function __construct($id, $title, $price, $description) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
    }

    public function getProfit() {
        return $this->price * 0.1;
    }
}

class Book extends Product {
    public $author;
    public $pages;
    public $profitBonus = 0.1; // Ganancia Adicional

    public function __construct($id, $title, $price, $description, $author, $pages) {
        parent::__construct($id, $title, $price, $description);
        $this->author = $author;
        $this->pages = $pages;
    }

    public function getProfit() {
        return $this->price * (0.1 + $this->profitBonus);
    }

    public function getBook(){
        return [
            $this->id,
            $this->title,
            $this->price,
            $this->description,
            $this->author,
            $this->pages
        ];
    }

    public function showBook(){
        echo 'ID: '.$this->id.'<br>';
        echo 'Title: '.$this->title.'<br>';
        echo 'Price: '.$this->price.'$<br>';
        echo 'Description: '.$this->description.'<br>';
        echo 'Author: '.$this->author.'<br>';
        echo 'Pages: '.$this->pages.'<br>';
    }
}

class Album extends Product {
    public $company;
    public $artist;
    public $duration;
    public $genere;

    public function getProfit() {
        return $this->price * (0.1 + $this->profitBonus);
    }
}

$book1 = new Book(1,'La culpa es de la vaca', 150, 'Libro de la culpa es de la vaca Edicion #1', 'El autor', 100);
$book1->showBook();
echo 'Ganancia: '.$book1->getProfit().'$';
?>