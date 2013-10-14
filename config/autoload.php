<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Inlinemedia
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'rev6',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'rev6\InlineMedia\ContentInlineMedia' => 'system/modules/inlinemedia/elements/ContentInlineMedia.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_inlinemedia'      => 'system/modules/inlinemedia/templates/elements',
	'inlinemedia_vimeo'   => 'system/modules/inlinemedia/templates/mediaplayer',
	'inlinemedia_youtube' => 'system/modules/inlinemedia/templates/mediaplayer',
	'inlinemedia_dailymotion' => 'system/modules/inlinemedia/templates/mediaplayer',
	'inlinemedia_soundcloud' => 'system/modules/inlinemedia/templates/mediaplayer',
));
