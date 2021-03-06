<?php
/**
 * Core file
 * @author Woollyinwales IT <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06002delete_extra {
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$uid=jomresGetParam( $_REQUEST, 'uid', 0 );
		$defaultProperty=getDefaultProperty();
		$saveMessage=jr_gettext('_JOMRES_COM_MR_EXTRA_DELETED','_JOMRES_COM_MR_EXTRA_DELETED',FALSE);
		//$jomres_messaging = new jomres_messages();
		$jomres_messaging =jomres_getSingleton('jomres_messages');
		$jomres_messaging->set_message($saveMessage);
		$query="DELETE FROM #__jomres_extras WHERE `uid` = ".(int)$uid." AND `property_uid` = ".(int)$defaultProperty;
		if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_EXTRA','_JOMRES_MR_AUDIT_DELETE_EXTRA',FALSE)))
			trigger_error ("Unable to delete from extras table, mysql db failure", E_USER_ERROR);
		
		$query="DELETE FROM #__jomcomp_extrasmodels_models WHERE `extra_id` = ".(int)$uid." AND `property_uid` = ".(int)$defaultProperty;
		if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_EXTRA','_JOMRES_MR_AUDIT_DELETE_EXTRA',FALSE)))
			trigger_error ("Unable to delete from extrasmodels models table, mysql db failure", E_USER_ERROR);
		
        $webhook_notification                               = new stdClass();
        $webhook_notification->webhook_event                = 'extra_deleted';
        $webhook_notification->webhook_event_description    = 'Logs when optional extras are deleted.';
        $webhook_notification->webhook_event_plugin         = 'optional_extras';
        $webhook_notification->data                         = new stdClass();
		$webhook_notification->data->property_uid			= $defaultProperty;
        $webhook_notification->data->extras_uid             = $uid;
        add_webhook_notification($webhook_notification);
        
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=list_extras"), $saveMessage );
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
