<?php
// Mengimpor kelas TestCase dari PHPUnit untuk digunakan dalam pengujian.
use PHPUnit\Framework\TestCase;

// Mengimpor kelas Wordcount yang akan diuji.
require_once "Wordcount.php";

// Mendefinisikan kelas SimpleTest yang akan digunakan untuk menguji Wordcount.
class SimpleTest extends TestCase {
    // Metode ini digunakan untuk menguji fungsi countWords dari kelas Wordcount.
    public function testCountWords() {
        // Membuat instance dari kelas Wordcount.
        $Wc = new Wordcount();

        // Kalimat yang akan diuji.
        $TestSentence = "My name is Dhika";

        // Memanggil fungsi countWords untuk menghitung jumlah kata dalam kalimat.
        $WordCount = $Wc->countWords($TestSentence);

        // Menggunakan metode assertEquals untuk memeriksa apakah hasilnya sesuai dengan yang diharapkan.
        // Dalam hal ini, kita mengharapkan jumlah kata sebesar 4.
        $this->assertEquals(4, $WordCount);
    }
}
// Penutup dari kelas SimpleTest.
?>