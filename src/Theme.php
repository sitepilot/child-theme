<?php

namespace Sitepilot\Child;

use Sitepilot\Theme\Base;
use Sitepilot\Theme\Template;

class Theme extends Base
{
    /**
     * Construct theme.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        /* Filters */
        add_filter('sp_client_website', '__return_true');
        add_filter('sp_theme_layout', [$this, 'filter_theme_layout']);

        add_filter('sp_theme_primary_color', function () {
            return '#f59e0b';
        });

        add_filter('sp_theme_secondary_color', function () {
            return '#fbbf24';
        });
    }

    /**
     * Enqueue theme scripts and stylesheets.
     * 
     * @return void
     */
    public function action_enqueue_scripts(): void
    {
        parent::action_enqueue_scripts();

        wp_enqueue_script('font-awesome-5');

        wp_enqueue_style('sp-base', get_stylesheet_directory_uri() . '/assets/dist/css/base.css', [], $this->model->get_theme_version());
        wp_enqueue_style('sp-theme', get_stylesheet_directory_uri() . '/assets/dist/css/theme.css', [], $this->model->get_theme_version());
        wp_enqueue_script('sp-theme', get_stylesheet_directory_uri() . '/assets/dist/js/theme.js', array(), $this->model->get_theme_version(), true);

        wp_add_inline_style('sp-base', $this->get_theme_css());
    }

    /**
     * Filter theme layout.
     *
     * @return string
     */
    public function filter_theme_layout()
    {
        if (Template::get_template_id() || in_array(get_post_type(), ['sp-template'])) {
            return 'blocks';
        }
    }
}
