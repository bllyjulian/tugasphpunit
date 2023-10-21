<?php 
class WordCount {
public function countWords($sentence){ 

  //explode adalah fungsi pemisah string menjadi array
  //count digunakan untuk menghitung index array
  //parameter akan dipecah menggunakan fungsi explode dan  jumlah index array akan dihitung menggunakan fungsi count
  return count(explode(" ",$sentence)); 
}


}



?>