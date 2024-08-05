<?php

declare(strict_types=1);

namespace FreireH\CatalogRuleGrid\Controller\Adminhtml\CatalogRule;

use Magento\Backend\App\Action\Context;
use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\View\LayoutFactory;

class Info extends Action
{
    public function __construct(
        Context $context,
        protected RawFactory $resultRawFactory,
        protected LayoutFactory $layoutFactory
    ) {
        parent::__construct($context);
    }

    public function execute(): Raw
    {
        $content = $this->layoutFactory->create()
            ->createBlock(
                \FreireH\CatalogRuleGrid\Block\Adminhtml\Info::class
            );

        $resultRaw = $this->resultRawFactory->create();
        return $resultRaw->setContents($content->toHtml());
    }
}
