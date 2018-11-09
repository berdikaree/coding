<pre>
<?php

echo "<h2>Membuat public & private key RSA</h2> ";

//untuk membuat kunci yang lebih panjang coba gmp_random
//$rand1 = gmp_random(1); // mengeluarkan random number dari 0 sampai 1 x limb
//$rand2 = gmp_random(1); // mengeluarkan random number dari 0 sampai 1 x limb

//mencari bilangan random
$rand1=rand(1000,2000);
$rand2=rand(1000,2000);

// mencari bilangan prima selanjutnya dari $rand1 &rand2
$p = gmp_nextprime($rand1); 
$q = gmp_nextprime($rand2);

//menampilkan p & q
echo 'p='.gmp_strval($p)." "; 
echo 'q='.gmp_strval($q)." ";

//menghitung&menampilkan n=p*q
$n=gmp_mul($p,$q);
echo 'n='.gmp_strval($n)." ";

//menghitung&menampilkan totient/phi=(p-1)(q-1)
$totient=gmp_mul(gmp_sub($p,1),gmp_sub($q,1));
echo 'totient='.gmp_strval($totient)." ";

//mencari e, dimana e merupakan coprime dari totient
//e dikatakan coprime dari totient jika gcd/fpb dari e dan totient/phi = 1
for($e=2;$e<100;$e++){  //mencoba perulangan max 100 kali, 
    $gcd = gmp_gcd($e, $totient);
    if(gmp_strval($gcd)=='1')
        break;
}
//menampilkan gcd
echo 'gcd = '.gmp_strval($gcd)." ";
//menampilkan e
echo 'e='.gmp_strval($e)." ";

//cari d
// d.e mod totient =1
// d.e = totient*x + 1
// d.e = totient*1 + 1
// d = (totient *1 + 1)/e

//menghitung&menampilkan d
$i=1;
do{
    $res = gmp_div_qr(gmp_add(gmp_mul($totient,$i),1), $e);
    echo '((totient*'.$i.') + 1) / e='.gmp_strval($res[0])." ; sisa= ".gmp_strval($res[1])." ";
    $i++;
    if($i==10000) //maksimal percobaan 10000
        break;
}while(gmp_strval($res[1])!='0');
$d=$res[0];
echo 'd='.gmp_strval($d)." ";

echo "hasil test d.e mod totient = ".gmp_strval(gmp_mod(gmp_mul($d,$e),$totient));

echo "<hr/> ";
echo "<h2>


Ringkasan</h2>
 ";
echo "Desimal : ";
echo "n =".gmp_strval($n)." ";
echo "e =".gmp_strval($e)." ";
echo "d =".gmp_strval($d)." ";
echo "Hexadesimal : ";
echo "n =".gmp_strval($n,16)." ";
echo "e =".gmp_strval($e,16)." ";
echo "d =".gmp_strval($d,16)." ";
echo "Biner : ";
echo "n =".gmp_strval($n,2)." ";
echo "e =".gmp_strval($e,2)." ";
echo "d =".gmp_strval($d,2)." ";
echo "Basis 36 : ";
echo "n =".gmp_strval($n,36)." ";
echo "e =".gmp_strval($e,36)." ";
echo "d =".gmp_strval($d,36)." ";
?> 
</pre>