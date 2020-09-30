<?PHP
header("Content-Type: application/json");
$servername = "localhost";
$username = "root";
$password = ""; //"sikd";
$dbname = "jdih";
$port = "3306";
$varjson = array();
$row_array = (object)array();
$conn = new mysqli($servername.":".$port, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="select * from produk_jdih" ; //sesuaikan dengan tabel utama peraturan dan tabel relasi dari tabel utama jika ada
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$row_array->idData=$row["id_jdihproduk"]; //berisi id dokumen
$row_array->tahun_pengundangan=$row["jdihproduk_terbit"]; //berisi tahun penetapan atau tahun terbit ex. 2019
$row_array->tanggal_pengundangan=$row["-"]; //berisi tahun bulan tanggal (YYYY-MM-DD) ex. 2019-04-22
$row_array->jenis=$row["jdihproduk_jenis"]; //berisi jenis peraturan ex. Peraturan Daerah
$row_array->noPeraturan=$row["jdihproduk_noperaturan"]; //berisi no peraturan ex. 24
$row_array->judul=$row["jdihproduk_judul"];
$row_array->noPanggil=$row["-"]; //khusus untuk monografi/buku
$row_array->singkatanJenis=$row["jdihproduk_singkatan"]; //berisi singkatan dari jenis ex. Perda
$row_array->tempatTerbit=$row["jdihproduk_tempatpenetapan"]; //berisi tempat terbit
$row_array->penerbit=$row["-"]; //untuk dokumen bertipe monografi
$row_array->deskripsiFisik=$row["jdihproduk_deskripsibibliografi"]; //khusus untuk monografi/buku
$row_array->sumber=$row["jdihproduk_sumberperaturan"]; //Lembar daerah atau menyesuaikan
$row_array->subjek=$row["jdihproduk_subjek"]; //Kata kunci dari dokumen hukum
$row_array->isbn=$row["-"]; //khusus untuk monografi/buku
$row_array->status=$row["jdihproduk_status"]; //berisi status perundang undangan
$row_array->bahasa=$row["-"]; //indonesia atau inggris
$row_array->bidangHukum=$row["jdihproduk_bidanghukum"]; //pembidangan dokumen hukum
$row_array->teuBadan=$row["jdihproduk_sumberperaturan"]; //nama instansi terkait
$row_array->nomorIndukBuku=$row["-"]; //khusus untuk monografi/buku
$row_array->fileDownload=$row["jdihproduk_file"]; //berisi nama file ex. peraturan.pdf, peraturan.docx
//$row_array->urlDownload=$row["url"]; //sesuaikan pointing ke lokasi direktori storage file download
$row_array->urlDownload='localhost/produkhukum/'.$row['jdihproduk_file']; //berisi url dan nama file ex. domain.com/peraturan.pdf
//$row_array->urlDownload='http://jdih.instansi.go.id/ildis/www/storage/document/'.$file; //
$row_array->urlDetailPeraturan=$row["-"]; //berisi link peraturan
$row_array->operasi="4";
      $row_array->display="1";
      array_push($varjson,json_decode(json_encode($row_array)));
    }
    echo json_encode($varjson);
} else {
    echo "0 results";
}
$conn->close();
            ?>