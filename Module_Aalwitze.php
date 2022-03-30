<?php
namespace GDO\Aalwitze;

use GDO\Core\GDO_Module;
use GDO\Language\Module_Language;
use GDO\Website\Module_Website;

/**
 * Cheap copy of mettwitze with some text changes.
 * 
 * @author gizmore
 * @since 6.11.4
 */
final class Module_Aalwitze extends GDO_Module
{
	##############
	### Module ###
	##############
	public $module_priority = 91;
	
	public function onLoadLanguage() { return $this->loadLanguage('lang/aalwitze'); }

	public function getDependencies()
	{
		return [
			'Mettwitze',
			'Favicon', 'Website', # new stuff :)
		];
	}
	
	public function onInstall()
	{
		Module_Website::instance()->saveConfigVar('theme_color', '#72B7BF');
		Module_Language::instance()->saveConfigVar('languages', '["de","en"]');
	}
	
}
