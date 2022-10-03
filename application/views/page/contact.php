<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/sobad-style.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bootstrap-4/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper bg-contact" style="background:url(" <?= base_url('assets') ?>/img/bg-contact.png");">
        <div class="container">
            <div class="col-12">
                <div class="col-6 mr-auto ml-auto text-center">
                    <img class="bg-light rounded-circle mt-5" src="<?= base_url('assets') ?>/img/sobad-logo-circle.png" alt="" style="width: 80px;">
                    <p class="white">@soloabadi</p>
                </div>
                <div class="col-md-6 mt-5 mr-auto ml-auto text-center">
                    <button class="btn btn-white border-sm-white white rounded-md w-100 mb-3">Light</button>
                    <button class="btn btn-white border-sm-white white rounded-md w-100 mb-3">Kursi Antropometri</button>
                    <button class="btn btn-white border-sm-white white rounded-md w-100 mb-3">Metrisis</button>
                    <button class="btn btn-white border-sm-white white rounded-md w-100 mb-3">StuntingKit</button>
                    <button class="btn btn-white border-sm-white white rounded-md w-100 mb-3">Marketplace</button>
                    <button class="btn btn-white border-sm-white white rounded-md w-100 mb-3">Kontak</button>
                </div>
            </div>
            <div class="col-md-12  mr-auto ml-auto text-center">
                <span><a class="m-2" href=""> <img src="<?= base_url('assets') ?>/img/fb.png" alt=""></a class="m-2"></span>
                <span><a class="m-2" href=""> <img src="<?= base_url('assets') ?>/img/ig.png" alt=""></a class="m-2"></span>
                <span><a class="m-2" href=""> <img src="<?= base_url('assets') ?>/img/wa.png" alt=""></a class="m-2"></span>
                <span><a class="m-2" href=""> <img src="<?= base_url('assets') ?>/img/yt.png" alt=""></a class="m-2"></span>
                <span><a class="m-2" href=""> <img src="<?= base_url('assets') ?>/img/mail.png" alt=""></a></span>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery-3.min.js"></script>
    <script src="<?= base_url('assets') ?>/bootstrap-4/js/pooper.min.js"></script>
    <script src="<?= base_url('assets') ?>/bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>