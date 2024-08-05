<?php

declare(strict_types=1);

namespace FreireH\CatalogRuleGrid\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;

class Info extends Template
{
    public $_template = 'FreireH_CatalogRuleGrid::info.phtml';

    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    public function getName(): string
    {
        return 'teste';
    }
}
