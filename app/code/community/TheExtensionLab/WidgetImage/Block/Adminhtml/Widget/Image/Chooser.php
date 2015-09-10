<?php
/**
* @category    TheExtensionLab
* @package     TheExtensionLab_WidgetImage
* @copyright   Copyright (c) 2015 TheExtensionLab (http://www.theextensionlab.com)
* @license     Open Software License (OSL 3.0)
* @author      James Anelay @ TheExtensionLab <james@theextensionlab.com>
*/

class TheExtensionLab_WidgetImage_Block_Adminhtml_Widget_Image_Chooser extends Mage_Adminhtml_Block_Template
{
    public function prepareElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $uniqId = Mage::helper('core')->uniqHash($element->getId());
        $sourceUrl = $this->getUrl('*/widget_images/index',
            array('uniq_id' => $uniqId, 'use_massaction' => false, 'target_element_id' => $uniqId));

        $chooser = $this->getLayout()->createBlock('widget/adminhtml_widget_chooser')
            ->setElement($element)
            ->setTranslationHelper($this->getTranslationHelper())
            ->setConfig($this->getConfig())
            ->setFieldsetId($this->getFieldsetId())
            ->setSourceUrl($sourceUrl)
            ->setUniqId($uniqId);

        if ($element->getValue()) {
            $chooser->setLabel('Selected: '.$element->getValue());
        }

        $element->setData('after_element_html', $chooser->toHtml());
        return $element;
    }
}