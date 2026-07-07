<footer class="footer">
    <div class="container footer-container">
        <div class="footer-brand">
            <div class="logo-main">AURA WELLNESS</div>
            <p>Yaşam alanınızda profesyonel mobil masaj ve bütünsel sağlık hizmeti sunan spa platformu.</p>
            <div class="social-links">
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
        <div class="footer-links">
            <h4>Hızlı Linkler</h4>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#home">Anasayfa</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#about">Hakkımızda</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#services">Hizmetlerimiz</a></li>
                <li><a href="<?php echo esc_url(home_url('/terapistlerimiz/')); ?>">Terapistlerimiz</a></li>
            </ul>
        </div>
        <div class="footer-newsletter">
            <h4>Bize Ulaşın</h4>
            <p>Hizmet bölgelerimiz, fiyat listemiz ve özel seanslar hakkında bilgi almak için bizimle doğrudan iletişime geçebilirsiniz.</p>
<a href="<?php echo esc_url(home_url('/terapistlerimiz/')); ?>" class="btn btn-primary footer-btn">
    <i class="fab fa-whatsapp"></i> WhatsApp'tan Yazın
</a>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Aura Wellness. Tüm Hakları Saklıdır.</p>
        </div>
    </div>
</footer>

<a href="<?php echo esc_url(home_url('/terapistlerimiz/')); ?>" class="floating-whatsapp" aria-label="Terapistlerimiz Sayfası">
    <i class="fab fa-whatsapp"></i>
    <span class="tooltip-text">Canlı Destek & Randevu</span>
</a>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.main-header');
    const hamburger = document.querySelector('.hamburger-menu');
    const navbar = document.querySelector('.navbar');

    // Scroll Effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Mobil Menu Toggle
    if(hamburger) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navbar.classList.toggle('active');
        });
    }

    // Navigasyon Kapatma
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navbar.classList.remove('active');
        });
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>