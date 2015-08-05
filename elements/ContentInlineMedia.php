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
 * Run in a custom namespace, so the class can be replaced
 */
namespace rev6\inlinemedia;
use Contao\FrontendTemplate;


/**
 * Class Contentinlinemedia
 *
 * Front end content element "inlinemedia".
 * @copyright  Rolf Schupfinger 2013
 * @author     Rolf Schupfinger <http://www.revision6.de>
 * @package    inlinemedia
 */
class Contentinlinemedia extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_inlinemedia';

	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		$arrMediaPlatforms = array(
			'ivvimeo' => array(
				'template' => 'inlinemedia_vimeo',
				'media' => $this->inlinemedia_media_vi,
				'width' => deserialize($this->inlinemedia_width),
				'height' => deserialize($this->inlinemedia_height),
				'autoplay' => $this->inlinemedia_autoplay,
				'color' => $this->inlinemedia_color,
				'loop' => $this->inlinemedia_loop,
				'params' => $this->inlinemedia_params,
				'videocaption' => $this->inlinemedia_videocaption
			),
			'ivyoutube' => array(
				'template' => 'inlinemedia_youtube',
				'media' => $this->inlinemedia_media_yt,
				'width' => deserialize($this->inlinemedia_width),
				'height' => deserialize($this->inlinemedia_height),
				'autoplay' => $this->inlinemedia_autoplay,
				'suggest' => $this->inlinemedia_suggest,
				'url' => $this->inlinemedia_privacy ? 'http://www.youtube-nocookie.com' : 'http://www.youtube.com',
                'params' => $this->inlinemedia_params,
                'videocaption' => $this->inlinemedia_videocaption
			),
            'ivdailymotion' => array(
                'template' => 'inlinemedia_dailymotion',
                'media' => $this->inlinemedia_media_dm,
                'width' => deserialize($this->inlinemedia_width),
                'height' => deserialize($this->inlinemedia_height),
                'color' => $this->inlinemedia_color,
                'color_background' => $this->inlinemedia_backgroundcolor,
                'color_highlight' => $this->inlinemedia_highlightcolor,
                'mediainfos' => $this->inlinemedia_mediainfos,
                'logo' => $this->inlinemedia_logo,
                'quality' => $this->inlinemedia_quality,
                'params' => $this->inlinemedia_params,
                'videocaption' => $this->inlinemedia_videocaption
            ),
            'ivsoundcloud' => array(
                'template' => 'inlinemedia_soundcloud',
                'media' => $this->inlinemedia_media_sc,
                'autoplay' => $this->inlinemedia_autoplay,
                'color' => $this->inlinemedia_color,
                'artwork' => $this->inlinemedia_artwork,
                'params' => $this->inlinemedia_params,
                'videocaption' => $this->inlinemedia_videocaption
            )
		);

		$objMediaPlayerTemplate = new FrontendTemplate($arrMediaPlatforms[$this->inlinemedia_source]['template']);
		unset($arrMediaPlatforms[$this->inlinemedia_source]['template']);
		$objMediaPlayerTemplate->setData($arrMediaPlatforms[$this->inlinemedia_source]);

		$this->Template->media = $objMediaPlayerTemplate->parse();
		$this->Template->videocaption = $this->inlinemedia_videocaption;

	}
}
