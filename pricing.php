<?php require_once('config.php') ?>
<?php include('partials/_header.php') ?>
<?php include('partials/_navbar.php') ?>
<?php
$query = "SELECT * FROM tblpaketler INNER JOIN tblpaketicerik ON tblpaketler.icerikid = tblpaketicerik.id;";
$result = mysqli_query($conn, $query);
$paketler = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo $paketler;
mysqli_close($conn);
?>

<!--Pricing start-->
<div class="pricing mt-100">
    <div class="container">
        <div class="section-header">
            <h2>Fiyatlar</h2>
            <p>
                Size Uygun Paketler ile hizmetinizdeyiz
            </p>
        </div>
        <div class="row">
            <?php foreach ($paketler as $paket) : ?>
                <div class="col-md-4">
                    <div class="price-content features-price">
                        <div class="price-plan">
                            <p class="price-title"><?php echo $paket["paketadi"]; ?></p>
                            <h2 class="price-amount"><span>₺</span><?php echo intval($paket["paketfiyat"]); ?><span>.00</span><span> / <?php echo $paket["pakettime"]; ?></span></h2>
                        </div>
                        <ul class="price-details">
                            <li><i></i><strong><?php echo $paket["icerik1"]; ?></strong></li>
                            <li><i></i><strong><?php echo $paket["icerik2"]; ?></strong></li>
                            <li><i></i><strong><?php echo $paket["icerik3"]; ?></strong></li>
                            <li><i></i><strong><?php echo $paket["icerik4"]; ?></strong></li>
                            <li><i></i><strong><?php echo $paket["icerik5"]; ?></strong></li>
                            <li><i></i><strong><?php echo $paket["icerik6"]; ?></strong></li>
                            <li><i></i><strong><?php echo $paket["icerik7"]; ?></strong></li>
                            <li><i></i><strong><?php echo $paket["icerik8"]; ?></strong></li>
                        </ul>
                        <a href="#" class="btn mian-btn price-btn features-price-btn">Satın Al</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--Pricing End-->

<?php include('partials/_footer.php') ?>