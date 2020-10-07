<?php
//Jangan Dirubah Nanti Eror
system('clear');
echo "
JIKA TIDAK TAU KODENYA,SILAHKAN DOWNLOAD DULU
1.Masukan Kode
2.Download Kode\n";
echo "
Pilih==>>\n";
switch(trim(fgets(STDIN)))
       {
case 2:
echo "Download Filenya Dan Ekstrak,Lalu Lihat File txt\n";
system('sleep 0.5');
echo "Membuka Browser\n";
system('sleep 1');
system('xdg-open https://sfile.mobi/4u6SA9WvyEb');
system('sleep 1');
system('php aris.php');
exit();
case 1:
system('sleep 1');
echo "Masukkan Kode:\n";
switch(trim(fgets(STDIN)))
       {
case MAris:
system('sleep 1');
system('clear');
echo "Kode Benar!!\n";
system('sleep 1');
system('php RecodeMandul.php');
system('sleep 1');
exit();
  }
}
// Close standard in..
    fclose(STDIN);
?>
