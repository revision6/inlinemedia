<?php

/**
 * Contao Open Source CMS, Copyright (C) 2005-2013 Leo Feyer
 *
 * Contao Module "inlinemedia"
 *
 * @copyright Rolf Schupfinger 2013 <http://www.revision6.de>
 * @author Rolf Schupfinger
 * @package inlinemedia
 * @license LGPL
 * @filesource
 */

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['inlinemedia'] = '{type_legend},type,inlinemedia_source;';
$GLOBALS['TL_DCA']['tl_content']['palettes']['inlinemediaivvimeo'] = '{type_legend},type,headline;{inlinemedia_legend},inlinemedia_source,inlinemedia_media_vi,inlinemedia_width,inlinemedia_height,inlinemedia_autoplay,inlinemedia_loop,inlinemedia_color,inlinemedia_params,inlinemedia_videocaption;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['inlinemediaivyoutube'] = '{type_legend},type,headline;{inlinemedia_legend},inlinemedia_source,inlinemedia_media_yt,inlinemedia_width,inlinemedia_height,inlinemedia_autoplay,inlinemedia_suggest,inlinemedia_privacy,inlinemedia_params,inlinemedia_videocaption;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['inlinemediaivdailymotion'] = '{type_legend},type,headline;{inlinemedia_legend},inlinemedia_source,inlinemedia_media_dm,inlinemedia_width,inlinemedia_height,inlinemedia_color,inlinemedia_highlightcolor,inlinemedia_backgroundcolor,inlinemedia_quality,inlinemedia_logo,inlinemedia_mediainfos,inlinemedia_params,inlinemedia_videocaption;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['inlinemediaivsoundcloud'] = '{type_legend},type,headline;{inlinemedia_legend},inlinemedia_source,inlinemedia_media_sc,inlinemedia_autoplay,inlinemedia_artwork,inlinemedia_color,inlinemedia_params,inlinemedia_videocaption;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'inlinemedia_source';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_source'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_source'],
	'default'                 => 'vimeo',
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'select',
	'options'        					=> array('ivvimeo','ivyoutube','ivdailymotion','ivsoundcloud'),
	'reference'               => &$GLOBALS['TL_LANG']['CTE'],
	'eval'                    => array('includeBlankOption'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(55) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_media_yt'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_media_yt'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_media_vi'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_media_vi'],
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_media_dm'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_media_dm'],
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_media_sc'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_media_sc'],
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_width'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_width'],
    'inputType'               => 'text',
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'maxlength' => 20, 'tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_height'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_height'],
    'inputType'               => 'text',
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'maxlength' => 20, 'tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_autoplay'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_autoplay'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_suggest'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_suggest'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_privacy'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_privacy'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_color'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_highlightcolor'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_highlightcolor'],
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_backgroundcolor'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_backgroundcolor'],
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_loop'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_loop'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_logo'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_logo'],
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_artwork'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_artwork'],
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_mediainfos'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_mediainfos'],
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_quality'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_quality'],
    'default'                 => 'hd720',
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'select',
    'options'        		  => array('ld','sd','hq','hd720','hd1080'),
    'reference'               => &$GLOBALS['TL_LANG']['CTE'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(55) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_params'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_params'],
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'clr long'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['inlinemedia_videocaption'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['inlinemedia_videocaption'],
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'textarea',
    'eval'                    => array('tl_class'=>'clr long'),
    'sql'                     => "text NOT NULL default ''"
);