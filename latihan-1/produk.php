<?php
    class Produk {
        public  $judul = "judul",
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0;

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }      

    }

    $produk3 = new Produk();
    $produk3->judul = "Naruto";
    $produk3->penulis = "Tatang Sutarman";
    $produk3->penerbit = "Sinar Duniawi";
    $produk3->harga = 30000;

    $produk4 = new Produk();
    $produk4->judul = "Uncharted";
    $produk4->penulis = "Neil Armstrong";
    $produk4->penerbit = "Pony Capture";
    $produk4->harga = 11000;

    echo "Komik: " . $produk3->getLabel();
    echo "<br>";
    echo "Komik: " . $produk4->getLabel();