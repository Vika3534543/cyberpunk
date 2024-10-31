<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('post_meta', 'Menu')
        ->where('post_template', '=', 'templates/index.php')
        ->add_fields(array(
            Field::make('image', 'crb_background_logo', __('Logo')),
            Field::make('complex', 'menu_items', 'Menu items')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('image', 'image', 'Image'),
                )),
        ));

    Container::make('post_meta', 'Main block')
        ->where('post_template', '=', 'templates/index.php')
        ->add_fields(array(
            Field::make('image', 'crb_background_img', __('Background')),
            Field::make('text', 'crb_header_title', 'Header title'),
            Field::make('text', 'crb_button_title', 'Button title'),
            Field::make('color', 'button_color', 'Button Color'),
        ));

    Container::make('post_meta', 'Description block')
        ->where('post_template', '=', 'templates/index.php')
        ->add_fields(array(
            Field::make('text', 'crb_description_title', 'Header title'),
            Field::make('text', 'crb_game_name', 'Game name'),
            Field::make('text', 'crb_game_description', 'Game description'),
            Field::make('image', 'crb_game_screen', __('Game screen')),
            Field::make('image', 'crb_game_second_screen', __('Game screen')),
            Field::make('image', 'crb_game_third_screen', __('Game screen')),
        ));

    Container::make('post_meta', 'Sale block')
        ->where('post_template', '=', 'templates/index.php')
        ->add_fields(array(
            Field::make('image', 'crb_sale', __('Sale image')),
            Field::make('text', 'crb_sale_title', 'Title'),
            Field::make('rich_text', 'crb_sale_description', 'Description'),
            Field::make('text', 'crb_placeholder_name', 'Placeholder'),
            Field::make('text', 'crb_placeholder_email', 'Placeholder'),
            Field::make('text', 'crb_placeholder_add_screen', 'Placeholder'),
            Field::make('text', 'crb_placeholder_add_formate', 'Placeholder'),
            Field::make('text', 'crb_button_send_title', 'Button title'),
            Field::make('color', 'send_button_color', 'Button Send Color'),
            Field::make('text', 'crb_data_processing', 'Data processing'),
            Field::make('image', 'crb_image_present', __('Present')),
        ));

    Container::make('post_meta', 'Immersion block')
        ->where('post_template', '=', 'templates/index.php')
        ->add_fields(array(
            Field::make('image', 'crb_main_image', __('Main image')),
            Field::make('image', 'crb_company_image', __('Company image')),
            Field::make('image', 'crb_company_second_image', __('Company image')),
            Field::make('image', 'crb_company_third_image', __('Company image')),
            Field::make('rich_text', 'crb_block_title', 'Title'),
            Field::make('rich_text', 'crb_block_subtitle', 'Description'),
            Field::make('image', 'crb_advantages_icon', __('Advantage icon')),
            Field::make('rich_text', 'crb_advantages_title', 'Title'),
            Field::make('image', 'crb_advantages_second_icon', __('Advantage icon')),
            Field::make('rich_text', 'crb_advantages_second_title', 'Title'),
            Field::make('image', 'crb_advantages_third_icon', __('Advantage icon')),
            Field::make('rich_text', 'crb_advantages_third_title', 'Title'),
            Field::make('text', 'crb_advantages_more', 'Button'),
            Field::make('color', 'more_button_color', 'Button More Color'),
        ));

    Container::make('post_meta', 'Immersion block')
        ->where('post_template', '=', 'templates/index.php')
        ->add_fields(array(
            Field::make('image', 'crb_purchase_main_image', __('Main image')),
            Field::make('rich_text', 'crb_purchase_title', 'Title'),
            Field::make('rich_text', 'crb_purchase_subtitle', 'Description'),
            Field::make('image', 'crb_purchase_contain_img', __('Image')),
            Field::make('rich_text', 'crb_purchase_contain_text', 'Description'),
            Field::make('image', 'crb_purchase_contain_second_img', __('Image')),
            Field::make('rich_text', 'crb_purchase_contain_second_text', 'Description'),
            Field::make('image', 'crb_purchase_contain_third_img', __('Image')),
            Field::make('rich_text', 'crb_purchase_contain_third_text', 'Title'),
            Field::make('rich_text', 'crb_purchase_choice', 'Title'),
            Field::make('image', 'crb_platform_image', __('Image')),
            Field::make('image', 'crb_platform_second_image', __('Image')),
            Field::make('image', 'crb_platform_third_image', __('Image')),
            Field::make('image', 'crb_platform_forth_image', __('Image')),
        ));

    Container::make('post_meta', 'Footer_menu')
        ->where('post_template', '=', 'templates/index.php')
        ->add_fields(array(
            Field::make('image', 'crb_footer_company', __('Logo company')),
            Field::make('image', 'crb_footer_second_company', __('Logo company')),
            Field::make('rich_text', 'crb_footer_documents', __('Text')),
            Field::make('rich_text', 'crb_footer_second_document', __('Text')),
            Field::make('rich_text', 'crb_footer_nda', __('Text')),
        ));
}