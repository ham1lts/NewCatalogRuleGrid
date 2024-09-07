<?php

namespace FreireH\CatalogRuleGrid\Ui\Component\Listing\Column;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\LayoutInterface;
use Magento\Ui\Component\Listing\Columns\Column;

class Info extends Column
{
    public function __construct(
        ContextInterface   $context,
        UiComponentFactory $uiComponentFactory,
        UrlInterface       $urlBuilder,
        LayoutInterface    $layout,
        array              $components = [],
        array              $data = []
    )
    {
        $this->urlBuilder = $urlBuilder;
        $this->layout = $layout;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    public function getViewUrl()
    {
        return $this->urlBuilder->getUrl(
            $this->getData('config/viewUrlPath')
        );
    }

    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                $item[$this->getData('name')] = $this->layout->createBlock(
                    \Magento\Backend\Block\Widget\Button::class,
                    '',
                    [
                        'data' => [
                            'label' => __('View'),
                            'type' => 'button',
                            'disabled' => false,
                            'class' => 'catalogrule-grid-view',
                            'onclick' => 'catalogruleView.open(\''. $this->getViewUrl().'\', \''.$item['rule_id'].'\')',
                        ]
                    ]
                )->toHtml();
            }
        }

        return $dataSource;
    }
}
