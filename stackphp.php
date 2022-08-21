<?php 
class Stack
{
    // Mendefinisikan stack
    private $stack;
    // Mendefinisikan batas stack
    private $batas;

    // Membuat fungsi konstruksi suatu stack
    public function __construct($nilai = array(),$batas = 10) {
        // Membuat tempat untuk data
        $this->stack = array_reverse($nilai);
        // Batas stack yang boleh ditumpuk
        $this->batas = $batas;
    }

    // untuk menaruh element kedalam stack
    public function push($item) {
        // Menghitung apakah stack masih bisa ditumpuk
        if (count($this->stack) < $this->batas) {
            // menambahkan lagi item ke array
            array_unshift($this->stack, $item);
        } else {
            // Yang akan terjadi jika stack melebihi batas
            throw new RunTimeException('Stack Penuh!');
        }
    }

    // Untuk mengeluarkan element dalam stack
    public function pop() {
        if ($this->isEmpty()) {
            // Jika terdapat stack kosong
          throw new RunTimeException('Stack Kosong!');
      } else {
            // Jika masih ada stack, maka stack akan dikeluarkan
            return array_shift($this->stack);
        }
    }

    // Untuk mengetahui apakah stack kosong?
    public function isEmpty() {
        return empty($this->stack);
    }
}

// Membuat Stack baru
$stack = new Stack();
$stack->push("Farhan"); // 0
$stack->push("Wisnu");  // 1
$stack->push("Randi");  // 2
$stack->push("Jupri");  // 3
$stack->push("Faiz");   // 4
$stack->push("Adam");   // 5
$stack->push("Neuvil"); // 6
$stack->push("Ferdy");  // 7
$stack->push("Farid");  // 8
$stack->push("Raihan"); // 9

// Jika menambahkan 1 stack lagi, maka akan muncul error stack full
// $stack->push("Dimas");

// Menampilkan Stack
print_r($stack);

// perubahannya tidak ada semua legitimate terimakasi mas pace !!!




?>

