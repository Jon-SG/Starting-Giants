<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Contact Formulier verzenden',
	'heading' => 'Nieuw formulier verzenden',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Ingeschakeld',
		'checkbox_unchecked' => 'Uitgeschakeld',
		'submitted_from' => 'Formulier verzonden op website: %s',
		'submitted_by' => 'IP-adres van bezoeker: %s',
		'too_many_submissions' => 'Te veel recente inzendingen van dit IP',
		'failed_to_send_email' => 'Verzenden van e-mail is mislukt',
		'invalid_reCAPTCHA_private_key' => 'Ongeldige reCAPTCHA-privécode.',
		'invalid_reCAPTCHA2_private_key' => 'Ongeldige persoonlijke reCAPTCHA 2.0-code.',
		'invalid_reCAPTCHA2_server_response' => 'Ongeldige reCAPTCHA 2.0-serverreactie.',
		'invalid_field_type' => 'Onbekend veldtype %s.',
		'invalid_form_config' => 'Het veld %s heeft een ongeldige configuratie.',
		'unknown_method' => 'Onbekende serveraanvraagmethode'
	),
	'email' => array(
		'from' => '206726@11.nu',
		'to' => '206726@11.nu'
	),
	'recaptcha2' => array(
		'private_key' => '$cvbn01!'
	),
	'fields' => array(
		'custom_U2442' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Naam',
			'required' => true,
			'errors' => array(
				'required' => 'Veld Naam is vereist.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'E-mailadres',
			'required' => true,
			'errors' => array(
				'required' => 'Veld E-mailadres is vereist.',
				'format' => 'Veld E-mailadres bevat een ongeldig e-mailadres.'
			)
		),
		'custom_U2436' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Bericht',
			'required' => false,
			'errors' => array(
			)
		),
		'g-recaptcha-response' => array(
			'order' => 5,
			'type' => 'recaptcha2',
			'label' => 'Afbeeldingsverificatie',
			'required' => true,
			'errors' => array(
				'required' => 'Veld Afbeeldingsverificatie is vereist.',
				'format' => 'Ongeldige reCAPTCHA 2.0-waarde.'
			)
		),
		'custom_U2495' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Mobiel',
			'required' => true,
			'errors' => array(
				'required' => 'Veld Mobiel is vereist.'
			)
		)
	)
);

process_form($form);
?>
