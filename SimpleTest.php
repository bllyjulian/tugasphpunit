<?php 
use PHPUnit\Framework\TestCase; //menggunakan framework PHPUnit

require_once "WordCount.php"; //menggunakan require_once lebih disarankan untuk memastikan bahwa file yang disertakan tidak dieksekusi lebih dari sekali.

class SimpleTest extends TestCase{ //membuat kelas SimpleTest yang merupakan pewarisan dari kelas TestCase(mewakili atribut)
public function testCountWords(){ //membuat function
  $Wc = new WordCount(); //proses instansiasi dari kelas WorkCount

  $TestSentence = "My name is Billy"; //output 4kata yang akan dihitung
  $WordCount = $Wc->countWords($TestSentence);//memanggil function countWords dari kelas WorkCount untuk menghitung nilai dari variabel TestSentence

  $this->assertEquals(4, $WordCount); //panggilan fungsi pengujian assertEquals yang digunakan untuk memeriksa apakah dua nilai adalah sama. Dalam kasus ini, ia membandingkan nilai 4 dengan nilai dari variabel $WordCount
}

}

?>