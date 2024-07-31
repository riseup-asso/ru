<?php

use Drupal\Core\Form\FormStateInterface;

/**
 * @file
 * Custom setting for ta_rayse_up theme.
 */
function ta_rayse_up_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {

  // Settings under social tab.
   
   // Social -> mail.
   $form['social']['mail'] = [
     '#type'        => 'details',
     '#title'       => t("Mail"),
   ];
   $form['social']['mail']['mail_url'] = [
     '#type'          => 'textfield',
     '#title'         => t('Mail'),
     '#description'   => t("Enter your mail. Leave the mail field blank to hide this icon."),
     '#default_value' => theme_get_setting('mail_url', 'ta_rayse_up'),
   ];
      $form['social']['tiktok'] = [
     '#type'        => 'details',
     '#title'       => t("TikTok"),
   ];
    $form['social']['tiktok']['tiktok_url'] = [
     '#type'          => 'textfield',
     '#title'         => t('TikTok'),
     '#description'   => t("Enter your tiktok url. Leave the mail field blank to hide this icon."),
     '#default_value' => theme_get_setting('tiktok_url', 'ta_rayse_up'),
   ];

}
