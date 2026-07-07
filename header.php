<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="main-header">
    <div class="container header-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <span class="logo-sub">AURA</span>
            <span class="logo-main">WELLNESS</span>
        </a>
        <nav class="navbar">
            <a href="<?php echo esc_url(home_url('/')); ?>#home" class="nav-link active">Anasayfa</a>
            <a href="<?php echo esc_url(home_url('/')); ?>#about" class="nav-link">Hakkımızda</a>
            <a href="<?php echo esc_url(home_url('/')); ?>#services" class="nav-link">Hizmetlerimiz</a>
            <a href="<?php echo esc_url(home_url('/terapistlerimiz/')); ?>" class="nav-link">Terapistlerimiz</a>
<a href="<?php echo esc_url(home_url('/terapistlerimiz/')); ?>" class="btn nav-cta cta-btn">
<a href="<?php echo esc_url(home_url('/terapistlerimiz/')); ?>" class="btn nav-cta cta-btn">
    <i class="fab fa-whatsapp"></i> Randevu Al
</a>
        </nav>
        <button class="hamburger-menu" aria-label="Menüyü Aç">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
</header>