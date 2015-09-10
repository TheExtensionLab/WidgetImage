<?php
/**
 * @category    TheExtensionLab
 * @package     TheExtensionLab_WidgetImage
 * @copyright   Copyright (c) 2015 TheExtensionLab (http://www.theextensionlab.com)
 * @license     Open Software License (OSL 3.0)
 * @author      James Anelay @ TheExtensionLab <james@theextensionlab.com>
 */

class TheExtensionLab_WidgetImage_Block_Adminhtml_Widget_Images_Content extends Mage_Adminhtml_Block_Cms_Wysiwyg_Images_Content
{
    /**
     * Block construction
     */
    public function __construct()
    {
        parent::__construct();
        $this->_addButton('insert_files', array(
            'class'   => 'save no-display',
            'label'   => $this->helper('cms')->__('Insert File'),
            'type'    => 'button',
            'onclick' => $this->onInsertCallback(),
            'id'      => 'button_insert_files'
        ));
    }

    private function onInsertCallback()
    {
        $chooserJsObject = Mage::app()->getRequest()->getParam('uniq_id');
        $js = '
            MediabrowserInstance.getValueToInsertIntoWidget('.$chooserJsObject.');
        ';

        return $js;
    }
}