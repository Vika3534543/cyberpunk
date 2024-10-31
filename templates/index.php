<?php /* Template Name: index */ ?>
<?php
$crb_background_img = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_background_img'), 'full');
$headerTitle = carbon_get_post_meta(get_the_ID(), 'crb_header_title');
$buttonTitle = carbon_get_post_meta(get_the_ID(), 'crb_button_title');

$descriptionTitle = carbon_get_post_meta(get_the_ID(), 'crb_description_title');
$gameName = carbon_get_post_meta(get_the_ID(), 'crb_game_name');
$gameDescription = carbon_get_post_meta(get_the_ID(), 'crb_game_description');
$crb_img_game_screen = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_game_screen'), 'full');
$crb_game_second_screen = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_game_second_screen'), 'full');
$crb_game_third_screen = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_game_third_screen'), 'full');

$crb_sale = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_sale'), 'full');
$crb_sale_title = carbon_get_post_meta(get_the_ID(), 'crb_sale_title');
$crb_sale_description = carbon_get_post_meta(get_the_ID(), 'crb_sale_description');
$crb_placeholder_name = carbon_get_post_meta(get_the_ID(), 'crb_placeholder_name');
$crb_placeholder_email = carbon_get_post_meta(get_the_ID(), 'crb_placeholder_email');
$crb_placeholder_add_screen = carbon_get_post_meta(get_the_ID(), 'crb_placeholder_add_screen');
$crb_placeholder_add_formate = carbon_get_post_meta(get_the_ID(), 'crb_placeholder_add_formate');
$crb_button_send_title = carbon_get_post_meta(get_the_ID(), 'crb_button_send_title');
$crb_data_processing = carbon_get_post_meta(get_the_ID(), 'crb_data_processing');
$crb_image_present = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_image_present'), 'full');

$crb_main_image = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_main_image'), 'full');
$crb_company_image = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_company_image'), 'full');
$crb_company_second_image = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_company_second_image'), 'full');
$crb_company_third_image = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_company_third_image'), 'full');
$crb_block_title = carbon_get_post_meta(get_the_ID(), 'crb_block_title');
$crb_block_subtitle = carbon_get_post_meta(get_the_ID(), 'crb_block_subtitle');
$crb_advantages_icon = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_advantages_icon'), 'full');
$crb_advantages_title = carbon_get_post_meta(get_the_ID(), 'crb_advantages_title');
$crb_advantages_second_icon = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_advantages_second_icon'), 'full');
$crb_advantages_second_title = carbon_get_post_meta(get_the_ID(), 'crb_advantages_second_title');
$crb_advantages_third_icon = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_advantages_third_icon'), 'full');
$crb_advantages_third_title = carbon_get_post_meta(get_the_ID(), 'crb_advantages_third_title');
$crb_advantages_more = carbon_get_post_meta(get_the_ID(), 'crb_advantages_more');

$crb_purchase_main_image = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_purchase_main_image'), 'full');
$crb_purchase_title = carbon_get_post_meta(get_the_ID(), 'crb_purchase_title');
$crb_purchase_subtitle = carbon_get_post_meta(get_the_ID(), 'crb_purchase_subtitle');
$crb_purchase_contain_img = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_purchase_contain_img'));
$crb_purchase_contain_text = carbon_get_post_meta(get_the_ID(), 'crb_purchase_contain_text');
$crb_purchase_contain_second_img = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_purchase_contain_second_img'));
$crb_purchase_contain_second_text = carbon_get_post_meta(get_the_ID(), 'crb_purchase_contain_second_text');
$crb_purchase_contain_third_img = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_purchase_contain_third_img'));
$crb_purchase_contain_third_text = carbon_get_post_meta(get_the_ID(), 'crb_purchase_contain_third_text');
$crb_purchase_choice = carbon_get_post_meta(get_the_ID(), 'crb_purchase_choice');
$crb_platform_image = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_platform_image'));
$crb_platform_second_image = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_platform_second_image'));
$crb_platform_third_image = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_platform_third_image'));
$crb_platform_forth_image = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_platform_forth_image'));

$button_color = carbon_get_post_meta(get_the_ID(), 'button_color');
$send_button_color = carbon_get_post_meta(get_the_ID(), 'send_button_color');
$button_color_more = carbon_get_post_meta(get_the_ID(), 'more_button_color');
?>

<?php get_header(); ?>
<img src=" <?php echo $crb_background_img; ?>" class="background" alt=""
     loading="lazy"/>
<div class="available-block">
    <div class="container">
        <div class="available">
            <div class="title">
                <?php
                echo $headerTitle;
                ?>
            </div>
            <button class="learn-more" type="button" style="background:<?php echo $button_color; ?>">
                <?php
                echo $buttonTitle;
                ?>
            </button>
        </div>
    </div>
</div>
<div class="description-block">
    <div class="container">
        <div class="text">
            <div class="title">
                <?php
                echo $descriptionTitle;
                ?>
            </div>
            <div class="description">
                <span>
                     <?php
                     echo $gameName;
                     ?>
                </span>
                <?php
                echo $gameDescription;
                ?>
            </div>
        </div>
        <div class="description-images">
            <div class="item-description-left">
                <img loading="lazy" src="<?php echo $crb_img_game_screen; ?>" alt=""/ >
                <img loading="lazy" src="<?php echo $crb_game_second_screen; ?>" alt=""/>
            </div>
            <div class="item-description-right">
                <img loading="lazy" src="<?php echo $crb_game_third_screen; ?>" alt=""/>
            </div>
        </div>
    </div>
</div>
<div class="play-block">
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line.png" alt=""/>
    </div>
    <div class="container">
        <div class="play-description-mobile">
            <div>
                <div class="title flex">
                    <div>
                        <img loading="lazy" src="<?php echo $crb_sale ?>" alt=""/>
                    </div>
                    <div class="present-mobile">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/ps.png"
                             alt=""/>
                    </div>
                    <div>
                        <?php
                        echo $crb_sale_title; ?>
                    </div>
                </div>
                <div class="play-description">
                    <?php echo $crb_sale_description ?>
                </div>
                <div class="play-add-info flex">
                    <div class="form">
                        <input type="text" placeholder=" <?php echo $crb_placeholder_name ?>"
                               class="play-add-info-input">
                        <input type="email" placeholder=" <?php echo $crb_placeholder_email ?>"
                               class="play-add-info-input">
                        <button class="add-screen" onclick="document.getElementById('getFile').click()">
                    <span class="add">
                        <?php echo $crb_placeholder_add_screen ?>
                    </span>
                            <span class="formate">
                                     <?php echo $crb_placeholder_add_formate ?>
                   </span></button>
                        <input type='file' id="getFile" style="display:none">
                        <button class="send" type="button" style="background: <?php echo $send_button_color ?> ">
                            <?php echo $crb_button_send_title ?>
                        </button>
                        <div class="processing">
                            <label>
                                <input type="checkbox">
                                <span></span>
                                <p>
                                    <?php echo $crb_data_processing ?>
                                </p>
                            </label>
                        </div>
                    </div>
                    <div class="present">
                        <img loading="lazy" src="<?php echo $crb_image_present; ?>"
                             alt=""/>
                    </div>
                </div>
            </div>
            <div class="mobile-images">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/xbox-x.png" alt=""/>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/ps-5.png" alt=""/>
            </div>
        </div>
    </div>
    <div class="bottom-line">
        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-line.png" alt=""/>
    </div>
</div>
<div class="immersion-block">
    <div class="container">
        <div class="immersion-content flex">
            <div>
                <img loading="lazy" src="<?php echo $crb_main_image; ?>"
                     alt=""/>
                <div class="icons flex">
                    <img loading="lazy" src="<?php echo $crb_company_image; ?>" alt=""/>
                    <img loading="lazy" src="<?php echo $crb_company_second_image; ?>"
                         alt=""/>
                    <img loading="lazy" src="<?php echo $crb_company_third_image; ?>"
                         alt=""/>
                </div>
            </div>
            <div class="text">
                <div class="title">
                    <?php echo $crb_block_title ?>
                </div>
                <div class="description">
                    <?php echo $crb_block_subtitle ?>
                </div>
                <div class="advantages">
                    <div class="item flex">
                        <img loading="lazy" src="<?php echo $crb_advantages_icon; ?>"
                             alt=""/>
                        <div><?php echo $crb_advantages_title; ?></div>
                    </div>
                    <div class="item flex">
                        <img loading="lazy" src="<?php echo $crb_advantages_second_icon; ?>"
                             alt=""/>
                        <div><?php echo $crb_advantages_second_title; ?></div>
                    </div>
                    <div class="item flex">
                        <img loading="lazy" src="<?php echo $crb_advantages_third_icon; ?>"
                             alt=""/>
                        <div><?php echo $crb_advantages_third_title; ?></div>
                    </div>
                </div>
                <button class="more" type="button"
                        style="background:<?php echo $button_color_more; ?>"><?php echo $crb_advantages_more; ?></button>
            </div>
        </div>

    </div>
</div>
<div class="purchase-block">
    <div class="container">
        <div class="content flex">
            <div class="purchase-block-left">
                <img loading="lazy" src="<?php echo $crb_purchase_main_image; ?>"
                     alt=""/>
            </div>
            <div class="purchase-description">
                <div class="title">
                    <?php echo $crb_purchase_title; ?>
                </div>
                <div class="subtitle">
                    <div class="case-description">
                        <?php echo $crb_purchase_subtitle; ?>
                    </div>
                    <div class="item flex">
                        <img loading="lazy" src="<?php echo $crb_purchase_contain_img; ?>"
                             alt=""/>
                        <div>
                            <?php echo $crb_purchase_contain_text; ?>
                        </div>
                    </div>
                    <div class="item flex">
                        <img loading="lazy" src="<?php echo $crb_purchase_contain_second_img; ?>"
                             alt=""/>
                        <div>
                            <?php echo $crb_purchase_contain_second_text; ?>
                        </div>
                    </div>
                    <div class="item flex">
                        <img loading="lazy"
                             src="<?php echo $crb_purchase_contain_third_img; ?>" alt=""/>
                        <div>
                            <?php echo $crb_purchase_contain_third_text; ?>
                        </div>
                    </div>
                </div>
                <div class="choice">
                    <div class="choice-title">
                        <?php echo $crb_purchase_choice; ?>
                    </div>
                    <div class="grid">
                        <div>
                            <img loading="lazy" src="   <?php echo $crb_platform_image; ?>"
                                 alt=""/>
                        </div>
                        <div>
                            <img loading="lazy"
                                 src="   <?php echo $crb_platform_second_image; ?>" alt=""/>
                        </div>
                        <div>
                            <img loading="lazy"
                                 src="   <?php echo $crb_platform_third_image; ?>" alt=""/>
                        </div>
                        <div>
                            <img loading="lazy" src="   <?php echo $crb_platform_forth_image; ?>"
                                 alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
