<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-2.0/JG/trunk/administrator/components/com_joomgallery/models/fields/joomcategory.php $
// $Id: joomcategory.php 4006 2012-12-03 18:40:40Z erftralle $
/****************************************************************************************\
**   JoomGallery  2                                                                     **
**   By: JoomGallery::ProjectTeam                                                       **
**   Copyright (C) 2008 - 2012  JoomGallery::ProjectTeam                                **
**   Based on: JoomGallery 1.0.0 by JoomGallery::ProjectTeam                            **
**   Released under GNU GPL Public License                                              **
**   License: http://www.gnu.org/copyleft/gpl.html or have a look                       **
**   at administrator/components/com_joomgallery/LICENSE.TXT                            **
\****************************************************************************************/

defined('_JEXEC') or die('Direct Access to this location is not allowed.');

/**
 * Renders a category select box form field
 *
 * @package     JoomGallery
 * @since       2.0
 */
class JFormFieldJoomCategory extends JFormField
{
  /**
   * The form field type.
   *
   * @var     string
   * @since   2.0
   */
  protected $type = 'JoomCategory';

  /**
   * Returns the HTML for a category select box form field.
   *
   * @return  object    The category select box form field.
   * @since   2.0
   */
  protected function getInput()
  {
    require_once JPATH_ADMINISTRATOR.DS.'components'.DS.'com_joomgallery'.DS.'includes'.DS.'defines.php';
    JLoader::register('JoomExtensions', JPATH_ADMINISTRATOR.DS.'components'.DS._JOOM_OPTION.DS.'helpers'.DS.'extensions.php');
    JLoader::register('JoomHelper', JPATH_BASE.DS.'components'.DS._JOOM_OPTION.DS.'helpers'.DS.'helper.php');
    JLoader::register('JoomConfig', JPATH_BASE.DS.'components'.DS._JOOM_OPTION.DS.'helpers'.DS.'config.php');
    JLoader::register('JoomAmbit', JPATH_BASE.DS.'components'.DS._JOOM_OPTION.DS.'helpers'.DS.'ambit.php');
    JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS._JOOM_OPTION.DS.'tables');
    JHTML::addIncludePath(JPATH_BASE.DS.'components'.DS._JOOM_OPTION.DS.'helpers'.DS.'html');

    $class = $this->element['class'] ? (string) $this->element['class'] : '';
    if($this->element['required'] && $this->element['required'] == true && strpos($class, 'required') === false)
    {
      if(!empty($class))
      {
        $class .= ' ';
      }
      $class .= 'required';
    }
    if($this->element['validate'] && (string) $this->element['validate'] == 'joompositivenumeric')
    {
      $doc = JFactory::getDocument();

      // Add a validation script for form validation
      $js_validate = "
        window.addEvent('domready', function() {
          document.formvalidator.setHandler('joompositivenumeric', function(value) {
            regex=/^[1-9]+[0-9]*$/;
            return regex.test(value);
          })
        });";
      $doc->addScriptDeclaration($js_validate);
      // Element class needs attribute validate-...
      if(!empty($class))
      {
        $class .= ' ';
      }
      $class .= 'validate-'.(string) $this->element['validate'];

      // Add some style to make the slect box red bordered when invalid
      $css = '
        select.invalid {
          border: 1px solid red;
        }';
      $doc->addStyleDeclaration($css);
    }

    $attr    = '';
    $attr   .= !empty($class) ? ' class="'.$class.'"' : '';
    $attr   .= ((string) $this->element['disabled'] == 'true') ? ' disabled="disabled"' : '';
    $attr   .= $this->element['size'] ? ' size="'.(int) $this->element['size'].'"' : '';
    $attr   .= $this->element['onchange'] ? ' onchange="'.(string) $this->element['onchange'].'"' : '';
    $action  = $this->element['action'] ? (string) $this->element['action'] : 'core.create';
    $exclude = $this->element['exclude'] ? (int) $this->element['exclude'] : null;
    $task    = $this->element['task'] ? (int) $this->element['task'] : null;

    $html = JHTML::_('joomselect.categorylist', $this->value, $this->name, $attr, $exclude, '- ', $task, $action, $this->id);

    return $html;
  }
}