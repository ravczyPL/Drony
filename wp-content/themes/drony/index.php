<?php get_header(); ?>

<main class="site-main">
    <!-- Sekcja Hero -->
    <section class="hero">
        <div class="hero-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt="Banner Dron">
            <div class="hero-content">
                <h1>Nowoczesne Nagrania Dronem</h1>
                <p>Profesjonalne filmy i zdjęcia z powietrza</p>
                <a href="#contact" class="btn">Skontaktuj się</a>
            </div>
        </div>
    </section>
    
    <!-- Sekcja Usług -->
    <section class="services">
        <div class="container">
            <h2>Nasze Usługi</h2>
            <div class="services-grid">
                <div class="service-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service1.jpg" alt="Nagrania 4K">
                    <h3>Nagrania 4K</h3>
                    <p>Profesjonalne filmy w jakości 4K.</p>
                </div>
                <div class="service-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service2.jpg" alt="Ujęcia z lotu ptaka">
                    <h3>Ujęcia z powietrza</h3>
                    <p>Spektakularne zdjęcia z lotu ptaka.</p>
                </div>
                <!-- Dodaj kolejne usługi według potrzeb -->
            </div>
        </div>
    </section>
    
    <!-- Sekcja Kontakt -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Kontakt</h2>
            <form action="" method="post" class="contact-form">
                <input type="text" name="name" placeholder="Twoje imię" required>
                <input type="email" name="email" placeholder="Twój email" required>
                <textarea name="message" placeholder="Twoja wiadomość" required></textarea>
                <button type="submit" class="btn">Wyślij</button>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>
