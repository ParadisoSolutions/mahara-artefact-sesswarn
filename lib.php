<?php
defined('INTERNAL') || die();

require_once('activity.php');

class PluginArtefactSessWarn extends PluginArtefact
{
    
    public static function get_artefact_types()
    {
        return array(
            'SessWarn'
        );
    }
    
    public static function get_block_types()
    {
        return array();
    }
    
    public static function get_plugin_name()
    {
        return 'SessWarn';
    }
    
    public static function menu_items()
    {
        return array(
            array(
                'path' => 'myportfolio/sesswarn',
                'url' => 'artefact/sesswarn/',
                'title' => get_string('MenuItemString', 'artefact.sesswarn'),
                'weight' => 20
            )
        );
    }
}


class ArtefactTypeSessWarn extends ArtefactType
{
    public function render_self($options)
    {
        return get_string('TestName', 'artefact.sesswarn');
    }
    
    public static function get_icon($options = null)
    {
    }
    
    public static function is_singular()
    {
        return false;
    }
    
    public static function get_links($id)
    {
    }
}
?>