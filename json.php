<?php
include'koneksi.php';
$hasil  = mysqli_query($kon,"select*from pelanggan");
if(mysqli_num_rows($hasil) > 0 ){
  $response = array();
  $response["data"] = array();
  while($x = mysqli_fetch_array($hasil)){
    $h['id'] = $x["ID"];
    $h['nama'] = $x["Nama"];
    $h['alamat'] = $x["Alamat"];
    array_push($response["data"], $h);
  }
  echo json_encode($response);
}else {
  $response["message"]="tidak ada data";
  echo json_encode($response);
}
?>