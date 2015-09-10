<?php

/**
 * @category    TheExtensionLab
 * @package     TheExtensionLab_WidgetImage
 * @copyright   Copyright (c) 2015 TheExtensionLab (http://www.theextensionlab.com)
 * @license     Open Software License (OSL 3.0)
 * @author      James Anelay @ TheExtensionLab <james@theextensionlab.com>
 */

class TheExtensionLab_WidgetImage_Helper_Widget_Images extends Mage_Cms_Helper_Wysiwyg_Images
{
    public function getImageWithPath($filename)
    {
        $fileurl = $this->getCurrentUrl() . $filename;
        $fileurl = str_replace(Mage::getBaseUrl('media'), '', $fileurl);

        return $fileurl;
    }

}