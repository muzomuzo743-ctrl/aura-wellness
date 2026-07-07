<?php include_once 'functions.php'; get_header(); ?>

<section id="home" class="hero-section" style="background-image: linear-gradient(rgba(17, 32, 28, 0.7), rgba(17, 32, 28, 0.5)), url('<?php echo get_template_directory_uri(); ?>/assets/hero-bg.jpg');">
    <div class="container hero-container">
        <div class="hero-content">
            <span class="hero-subtitle">Ev konforunda profesyonel terapi</span>
            <h1 class="hero-title">Ruhunuzu ve Bedeninizi <br>Evinizde Şifalandırın</h1>
            <p class="hero-description">Uzman terapistlerimiz tarafından sunulan mobil masaj ve bütünsel wellness hizmetleriyle, stresinizden arının, enerjinizi tazeleyin.</p>
            <div class="hero-actions">
                <a href="<?php echo esc_url(home_url('/terapistlerimiz/')); ?>" class="btn btn-primary">
                    <i class="fab fa-whatsapp"></i> Hemen Randevu Al
                </a>
                <a href="#services" class="btn btn-outline">Hizmetlerimizi İncele</a>
            </div>
        </div>
        <div class="hero-features">
            <div class="feature-item">
                <i class="fas fa-certificate"></i>
                <span>Sertifikalı Uzman Terapistler</span>
            </div>
            <div class="feature-item">
                <i class="fas fa-home"></i>
                <span>Kendi Evinizde & Otelinizde Hizmet</span>
            </div>
            <div class="feature-item">
                <i class="fas fa-leaf"></i>
                <span>%100 Doğal Aromaterapi Yağları</span>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section-padding">
    <div class="container about-grid">
        <div class="about-content">
            <span class="section-subtitle">Hikayemiz</span>
            <h2 class="section-title">Aura Wellness İle <br>Bütünsel Şifa</h2>
            <div class="title-divider"></div>
            <p class="about-text">Modern yaşamın getirdiği yoğun stres ve yorgunluğu geride bırakmanız için buradayız. Aura Wellness olarak, trafiğe çıkmanıza gerek kalmadan, spa deneyimini tamamen sterilize edilmiş ekipmanlarımızla yaşam alanınıza getiriyoruz.</p>
            <p class="about-text">Amacımız, sadece fiziksel rahatlama sağlamak değil; zihinsel ve ruhsal dengenizi de yeniden kurmanıza yardımcı olmaktır.</p>
            <ul class="about-benefits">
                <li><i class="fas fa-check"></i> Hijyenik ve Güvenli Hizmet</li>
                <li><i class="fas fa-check"></i> Kişiselleştirilmiş Basınç ve Teknik</li>
                <li><i class="fas fa-check"></i> Esnek Rezervasyon Saatleri</li>
                <li><i class="fas fa-check"></i> Mobil Spa Ekipman Desteği</li>
            </ul>
        </div>
        <div class="about-img-wrapper">
            <div class="img-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/about-massage.jpg" alt="Aura Wellness Masaj" class="about-img">
            </div>
        </div>
    </div>
</section>

<section id="services" class="section-padding bg-alt">
    <div class="container">
        <div class="text-center">
            <span class="section-subtitle">Neler Sunuyoruz?</span>
            <h2 class="section-title">Masaj & Wellness Hizmetlerimiz</h2>
            <div class="title-divider center"></div>
            <p class="section-description">İhtiyacınıza en uygun terapiyi seçin, uzman kadromuz kapınıza gelsin.</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <span class="service-badge">Popüler</span>
                <div class="service-icon"><i class="fas fa-spa"></i></div>
                <h3 class="service-name">Medikal Masaj</h3>
                <p class="service-desc">Kas ağrılarını gidermeye, kan dolaşımını hızlandırmaya ve vücuttaki kronik gerginliği azaltmaya odaklanan derin doku terapisi.</p>
                <div class="service-info">
                    <span class="duration"><i class="far fa-clock"></i> 60 / 90 Dakika</span>
                </div>
                <a href="<?php echo esc_url(home_url('/terapistlerimiz/')); ?>" class="btn btn-card-cta">Detay ve Rezervasyon</a>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-leaf"></i></div>
                <h3 class="service-name">Aromaterapi Masajı</h3>
                <p class="service-desc">Özel bitki özlerinden elde edilmiş esansiyel yağlar eşliğinde, hafif ve ritmik dokunuşlarla yapılan derin rahatlama masajı.</p>
                <div class="service-info">
                    <span class="duration"><i class="far fa-clock"></i> 60 / 90 Dakika</span>
                </div>
                <a href="<?php echo esc_url(home_url('/terapistlerimiz/')); ?>" class="btn btn-card-cta">Detay ve Rezervasyon</a>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-hot-tub"></i></div>
                <h3 class="service-name">İsveç Masajı</h3>
                <p class="service-desc">Vücudun tüm kas gruplarını gevşeterek günün yorgunluğunu atan, klasik ve tüm dünyada en çok tercih edilen gevşeme seansı.</p>
                <div class="service-info">
                    <span class="duration"><i class="far fa-clock"></i> 60 Dakika</span>
                </div>
                <a href="<?php echo esc_url(home_url('/terapistlerimiz/')); ?>" class="btn btn-card-cta">Detay ve Rezervasyon</a>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="section-padding">
    <div class="container">
        <div class="text-center">
            <span class="section-subtitle">Misafir Yorumları</span>
            <h2 class="section-title">Deneyimleyenler Ne Diyor?</h2>
            <div class="title-divider center"></div>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="testimonial-text">"Trafikte spa merkezine gitme stresi olmadan evimde masaj hizmeti almak harika bir lüks. Gelen terapist son derece profesyonel ve saygılıydı."</p>
                <div class="client-info"><span class="client-name">Elif Yılmaz</span><span class="client-title">Mimar</span></div>
            </div>
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="testimonial-text">"Sırt ve bel ağrılarım için medikal masaj talep ettim. İlk seanstan itibaren ciddi bir hafifleme hissettim. Kesinlikle düzenli olarak devam edeceğim."</p>
                <div class="client-info"><span class="client-name">Ahmet Demir</span><span class="client-title">Yazılımcı</span></div>
            </div>
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="testimonial-text">"Kullanılan yağların kokusu ve terapistin profesyonelliği harikaydı. Ev ortamında bu kadar kaliteli bir spa hizmeti alabileceğimi düşünmemiştim."</p>
                <div class="client-info"><span class="client-name">Zeynep Kaya</span><span class="client-title">İşletmeci</span></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>