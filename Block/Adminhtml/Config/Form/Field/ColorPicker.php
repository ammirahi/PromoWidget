<?php

namespace Ammi\PromoWidget\Block\Adminhtml\Config\Form\Field;

use Magento\Framework\View\Element\Html\Select;
use Magento\Framework\Data\Form\Element\AbstractElement;

class ColorPicker extends \Magento\Config\Block\System\Config\Form\Field
{
    protected function _getElementHtml(AbstractElement $element)
    {
        $html = '<input type="color" id="' . $element->getHtmlId() . '" name="' . $element->getName() . '" value="' . $element->getValue() . '" style="width: 100%; height: 42px;" />';
        return $html;
    }
}
