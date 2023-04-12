
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
        <title>ABOUT</title>
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
					<h3>Created by rahmatmustaqim69</h3>
					<h1 align="center">Lorem Ipsum</h1>
					<h3 align="center">"Neque porro quisquam est ipsum quia dolor sit amet, consectetur, adipisci velit..."</h3>
					<h5 align="center">"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris diam lectus, rutrum convallis dignissim at, tempor sit amet nisl. Sed molestie nisi condimentum lectus rhoncus dictum. Suspendisse potenti. Duis nec pretium mi, eget venenatis ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc luctus quam id lectus placerat dictum. Quisque sed neque id diam accumsan facilisis vitae at purus. Suspendisse potenti. Maecenas iaculis risus non magna tincidunt, sit amet ullamcorper lorem tincidunt.</p>
					<p>Duis tristique ligula sit amet risus consequat, vel pharetra est tincidunt. Etiam nec luctus justo. Vestibulum a purus ultrices magna rhoncus accumsan. Nullam ornare non arcu sed vestibulum. Vestibulum sodales, magna ut sodales rhoncus, est quam viverra nibh, in bibendum felis libero sed urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu aliquam velit. Vestibulum cursus pharetra ipsum vel eleifend. Suspendisse elementum, urna quis faucibus consectetur, eros ligula feugiat sapien, eu tempus urna neque sed felis. Donec ac lacinia velit. Proin luctus, elit id lobortis hendrerit, ligula metus convallis felis, id ullamcorper odio lectus at odio. Maecenas hendrerit augue ipsum, eu rutrum dui iaculis vitae.</p>
					<p>In quis malesuada ante, nec viverra massa. In hac habitasse platea dictumst. Ut ultricies elementum sapien eu suscipit. Nunc gravida aliquet scelerisque. Aliquam ac nisi laoreet, luctus lacus in, rutrum ex. Morbi id nibh sed nisi ornare egestas. Nulla eu felis placerat, vulputate turpis nec, finibus risus. In ac varius erat, nec feugiat ante. Quisque non nisl eu ligula tempor consectetur. Pellentesque dignissim ac sapien vel viverra. Mauris dictum pretium velit nec placerat. Praesent a justo et libero aliquam fermentum id ut ipsum. Vivamus finibus maximus convallis.</p>
                </div>
            </div>
            <div class="clear"></div>
            <div class="footer">
			<p align = "center">rhmtmustaqim</p>
            </div>
        </div>
    </body>
    </html>