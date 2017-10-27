<?php
/**
 * @package     Phproberto.Joomla-Twig
 * @subpackage  Plugin.Juser
 *
 * @copyright  Copyright (C) 2017 Roberto Segura López, Inc. All rights reserved.
 * @license    See COPYING.txt
 */

defined('_JEXEC') or die;

JLoader::import('twig.library');

use Phproberto\Joomla\Twig\Extension\JLanguage;
use Phproberto\Joomla\Twig\Plugin\BasePlugin;
use Twig\Environment;

/**
 * Plugin to integrate jlang extension with twig.
 *
 * @since  1.0.0
 */
class PlgTwigJlang extends BasePlugin
{
	/**
	 * Triggered after environment has been loaded.
	 *
	 * @param   Environment  $environment  Loaded environment
	 * @param   array        $params       Optional parameters
	 *
	 * @return  void
	 */
	public function onTwigAfterLoad(Environment $environment, $params)
	{
		$environment->addExtension(new JLanguage);
		$environment->addGlobal('jlang', \JFactory::getLanguage());
	}
}
