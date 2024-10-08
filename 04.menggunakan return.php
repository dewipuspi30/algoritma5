<?php
function nama_bulan ($bulan) {
    $nama_bulan =array (1 => 'januari',2 =>'februari', 3 =>'maret');
}
//date('n) akan menghasilkan bulan sekarang dalam bentuk 1 digit,misal 3 untuk januari
$bulan =nama_bulan(date('n')); //hasil maret
echo $bulan .' '.date('y'); //hasil maret 2016

echo"<p><strong>by dewi puspita sari</strong>";