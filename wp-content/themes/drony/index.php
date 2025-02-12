<?php get_header(); ?>

<!-- Sekcja Hero -->
<section class="hero">
    <img src="path-to-your-image.jpg" alt="Drone">
    <div class="hero-text">
        <h1>Profesjonalne usługi nagrywania filmów dronem</h1>
        <p>Oferujemy nagrania dronem DJI Mini 3 w najwyższej jakości</p>
        <a href="#contact" class="btn">Skontaktuj się z nami</a>
    </div>
</section>

<!-- Sekcja Usług -->
<section class="services">
    <h2>Nasze usługi</h2>
    <div class="service">
        <img src="path-to-service-image.jpg" alt="Usługa 1">
        <h3>Nagrania w jakości 4K</h3>
        <p>Tworzymy profesjonalne filmy w wysokiej jakości 4K.</p>
    </div>
    <div class="service">
        <img src="path-to-service-image.jpg" alt="Usługa 2">
        <h3>Ujęcia z powietrza</h3>
        <p>Wykonujemy spektakularne ujęcia z lotu ptaka.</p>
    </div>
</section>

<!-- Sekcja Kontaktowa -->
<section id="contact" class="contact">
    <h2>Skontaktuj się z nami</h2>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Imię" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Twoja wiadomość" required></textarea>
        <button type="submit">Wyślij wiadomość</button>
    </form>
</section>

<?php get_footer(); ?>
