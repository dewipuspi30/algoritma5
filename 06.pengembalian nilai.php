<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

echo "Umur kita adalah ". hitungUmur(1986, 2023) ." tahun";

echo"<p><strong>by dewi puspita sari</strong>"
?>
