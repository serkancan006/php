<?php require_once('config.php') ?>
<?php include('partials/_header.php') ?>
<?php include('partials/_navbar.php') ?>
<?php
$query = "SELECT * from hizmetler";
$result = mysqli_query($conn, $query);
$hizmetler = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($conn);
?>
<!-- Service Start -->
<div class="service mt-100">
    <div class="container">
        <div class="section-header">
            <h2>Hizmetlerimiz</h2>
            <p>
                Siber güvenlik sektöründe, müşterilerimizin farklı ihtiyaçlarına göre çeşitli hizmetler sunuyoruz. İşte sunduğumuz bazı siber güvenlik hizmetleri: </p>
        </div>
        <div class="row">
            <?php foreach ($hizmetler as $hizmet) : ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="ion-ios-desktop"></i>
                        </div>
                        <div class="service-detail">
                            <h4><a href=""><?php echo $hizmet["title"]; ?></a></h4>
                            <p>
                                <?php echo $hizmet["content"]; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <h4>Bunların yanı sıra, Passwords Attack, Birthday Attack, Wannacry, Notpetya, Dns Poisioning, TearDrop, Land Attack, SYN Flood, Ping-of-Death, Ping Flood, Fraggle, Smurf, DRDoS gibi diğer siber saldırı türlerine karşı da müşterilerimize güvenliği sağlamak için çeşitli önlemler alıyoruz.</h4>
        </div>
    </div>
</div>
<!-- Service End -->

<?php include('partials/_footer.php') ?>