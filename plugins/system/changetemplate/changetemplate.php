<?php
// No direct access
defined( '_JEXEC' ) or die;

/**
 *
 * @package     Joomla.Plugin
 * @subpackage  System.Changetemplate
 * @since       2.5+
 * @author		Дмитрий
 */
class plgSystemChangetemplate extends JPlugin
{
	/**
	 * Class Constructor
	 * @param object $subject
	 * @param array $config
	 */
	public function __construct( & $subject, $config )
	{
		parent::__construct( $subject, $config );
		$this->loadLanguage();
	}

	public function onAfterInitialise()
	{

		$input = JFactory::getApplication()->input;
		$template = $input->getCmd( 'template', '' );

		if ( !empty( $_COOKIE['templateChanged'] ) ) 
		{
			$input->set( 'template', $_COOKIE['templateChanged'] );
		}

		if ( $template !== '' ) 
		{
			$input->set( 'template', $template );
			$conf = JFactory::getConfig();
			setcookie( 'templateChanged', $template, time() + 8640000, $conf->get( 'cookie_path', '/' ), $conf->get( 'cookie_domain', '' ) );
		}	
  }
}
