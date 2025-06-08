<?php

namespace FreireH\CatalogRuleGrid\Plugin;

use Magento\CatalogRule\Controller\Adminhtml\Promo\Catalog\Index;
use Magento\Framework\App\ResponseFactory;
use Magento\Framework\UrlInterface;

class Redirect
{
    public function __construct(
      private readonly ResponseFactory $responseFactory,
      private readonly UrlInterface $url
    ) {}

    public function afterExecute(Index $subject, $result)
    {
        $redirectionUrl = $this->url->getUrl('grid/catalogrule/index');
        $this->responseFactory->create()->setRedirect($redirectionUrl)->sendResponse();
    }
}
