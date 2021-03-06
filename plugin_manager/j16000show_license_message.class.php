<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000show_license_message
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$this->retVals = '';

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}
		
		/* if (defined('LICENSE_EXPIRED_MESSAGE')) {
			$this->retVals = LICENSE_EXPIRED_MESSAGE;
		} else {
			$this->retVals = '';
		} */
		
		$jomres_check_support_key = jomres_singleton_abstract::getInstance('jomres_check_support_key');
		
		//license key status check
		$message = '';
		
		if (get_showtime("task") != "stripe_subscribe" ) {
			if ($jomres_check_support_key->key_status == "Expired") {
				$message = '
	 ';
			}
				
			if ($jomres_check_support_key->key_status == "Unknown"  || $jomres_check_support_key->key_status == "Disabled" ) {
				$message = '
	 ';
			}
			}
		else $message = "";
		
		if ($output_now) {
			echo $message;
		} else {
			$this->retVals = $message;
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return $this->retVals;
	}
}
