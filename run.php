/<?php
/*
    RAZEPEDIA
    https://github.com/mrzptra
    API BY RAZEPEDIA.MY.ID
*/

function tagihanindihome($no){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://razepedia.my.id/api/cektagihan_indihome.php?id='.$no.'',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$respon = curl_exec($curl);

curl_close($curl);
$jsondata = json_decode($respon);
if($jsondata->status == "true"){
  echo "===================================\n";
  echo " NAMA : ".$jsondata->data->atas_nama."\n";
  echo " TAGIHAN BULAN : ".$jsondata->data->tagihan_bulan."\n";
  echo " TOTAL TAGIHAN : ".$jsondata->data->jumlah_tagihan."\n";
  echo "===================================\n";
}else{
  echo "===================================\n";
  echo " Error, No Internet tidak ditemukan atau web error \n";
  echo "===================================\n";
  }
}
print "====================================\n";
print "┏━━━┳━━━┳━━━━┳━━━┳━━━┳━━━┳━━━┳━━┳━━━┓\n";
print "┃┏━┓┃┏━┓┣━━┓━┃┏━━┫┏━┓┃┏━━┻┓┏┓┣┫┣┫┏━┓┃\n";
print "┃┗━┛┃┃╋┃┃╋┏┛┏┫┗━━┫┗━┛┃┗━━┓┃┃┃┃┃┃┃┃╋┃┃\n";
print "┃┏┓┏┫┗━┛┃┏┛┏┛┃┏━━┫┏━━┫┏━━┛┃┃┃┃┃┃┃┗━┛┃\n";
print "┃┃┃┗┫┏━┓┣┛━┗━┫┗━━┫┃╋╋┃┗━━┳┛┗┛┣┫┣┫┏━┓┃\n";
print "┗┛┗━┻┛╋┗┻━━━━┻━━━┻┛╋╋┗━━━┻━━━┻━━┻┛╋┗┛\n";
print "====================================\n";
echo "Masukkan No Internet/Indihome ? \nInput : ";
$noindihome = trim(fgets(STDIN));

$gasken = tagihanindihome($noindihome);
print $gasken;
