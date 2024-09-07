<?php

namespace FreireH\CatalogRuleGrid\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class RuleGrid extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'catalogrule_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('catalogrule', 'rule_id');
        $this->_useIsObjectNew = true;
    }
}
