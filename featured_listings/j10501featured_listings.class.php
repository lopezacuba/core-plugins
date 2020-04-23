<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501featured_listings
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
		
		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', jr_gettext("_JOMRES_COM_MR_NO",'_JOMRES_COM_MR_NO',false) );
		$yesno[] = jomresHTML::makeOption( '1', jr_gettext("_JOMRES_COM_MR_YES",'_JOMRES_COM_MR_YES',false) );
		
        $configurationPanel = $componentArgs[ 'configurationPanel' ];

        $configurationPanel->startPanel(jr_gettext('_JRPORTAL_FEATUREDLISTINGS_TITLE', '_JRPORTAL_FEATUREDLISTINGS_TITLE', false));

		if (!isset($jrConfig[ 'prioritise_featured_properties' ])) {
			$jrConfig[ 'prioritise_featured_properties' ] = '1';
		}
		
		$configurationPanel->setleft(jr_gettext('_JRPORTAL_FEATUREDLISTINGS_CONFIG_PRIORITISE', '_JRPORTAL_FEATUREDLISTINGS_CONFIG_PRIORITISE', false));
		$configurationPanel->setmiddle(jomresHTML::selectList( $yesno, 'cfg_prioritise_featured_properties','class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'prioritise_featured_properties' ]));
		$configurationPanel->setright(jr_gettext('_JRPORTAL_FEATUREDLISTINGS_CONFIG_PRIORITISE_DESC', '_JRPORTAL_FEATUREDLISTINGS_CONFIG_PRIORITISE_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->endPanel();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
