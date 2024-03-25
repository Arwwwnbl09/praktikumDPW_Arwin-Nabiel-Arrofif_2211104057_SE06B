<!-- <?php 
   echo "Saya sedang belajar PHP";    
   echo "<br>"; 
   echo "Hello World..."; 
?>  -->

<!-- <?php 
   $a='Saya Sedang belajar PHP '; 
   $b=90;    
   print $a;     
   echo $b; 
?>  -->


<!-- <?php
    print("Hello word"); 
    echo "Hello world"; 
?>  -->

<!-- <?php    
    const nama= "Kang Daniel";    
    echo nama;  // Kang Daniel 
?>  -->

<!-- <?php    
    define("nama", "Kang Daniel");    
    echo nama;  
?>  -->

<!-- $a = 10; 
$b = 5; 
$c = $a + $b; //penjumlahan 
$d = $a - $b; //pengurangan 
$e = $a * $b; //perkalian 
$f = $a / $b; //pembagian 
$g = $a % $b; //modulus 
$h = $a ** $b; //pangkat  -->

<!-- function tambah($a, $b) 
{ 
    $total = $a + $b;     
    return $total; 
} 

$total = tambah(5, 9);
echo $total -->

<?php
// Fungsi untuk mengecek apakah suatu bilangan prima
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Menampilkan bilangan prima dari 1 sampai 100
for ($i = 1; $i <= 100; $i++) 
{
    if (isPrime($i)) 
    {
        echo $i . " adalah bilangan prima <br>";
    }
}
?>