<?php
/*
Template Name: Front page
*/
?>

<?php get_header(); ?>


<main class="content">
    <section class="promo">
        <div class="promo__bg">
            <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/src/static/app/img/promo_mobile.png" />
                <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri(); ?>/src/static/app/img/promo.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/promo.png" alt="" role="presentation" />
            </picture>
        </div>
        <div class="container">
            <div class="promo__container">
                <div class="promo__content">
                    <div class="section-subtitle">
                        <span><?php echo get_field('promo_subtitle'); ?></span>
                    </div>

                    <div class="promo__title">
                        <h1><?php echo get_field('promo_title'); ?></h1>
                    </div>

                    <div class="promo__text">
                        <p><?php echo get_field('promo_text'); ?></p>
                    </div>
                </div>

                <div class="promo__form">
                    <div class="promo__form-head">
                            <div class="promo__form-title">
                                <h2><?php echo get_field('form_title'); ?></h2>
                            </div>
                        
                            <div class="promo__form-text">
                                <p><?php echo get_field('form_description'); ?></p>
                            </div>
                    </div>

                    <?php include('contact-form.php'); ?>

                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
                <div class="section-title">
                    <h2><?php echo get_field('main_title'); ?></h2>
                </div>

            <?php if( have_rows('services_items') ) { ?>
                <div class="services__container">
                    <?php while( have_rows('services_items') ) { the_row(); ?>
                            <article class="services__item">
                                <div class="services__item-head">
                                    <div class="services__item-ico">
                                        <?php
                                            $item_icon = get_sub_field('item_icon');
                                            if ($item_icon) {
                                                echo '<img src="' . esc_url($item_icon) . '" alt="Logo">';
                                            }
                                        ?>
                                    </div>
                                    <div class="services__item-title">
                                        <h3><?php echo esc_html( get_sub_field('item_title') ); ?></h3>
                                    </div>
                                </div>

                                <div class="services__item-text">
                                    <p><?php echo esc_html( get_sub_field('item_description') ); ?></p>
                                </div>

                                <div class="services__item-link">
                                    <?php
                                        $link = get_sub_field('item_link');
                                        if ($link) {
                                            $title = esc_html($link['title']);
                                            echo '<a href="openPopup-form-popup">' . $title . '</a>';
                                        }
                                    ?>
                                </div>
                            </article>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <section class="reasons">
        <div class="container">
            <div class="reasons__container">
                <div class="section-subtitle">
                    <span><?php echo get_field('reason_subtitle'); ?></span>
                </div>

                <div class="reasons__title">
                    <h1><?php echo get_field('reason_title'); ?></h1>
                </div>
                
                <div class="reasons__text">
                    <p><?php echo get_field('reason_text'); ?></p>
                </div>

                <?php if( have_rows('reason_list') ) { ?>
                    <ul class="reasons__list">
                        <?php while( have_rows('reason_list') ) { the_row(); ?>
                            <li>
                                <?php
                                    $reason_item_icon = get_sub_field('reason_item_icon');
                                    $reason_item_text = get_sub_field('reason_item_text');
                                    if ($reason_item_icon && $reason_item_text) {
                                        echo '<img src="' . esc_url($reason_item_icon) . '" alt="icon" role="presentation"> '. esc_html($reason_item_text) . ' ';
                                    }
                                ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <div class="section-title">
                <h2><?php echo get_field('steps_title'); ?></h2>
            </div>

            <?php if( have_rows('steps_items') ) { ?>
                <div class="steps__container">
                    <?php while( have_rows('steps_items') ) { the_row(); ?>
                        <article class="steps__item">
                            <div class="steps__item-ico">
                                <?php
                                    $item_image = get_sub_field('item_image');
                                    if ($item_image) {
                                        echo '<img src="' . esc_url($item_image) . '" alt="icon" role="presentation">';
                                    }
                                ?>
                            </div>
                            <div class="steps__item-text">
                                <div class="steps__item-title">
                                    <h3><?php echo get_sub_field('item_title'); ?></h3>
                                </div>
                                <p><?php echo get_sub_field('item_text'); ?></p>
                            </div>
                            <div class="steps__item-num"></div>
                            <div class="steps__item-steps-side">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-side.svg" alt="" role="presentation">
                            </div>
                            <div class="steps__item-steps-bottom">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-bottom.svg" alt="" role="presentation">
                            </div>
                            <div class="steps__item-steps-mobile">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-mobile.svg" alt="" role="presentation">
                            </div>
                        </article>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
</main>


<?php get_footer(); ?>