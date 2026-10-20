<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="container hero__inner">
            <h1 class="hero__title">Websites that bring customers through the door.</h1>
            <p class="hero__text">
                Brightpath Digital designs fast, mobile-first websites and runs
                online marketing for small businesses across West Africa.
            </p>
            <div class="hero__actions">
                <a class="btn btn--primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get a Free Quote</a>
                <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">See Our Services</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>