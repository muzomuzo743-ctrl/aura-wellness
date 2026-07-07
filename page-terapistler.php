<?php
/*
Template Name: Terapistler Sayfasi
*/
include_once 'functions.php'; get_header(); ?>

<div class="subpage" style="padding-top: 120px;">
    <section class="section-padding">
        <div class="container">
            <div class="text-center">
                <span class="section-subtitle">Uzman Kadromuz</span>
                <h1 class="section-title">Profesyonel Terapistlerimiz</h1>
                <div class="title-divider center"></div>
                <p class="section-description">Her biri alanında sertifikalı, profesyonel ve tecrübeli ekibimizle tanışın. Tercih ettiğiniz terapistimizden doğrudan randevu alabilirsiniz.</p>
            </div>
            
            <div class="therapists-page-grid">
                <div class="therapist-selection-card">
                    <div class="therapist-image-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/gizem.jpg" alt="Terapist Gizem" class="therapist-portrait">
                    </div>
                    <div class="therapist-info-box">
                        <h2 class="therapist-name">Gizem Yılmaz</h2>
                        <span class="therapist-role">Medikal & Aromaterapi Uzmanı</span>
                        <p class="therapist-bio">10 yılı aşkın spa tecrübesiyle, derin doku masajı ve tetik nokta terapilerinde uzmanlaşmıştır. Vücut anatomisi ve kas ağrısı giderme odaklı seanslar yürütmektedir.</p>
                        <div class="therapist-skills">
                            <span>Medikal Terapi</span>
                            <span>Derin Doku</span>
                            <span>Aromaterapi</span>
                        </div>
                        <a href="https://wa.me/905364795252?text=Merhaba,%20Terapist%20Gizem%20Yılmaz%20ile%20seans%20ayarlamak%20istiyorum." target="_blank" class="btn-whatsapp-direct">
                            <i class="fab fa-whatsapp"></i> Gizem ile İletişime Geç
                        </a>
                    </div>
                </div>

                <div class="therapist-selection-card">
                    <div class="therapist-image-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/selin.jpg" alt="Terapist Selin" class="therapist-portrait">
                    </div>
                    <div class="therapist-info-box">
                        <h2 class="therapist-name">Selin Kaya</h2>
                        <span class="therapist-role">Klasik & Gevşeme Terapisti</span>
                        <p class="therapist-bio">Medikal ve klasik İsveç masaj teknikleriyle misafirlerine zihinsel ve fiziksel arınma sağlar. Stres azaltma ve bütünsel rahatlama terapilerinde tecrübelidir.</p>
                        <div class="therapist-skills">
                            <span>İsveç Masajı</span>
                            <span>Gevşeme Seansı</span>
                            <span>Refleksoloji</span>
                        </div>
                        <a href="https://wa.me/905306515006?text=Merhaba,%20Terapist%20Selin%20Kaya%20ile%20seans%20ayarlamak%20istiyorum." target="_blank" class="btn-whatsapp-direct">
                            <i class="fab fa-whatsapp"></i> Selin ile İletişime Geç
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>