<?php 

// Jualan Produk
// Komik
// Game

class produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function sayHello() {
        return "Hello World!";
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new produk();
// $produk -> judul = "Naruto";

// $produk2 = new produk();
// $produk2 -> judul = "Uncharted";
// $produk2 -> tambahProperty = "hahahahah";

$produk1 = new produk("Naruto", "Masashi Kishimoto","Shonen Jump", 30000);
// $produk3->judul = "Naruto";
// $produk3->penulis = "Mashashi Kishimoto";
// $produk3->penerbit = "Shonen Jump";
// $produk3->harga = 30000;

$produk2 = new produk("Uncharted","Neil Druckmann","Sony Computer",250000);
// $produk4->judul = "Uncharted";
// $produk4->penulis = "Neil Druckmann";
// $produk4->penerbit = "Sony Computer";
// $produk4->harga = 250000;

echo "Komik : " . $produk1 -> getLabel();
echo "<br>";
echo "Game : " . $produk2 -> getLabel();
//echo $produk3->sayHello();
//echo $produk3->getLabel();


?>