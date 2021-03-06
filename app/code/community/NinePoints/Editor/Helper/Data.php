<?php
/**
 * Created by NinePoints Co., Ltd
 * User: ndlinh
 * Date: 2013-12-18
 *
 * Copyright ©2013 NinePoints Co., Ltd. All Rights Reserved.
 */
class NinePoints_Editor_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Return url of action to get variables
     *
     * @return string
     */
    public function getVariablesWysiwygActionUrl()
    {
        return Mage::getSingleton('adminhtml/url')->getUrl('*/system_variable/wysiwygPlugin');
    }

    /**
     * Check if CKEditor is used.
     * @return bool
     */
    public function isUseCkEditor()
    {
        return (1 == Mage::getStoreConfig('cms/wysiwyg/use_ckeditor'));
    }

    /**
     * @return bool
     */
    public function isEnableSyntaxHighLight()
    {
        return (1 == Mage::getStoreConfig('cms/wysiwyg/syntax_highlight'));
    }

    /**
     * Check if it's need to include CodeMirror js files
     * @return bool
     */
    public function isCodeMirrorRequired()
    {
        return ($this->isUseCkEditor() == false && $this->isEnableSyntaxHighLight() == true);
    }

    public function getEditorTheme()
    {
        return Mage::getStoreConfig('cms/wysiwyg/theme');
    }

    public function getLanguage()
    {
        $language = explode('_', Mage::app()->getLocale()->getLocaleCode());

        return strtolower($language[0]);
    }
}