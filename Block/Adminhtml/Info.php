<?php

declare(strict_types=1);

namespace FreireH\CatalogRuleGrid\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Customer\Api\GroupRepositoryInterface;
use Magento\Directory\Helper\Data as DirectoryHelper;
use Magento\Framework\Json\Helper\Data as JsonHelper;
use Magento\Rule\Model\Condition\Combine;

class Info extends Template
{
    public $_template = 'FreireH_CatalogRuleGrid::info.phtml';

    public function __construct(
        Context $context,
        private readonly GroupRepositoryInterface $groupRepository,
        private readonly Combine $combineCondition
    ) {
        parent::__construct($context);
    }

    public function setCatalogRule($rule)
    {
        $this->catalogRule = $rule;
    }

    public function getCatalogRule()
    {
        return $this->catalogRule;
    }

    public function getGroupName(mixed $groupId): string
    {
        return $this->groupRepository->getById($groupId)->getCode() ?? "-";
    }

    public function getCondition(array $condition)
    {
        return $this->combineCondition->loadArray($condition);
    }

    public function getConditions(): string
    {
        $conditionString = $this->catalogRule->getConditions()->asStringRecursive();
        return nl2br(preg_replace('/ /', '&nbsp;', $conditionString));
    }

}
