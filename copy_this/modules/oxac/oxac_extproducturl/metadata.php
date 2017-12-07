<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'			=>	'oxac_extproducturl',
    'title'			=>	array(
        'en'		=>	'External addresses for article details pages',
        'de'		=>	'Externe Adressen für Artikeldetailseiten',
    ),
    'description'	=>	array(
        'en'		=>	'Provides input forms in the article management in order to display an URL with a label on top of the article details page.',
        'de'		=>	'Stellt Eingabefelder in der Artikelverwaltung bereit, um eine Webadresse mit Beschriftung oben auf der Detailseite anzuzeigen.',
    ),
    'thumbnail'		=>	'',
    'version'		=>	'0.2.0',
    'author'		=>	'Johannes Ackermann',
    'url'			=>	'http://www.oxid-esales.com/',
    'email'			=>	'johannes.ackermann@oxid-esales.com',
    'controllers'	=>	array(

        // Core
        'oxac_extproducturl_setup'	=>	\OxidEsales\OxidAcademy\ExtProductUrl\Controller\ExtProductUrl_Setup::class,
    ),
    'blocks'		=>	array(

        // Admin back-end
        array(
            'template'	=> 'article_main.tpl',
            'block'		=> 'admin_article_main_form',
            'file'		=> 'views/blocks/admin/urlanddescription.tpl'
        ),

        // Pages
        array(
            'template'	=> 'page/details/inc/productmain.tpl',
            'block'		=> 'details_productmain_title',
            'file'		=> 'views/blocks/extproducturl_productmain.tpl'
        ),
    ),
    'events'		=> array(
        'onActivate'		=>	'\OxidEsales\OxidAcademy\ExtProductUrl\Controller\ExtProductUrl_Setup::onActivate',
        'onDeactivate'		=>	'\OxidEsales\OxidAcademy\ExtProductUrl\Controller\ExtProductUrl_Setup::onDeactivate',
    ),
);
