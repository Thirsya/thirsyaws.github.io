<html>
    <head>
        <title> Data Product</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <div class="container d-flex align-items-center flex-column">
                <h1 class="masthead-heading text-uppercase mb-0">Thirsya Widya Sulaiman</h1>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <p class="masthead-subheading font-weight-light mb-0">TI 2G - 2041720233 - 25</p>
            </div>
    </head>
    <body>
        <h2 align="center">TABEL PRODUK</h2>
        <table>
            <tr>
                <th> Id </th>
                <th> Nama Produk </th>
                <th> Harga </th>
            </tr>
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM product";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td> <?php echo $row['id']?></td>
                <td> <?php echo $row['product_name']?></td>
                <td> <?php echo $row['harga']?></td>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
        </table>
    </body>
</html>