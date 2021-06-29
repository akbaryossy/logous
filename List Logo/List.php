<html>
    <head>
        <title>Website Toko Online</title>
        <link rel='stylesheet' href='style.css'>
    </head>
<body>
        <nav id="menu">
            <ul>
            <div id="heading">
                <judul>LogoUS</judul>
               
            </div>
                    <li><a href="../index.php">Home</a><li>
                    <li><a href="../Tim Kami/index.php">Our Team</a><li></li>
                    <li><a href="../adminbaru/admin.php">login</a><li>
                </ul>
                
        </nav>
<div class='gambar'>
<?php 
                                    require '../koneksi.php';
                                $select = mysqli_query($koneksi, "SELECT * FROM product");
                                if($select->num_rows>0){
                                    $no=1;
                                while ($row = $select->fetch_array()) {
                                   
                                ?>
<div class='foto'>

<img src = '../adminbaru/gambar/<?php echo $row['gambar'] ?>' width ='350' height = '350'>
    <h1><?php echo $row['nama']?><br>
    <?php echo $row['harga']?></h1>
        <br>
    <a href=''>Beli Sekarang</a>
</div>
<?php }} ?>


    
</div>

<div class='footer'>
    <p>Copyright 2019 - <a href=''>LogoUS</a></p>
</div>


</body>
</html>