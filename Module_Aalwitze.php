<?php
namespace GDO\Aalwitze;

use GDO\Core\GDO_Module;
use GDO\Language\Module_Language;

/**
 * Cheap copy of mettwitze with some text changes.
 * @author gizmore
 * @since 6.11.4
 */
final class Module_Aalwitze extends GDO_Module
{
	##############
	### Module ###
	##############
	public $module_priority = 91;
	
	public function getTheme() { return 'mettwitze'; } # own theme for tpl overrides @see thm folder.
	public function onLoadLanguage() { return $this->loadLanguage('lang/aalwitze'); }
	public function getDependencies() { return ['Mettwitze']; }
	public function getClasses()
	{
		# Entity tables
		return [
		];
	}
	
	public function onInstall()
	{
		Module_Language::instance()->saveConfigVar('languages', '["de","en"]');
	}
	
}
