<?php

namespace FreireH\CatalogRuleGrid\Model\ResourceModel\RuleGrid;

use FreireH\CatalogRuleGrid\Model\ResourceModel\RuleGrid as ResourceModel;
use FreireH\CatalogRuleGrid\Model\RuleGrid as Model;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'catalogrule_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
