<?php

declare(strict_types=1);

namespace FreireH\CatalogRuleGrid\Controller\Adminhtml\CatalogRule;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;

class Index extends Action implements HttpGetActionInterface
{
    public const ADMIN_RESOURCE = 'FreireH_CatalogRuleGrid::listing';

    public function execute(): ResultInterface
    {
        $resultPage = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend((__('New Grid Promo')));
        return $resultPage;
    }
}
