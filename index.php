Perulangan/Looping
Konsep perulangan membantu kita agar tidak perlu menulis sintaks yang sama untuk mengeksekusi perintah yang kita buat.

Struktur Looping(Perulangan)
Initialization (Inisialisasi) :

Menentukan variabel awal untuk pengulangannya.

Condition (Kondisi Terminasi) :

Untuk menghentikan fungsi pengulangan.

Increment / Decrement :

Bagian untuk mengaktifkan pengulangannya bisa maju atau mundur.

Looping dibagi menjadi tiga :

For

Perulangan ini digunakan untuk perulangan yang telah diketahui banyaknya.

Contoh: Membuat tulisan "Hello World" sebanyak 5 kali. Hasilnya:

<?php
for( $i = 0; $i < 5; $i++ ){
    echo "Hello World! <br>";
} 
?>
Nilai $i = 0 yang pertama untuk nilai awal, nilai $i <=5 yang kedua berfngsi untuk menentukan banyak jumlah perulangannya dan $i++ yang ketiga menandakan bahwa $i akan selalu bertambah selama jumlah nya kurang dari 5. Hasilnya:



While

Perulangan dengan mengeksekusi pernyataan target selama kondisi tertentu bernilai benar.

Contoh: Membuat tulisan "Hello World" sebanyak 5 kali. Hasilnya:

<?php
$i = 0; //inisialisasi
while ($i < 5) { //Kondisi Terminasi
    echo "Hallo World! <br>"; //statement
$i++; //Incerment/Decerment
}
?>
Nilai $i = 0 yang pertama untuk menentukan variabel dan nilai awal, while untuk kondisi statement yang kita inginkan, dan nilai $i++ untuk increment(Ditambah 1 hingga mencapai statement yang diinginkan). Hasilnya:



Do...While

Perulangan di lakukan di awal, sehingga jika kondisi tidak terpenuhi, maka perulangan tidak akan pernah dijalankan.

Contoh: Membuat tulisan "Hello World" sebanyak 5 kali. Hasilnya:

<?php
$i = 0;
do {
    echo "Hello World! <br>";
$i++;
} while($i<5);
?>
Perbedaan while dengan do while adalah jika while akan melakukan perulangan jika kondisi(syarat) terpenuhi. Do while melakukan perulangan terlebih dulu kemudian memeriksa kondisinya, jika kondisi terpenuhi, do while akan melanjutkan perulangan, sebaliknya, dia akan berhenti. hasilnya :



Setelah mempelajari looping, selanjutnya kita bisa mempelajari bagaimana cara mencetak beberapa pola dengan konsep looping menggunakan PHP. Namun mencetak pola melalui konsep looping bisa juga dengan selain PHP, contohnya bahasa C dan Java.

1. Mencetak Pola Segitiga Siku Siku
<?php
for ($i=1; $i<=5; $i++) {
    for ($j=4; $j>=$i; $j--) {
        echo "  ";
    }for ($k=1; $k<=$i; $k++) {
         echo "$k";
    }echo "<br>";
}
?>
Fungsi for yang pertama untuk menentukan nilai dan variabel awal, for yang kedua agar menentukan membuat gambar menjadi segitiga siku-siku dan for yang ketiga untuk menentukan dari mulai angka berapa kita akan membuat segitiga(angka awal). Hasilnya:



<?php
for ($i=1; $i<=5; $i++) {
    for ($j=4; $j>=$i; $j--) {
         echo "  ";
     }for ($k=$i; $k>=1; $k--) {
         echo "$k";
     }echo "<br>";
}
?>
Perbedaan dengan segitiga yang pertama adalah jika yang pertama dimulai dari angka awal yang terkecil. dan ini dimulai dari terbesar. Perbedaannya terdapat pada for ke tiga bagian $k>=1; . Hasilnya:



<?php
for ($i=1; $i<=5; $i++){
    for ($j=$i; $j>=1; $j--){
        echo $j;
    }echo "<br>";
}
?>
Fungsi for awal untuk menentukan nilai dan variabel awalnya.Fungsi for yang kedua untuk menentukan kondisi dari looping tersebut. Hasilnya:



<?php
for ($i=1; $i<=5; $i++){
    for ($j=5; $j>=$i; $j--){
        echo $j;
    }echo "<br>";
}
?>
Fungsi for yang pertama untuk menentukan nilai dan variabel awal dan for yang kedua untuk menentukan bagaimana kondisi statement yang kita mau. Hasilnya:



<?php
for ($i=5; $i>=1; $i--){
    for ($j=5; $j>=$i; $j--){
          echo $j;
     }echo "<br>";
}
?>
Sama dengan segitiga di atas. perbedaannya pada for awal di bagian $i=5 yang maksudnya dimulai dari angka 5. Nilai $i>=1; $i-- maksudnya adalah jika 5 lebih dari satu maka lima akan dikurangi 1 hingga bernilai 1. Hasilnya:


<?php
for ($i=5; $i>=1; $i--){
      for ($j=$i; $j<=5; $j++){
          echo $j;
      }echo "<br>";
}
?>
Dari segitiga diatas perbedaannya terdapat pada for ke 2, yakni $j=$i maksudnya adalah segitiga ini dimulai dari nilai terkecil disetiap barisnya. Hasilnya:



<?php
for ($i=5; $i>=1; $i--){
    for ($j=$i; $j>=1; $j--){
        echo $j;
    }echo "<br>";
}
?>
Fungsi for pertama berfungsi untuk menentukan variabel dan nilai awal. For yang kedua berfungsi untuk menentukan kondisi dari statement yang kita mau. Hasilnya:



<?php
for ($i=1; $i<=5; $i++){
    for ($j=$i; $j<=5; $j++){
    echo $j;
    }
    echo "<br>";
}
?>
Fungsi for itu sama fungsinya, perbedannya pada for pertama bagian $i=1 yang artinya dimulai dari angka 1, dan $i<=5; $i++ yang berarti jika nilai awal kurang dari 5 maka akan ditambah satu hingga hingga mencapai nilai 5. Hasilnya:



<?php
for( $a=5; $a>0; $a--){
    for($b=6; $b>$a; $b--){
        echo "*";
    }echo"<br>";
}
?>
Bedanya dari segitiga lain adalah pada keluarannya yang berbentuk bintang ()bukan angka. karena statement yang kita mau nya adalah bintang (echo "";). Hasilnya:


2. Mencetak Pola Piramida
<?php
for( $a=10; $a>0; $a--){
    for($i=1; $i<=$a; $i++){
        echo "  ";
    }for($a1=10; $a1>$a; $a1--){
        echo"x";
    }for($a2=11; $a2>$a; $a2--){
        echo"x";
    }echo"<br>";
}
?>
Fungsi for awal berfungsi untuk menentukan nilai dan variabel awal. For yang lainnya berfungsi untuk menentukan kondisi dari statement yang kita mau. Namun arti dari echo "  "; berfungsi sebagai pengganti spasi untuk membentuk segitiga, karena jika menggunakan echo " "; tidak akan terbaca dan membuat menjadi segitiga siku siku. Dan fungsi echo "x"; berfungsi untuk memunculkan keluaran berbentuk x sesuai bentuk keluaran yang kita inginkan. Hasilnya:


3. Mencetak Pola Belah Ketupat
<?php
for( $a=9; $a>0; $a--){
    for($i=1; $i<=$a; $i++){
        echo "  ";
    }for($a1=10; $a1>$a; $a1--){
        echo"x";
    }for($a2=9; $a2>$a; $a2--){
        echo"x";
    }echo"<br>";
}for($b=0; $b<=9; $b++){
    for($j=1; $j<=$b; $j++){
        echo"  ";
    }for($b1=10; $b1>$b; $b1--){
        echo"x";
    }for($b2=9; $b2>$b; $b2--){
        echo"x";
    }echo"<br>";
}
?>
​*For*** yang pertama sama saja dengan kita membuat dua pola piramida. Namun perbedannya pada bagian *for($b=0; $b<=9; $b++)*** yang berarti nilai awalnya adalah 0 dan jika nilai awal nya kurang dari 9 maka akan ditambah hingga nilai mencapai nilai 9. hasilnya :


Nah setelah membaca artikel diatas, diharapkan kawan-kawan sudah mengerti mengenai looping hingga mencetak pola dengan konsep looping