<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title><?php echo $title;?> | 鹿鯊工作室</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $title;?> | 鹿鯊工作室">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/bootstrap-table@1.18.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/btn-rnrs.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.1/dist/bootstrap-table.min.js"></script>
    <meta property="og:locale" content="zh_TW"/>
    <meta http-equiv="pragma" content="no-cache">
    <meta name="author" content="">
    <meta name="robots" content="noindex,nofollow">
    <!-- icons -->
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" sizes="192x192" href="">
    <style>
        section.banner-container {
            background: url(../timthumb.php?h=1080&w=1920&zc=1&src=./assets/img/<?php echo $bg;?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            position: fixed;
            z-index: -1;
            opacity: 0.5;
        }
    </style>
</head>

<body><!-- container-fluid -->
    <section class="header-container">
        <section class="banner-container"></section>
        <section class="nav-container container font-weight-bold" id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="../" id="logo">鹿鯊工作室</a>
                    <a class="navbar-brand" href="<?php echo $url;?>" id="product"><?php echo $title;?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php echo $nav;?>
                    </ul>
                    </div>
                </div>
            </nav>
        </section>
        <div class="header-container-text d-flex justify-content-center align-self-center">
            <h1 class="header-container-title"><?php echo $main_title;?></h1>
        </div>
    </section>

    <section class="scrolltop-btn" id="scrolltop">
        <a href="#" class="btn btn-rnrs"><i class="fas fa-arrow-up"></i></a>
        <a href="#info-toc" class="btn btn-rnrs"><i class="fas fa-list-ol"></i></a>
        <a href="#navbar" class="btn btn-rnrs" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></a>
    </section>
    

