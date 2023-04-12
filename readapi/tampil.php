
<?php
function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/PROJECT/dbrest/api/api_tampil.php");
$data = json_decode($data, TRUE); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tampil Barang</title>
        <link rel="stylesheet" href="../layout/css/style.css"> </head>

    <body>
        <div class="wrap">
            <div class="header">
                <h1>UI API</h1> </div>
            <div class="menu">
                <ul>
                    <li><a href="./tampil.php">Home</a></li>
                </ul>
            </div>
            <div class="badan">
                <div class="sidebar">
                    <ul>
                        <li><a href="./tampil.php">Produk</a></li>
                        <li><a href="./about.php">About</a></li>
                    </ul>
                </div>
                <div class="content">
                    <p>DATA PRODUK</p> <a href="./tambah.php">Tambah Data</a>
					<p></p>
                    <table style="width:100%">
                        <tr>
							<td align = "center">ID</td>
                            <td align = "center">NAMA PRODUK</td>
							<td align = "center">TIPE PRODUK</td>
                            <td align = "center">STOK</td>
                            <td align = "center">AKSI</td>
                        </tr>
                        <?php foreach ($data as $data) { ?>
                            <tr>
                                <td>
                                    <?= $data["id"] ?>
                                </td>
                                <td>
                                    <?= $data["nama_produk"] ?>
                                </td>
                                <td>
                                    <?= $data["tipe_produk"] ?>
                                </td>
								<td>
                                    <?= $data["stok"] ?>
                                </td>
                                <td colspan="2"> <a href="../readapi/edit.php?id=<?= $data['id'] ?>">Edit</a> <a href="../api/api_hapus.php?id=<?= $data['id'] ?>">Hapus</a> </td>
                            </tr>
                            <?php } ?>
                    </table>
                </div>
            </div>
            <div class="clear"></div>
            <div class="footer">
			<p align = "center">rhmtmustaqim</p>
            </div>
        </div>
    </body>
    </html>