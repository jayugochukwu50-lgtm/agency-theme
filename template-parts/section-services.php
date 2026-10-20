<?php
$services = array(
    array(
        'title' => 'Web Design',
        'text'  => 'Fast, mobile-first websites that make your business look trusted.',
    ),
    array(
        'title' => 'Digital Marketing',
        'text'  => 'Social media and Google Ads management that brings in enquiries.',
    ),
    array(
        'title' => 'Brand Identity',
        'text'  => 'Logos, colours and style guides that people remember.',
    ),
);
?>

<section class="services">
    <div class="container">
        <h2 class="services__title">What We Do</h2>
        <div class="services__grid">
            <?php foreach ( $services as $service ) : ?>
                <article class="service-card">
                    <h3 class="service-card__title"><?php echo esc_html( $service['title'] ); ?></h3>
                    <p class="service-card__text"><?php echo esc_html( $service['text'] ); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>