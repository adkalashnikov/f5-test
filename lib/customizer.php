<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  // remove defaults
  $wp_customize->remove_panel( 'widgets' );
  $wp_customize->remove_section( 'static_front_page' );
  $wp_customize->remove_section( 'custom_css' );
  // remove nav menus
  remove_action( 'customize_controls_enqueue_scripts', array( $wp_customize->nav_menus, 'enqueue_scripts' ) );
  remove_action( 'customize_register', array( $wp_customize->nav_menus, 'customize_register' ), 11 );
  remove_filter( 'customize_dynamic_setting_args', array( $wp_customize->nav_menus, 'filter_dynamic_setting_args' ) );
  remove_filter( 'customize_dynamic_setting_class', array( $wp_customize->nav_menus, 'filter_dynamic_setting_class' ) );
  remove_action( 'customize_controls_print_footer_scripts', array( $wp_customize->nav_menus, 'print_templates' ) );
  remove_action( 'customize_controls_print_footer_scripts', array( $wp_customize->nav_menus, 'available_items_template' ) );
  remove_action( 'customize_preview_init', array( $wp_customize->nav_menus, 'customize_preview_init' ) );

  $transport = 'postMessage';

  // section
  if( $section = 'hero_section' ){

    $wp_customize->add_section( $section, [
      'title'     => 'Hero section',
      'priority'  => 200,
      'description' => 'Manage Hero section content',
    ] );

    // setting
    $setting = 'hero_title';
    $wp_customize->add_setting( $setting, [
      'default'    =>  'Lorem Ipsum dolor sit',
      'transport'  =>  $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section' => $section,
      'label'   => 'Title',
      'type'    => 'text',
    ] );

    // setting
    $setting = 'hero_text';
    $wp_customize->add_setting( $setting, [
      'default'    =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
      'transport'  =>  $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section' => $section,
      'label'   => 'Text',
      'type'    => 'text',
    ] );

    // setting
    $setting = 'hero_btn_text';
    $wp_customize->add_setting( $setting, [
      'default'    =>  'Make an appointment',
      'transport'  =>  $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section' => $section,
      'label'   => 'Button text',
      'type'    => 'text',
    ] );

    // setting
    $setting = 'hero_btn_link';
    $wp_customize->add_setting( $setting, [
      'default'    =>  '#',
      'transport'  =>  $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section' => $section,
      'label'   => 'Button link',
      'type'    => 'text',
    ] );
  }
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
