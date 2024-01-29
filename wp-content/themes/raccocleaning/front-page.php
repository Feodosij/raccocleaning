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

    <section class="reviews">
        <div class="container">
            <div class="section-title">
                <h2><?php echo get_field('reviews_title'); ?></h2>
            </div>

            <?php if( have_rows('reviews_items') ) { ?>
                <div class="swiper-container">
                    <div class="reviews__slider swiper swiper-pagination-mobile">
                        <div class="swiper-wrapper">
                            <?php while( have_rows('reviews_items') ) { the_row(); ?>
                                <div class="swiper-slide">
                                    <article class="reviews__item">
                                        <div class="reviews__item-info">
                                            <div class="reviews__item-author">
                                                <div class="reviews__item-author__avatar">
                                                    <?php
                                                        $review_photo = get_sub_field('review_photo');
                                                        if ($review_photo) {
                                                            echo '<img src="' . esc_url($review_photo) . '" alt="Avatar">';
                                                        }
                                                    ?>
                                                </div>

                                                <div class="reviews__item-author__name">
                                                    <h3><?php echo get_sub_field('review_name'); ?></h3>
                                                </div>
                                            </div>

                                            <div class="reviews__item-rating">
                                                <?php $rating = get_sub_field('reviews_rating');
                                                        $decimal_part = fmod($rating, 1);  ?>
                                                <div class="reviews__item-rating__stars rating-<?php echo floor(get_sub_field('reviews_rating')); ?> <?php if ($decimal_part === 0.5) echo 'rating-half'; ?>">
                                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                                                        <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                                                    </svg>
                                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                                                        <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                                                    </svg>
                                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                                                        <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                                                    </svg>
                                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                                                        <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                                                    </svg>
                                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                                                        <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                                                    </svg>
                                                </div>
                                                <span><?php echo get_sub_field('reviews_rating'); ?></span>
                                            </div>
                                        </div>

                                        <div class="reviews__item-content">
                                            <q><?php echo get_sub_field('reviews_text'); ?></q>
                                        </div>
                                    </article>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="swiper-buttons">
                        <div class="swiper-button-prev">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.255689 6.51423L4.62631 3.0358C5.07806 2.6857 5.75567 3.00192 5.75567 3.57789V4.74114C5.75567 5.11382 6.00413 5.44134 6.37682 5.44134H13.3224C13.6951 5.44134 14 5.71239 14 6.09637V7.92593C14 8.28733 13.6951 8.60355 13.3224 8.60355H6.37682C6.00413 8.60355 5.75567 8.89729 5.75567 9.26987V10.4331C5.75567 10.9978 5.07806 11.314 4.6376 10.9639L0.278275 7.57583C-0.0831194 7.31608 -0.0944128 6.78528 0.255689 6.51423Z" fill="#BCDDD5" />
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.7443 6.51423L9.37369 3.0358C8.92194 2.6857 8.24433 3.00192 8.24433 3.57789V4.74114C8.24433 5.11382 7.99587 5.44134 7.62318 5.44134H0.677616C0.304927 5.44134 0 5.71239 0 6.09637V7.92593C0 8.28733 0.304927 8.60355 0.677616 8.60355H7.62318C7.99587 8.60355 8.24433 8.89729 8.24433 9.26987V10.4331C8.24433 10.9978 8.92194 11.314 9.3624 10.9639L13.7217 7.57583C14.0831 7.31608 14.0944 6.78528 13.7443 6.51423Z" fill="#BCDDD5" />
                            </svg>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <section class="faq" id="faq">
        <div class="container">
            <div class="section-title">
                <h2><?php echo get_field('faq_title'); ?></h2>
            </div>

                <div class="faq__container">
                    <div class="faq__list">
                        <?php if( have_rows('faq_accordion') ) { ?>
                            <div class="accordion-list">
                                <?php while( have_rows('faq_accordion') ) { the_row(); ?>
                                    <div class="accordion">
                                        <div class="accordion__head">
                                            <h3><?php echo get_sub_field('question'); ?></h3>
                                            <div class="accordion__ico">
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="accordion__ico-vertical" d="M7.5 15C7.30575 15 7.11946 14.9228 6.9821 14.7855C6.84474 14.6481 6.76758 14.4618 6.76758 14.2676V0.732422C6.76758 0.538172 6.84474 0.351877 6.9821 0.214521C7.11946 0.0771657 7.30575 0 7.5 0C7.69425 0 7.88054 0.0771657 8.0179 0.214521C8.15526 0.351877 8.23242 0.538172 8.23242 0.732422V14.2676C8.23242 14.4618 8.15526 14.6481 8.0179 14.7855C7.88054 14.9228 7.69425 15 7.5 15Z" fill="#4DA390" />
                                                    <path class="accordion__ico-horizontal" d="M14.2676 8.23242H0.732422C0.538172 8.23242 0.351877 8.15526 0.214521 8.0179C0.0771657 7.88054 0 7.69425 0 7.5C0 7.30575 0.0771657 7.11946 0.214521 6.9821C0.351877 6.84474 0.538172 6.76758 0.732422 6.76758H14.2676C14.4618 6.76758 14.6481 6.84474 14.7855 6.9821C14.9228 7.11946 15 7.30575 15 7.5C15 7.69425 14.9228 7.88054 14.7855 8.0179C14.6481 8.15526 14.4618 8.23242 14.2676 8.23242Z" fill="#4DA390" />
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="accordion__body">
                                            <div class="accordion__body-inner">
                                                <?php echo get_sub_field('answer'); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="faq__img">
                        <?php
                            $faq_image = get_field('faq_image');
                            if ($faq_image) {
                                echo '<img src="' . esc_url($faq_image) . '">';
                            }
                        ?>
                    </div>
                </div>
            
        </div>
    </section>
</main>

<?php get_footer(); ?>