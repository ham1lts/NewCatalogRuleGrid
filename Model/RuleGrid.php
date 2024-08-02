<?php

namespace FreireH\CatalogRuleGrid\Model;

use FreireH\CatalogRuleGrid\Model\ResourceModel\RuleGrid as ResourceModel;
use Magento\Framework\Model\AbstractModel;

class RuleGrid extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'catalogrule_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
