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
 * Content elements
 */
array_insert($GLOBALS['TL_CTE']['media'], count($GLOBALS['TL_CTE']['media']), array(
	'inlinemedia' => 'rev6\InlineMedia\ContentInlineMedia'
));