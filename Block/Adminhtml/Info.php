<?php

declare(strict_types=1);

namespace FreireH\CatalogRuleGrid\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\CatalogRule\Api\Data\RuleInterface;
use Magento\Customer\Api\GroupRepositoryInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class Info extends Template
{

    public $_template = 'FreireH_CatalogRuleGrid::info.phtml';
    private RuleInterface $catalogRule;

    public function __construct(
        Context $context,
        private readonly GroupRepositoryInterface $groupRepository
    ) {
        parent::__construct($context);
    }

    /**
     * @param RuleInterface $rule
     * @return void
     */
    public function setCatalogRule($rule): void
    {
        $this->catalogRule = $rule;
    }

    /**
     * @return RuleInterface
     */
    public function getCatalogRule(): RuleInterface
    {
        return $this->catalogRule;
    }

    /**
     * @param mixed $groupId
     * @return string
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function getGroupName(mixed $groupId): string
    {
        return $this->groupRepository->getById($groupId)->getCode() ?? "-";
    }

    /**
     * @return array|null
     */
    public function getCondition(): ?array
    {
        return $this->catalogRule->getConditionsSerialized()
            ? json_decode($this->catalogRule->getConditionsSerialized(), true)
            : null;
    }

    /**
     * @return string
     */
    public function getTextCondition(): string
    {
        $conditionString = $this->catalogRule->getConditions()->asStringRecursive();
        return nl2br(preg_replace('/ /', '&nbsp;', $conditionString));
    }
}
