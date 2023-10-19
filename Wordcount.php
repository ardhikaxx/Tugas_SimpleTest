<?php
// Kode di bawah ini mendefinisikan sebuah kelas bernama "Wordcount".
class Wordcount {
    // Fungsi "countWords" digunakan untuk menghitung jumlah kata dalam sebuah kalimat.
    public function countWords($sentence) {
        // Menggunakan fungsi "explode" untuk memecah kalimat menjadi array kata-kata, dengan pemisah spasi.
        $wordsArray = explode(" ", $sentence);

        // Menggunakan fungsi "count" untuk menghitung jumlah elemen dalam array kata-kata.
        $wordCount = count($wordsArray);

        // Mengembalikan jumlah kata dalam kalimat sebagai hasil.
        return $wordCount;
    }
}
// Penutup dari kelas "Wordcount".
?>