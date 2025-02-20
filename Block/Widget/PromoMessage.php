<?php

namespace Ammi\PromoWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class PromoMessage extends Template implements BlockInterface
{
    protected $_template = "widget.phtml";
    protected $scopeConfig;

    public function __construct(
        Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getMessageText()
    {
        return $this->scopeConfig->getValue(
            'promo_widget/content/message_text',
            ScopeInterface::SCOPE_STORE
        ) ?: 'Offre spéciale en cours !';
    }

    public function getBackgroundColor()
    {
        return $this->scopeConfig->getValue(
            'promo_widget/content/background_color',
            ScopeInterface::SCOPE_STORE
        ) ?: '#ffcc00';
    }
}

