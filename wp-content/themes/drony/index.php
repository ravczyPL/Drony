<?php get_header(); ?>
<main>
    <section class="hero">
        <h1>Profesjonalne nagrania z drona</h1>
        <a href="#kontakt" class="cta">Skontaktuj się</a>
    </section>
    <section id="o-mnie"><h2>O mnie</h2><p>Pasjonat ujęć lotniczych...</p></section>
    <section id="uslugi"><h2>Usługi</h2><p>Filmy reklamowe, nieruchomości...</p></section>
    <section id="portfolio"><h2>Portfolio</h2><p>Przykładowe ujęcia...</p></section>
    <section id="kontakt">
        <h2>Kontakt</h2>
        <?php echo do_shortcode('[contact-form-7 id="123" title="Formularz kontaktowy"]'); ?>
    </section>
</main>
<?php get_footer(); ?>
