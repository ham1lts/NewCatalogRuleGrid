<?php
declare(strict_types=1);

namespace FreireH\CatalogRuleGrid\Ui\DataProvider\Grid;

use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider;
use Magento\Framework\Api\Search\SearchResultInterface;

class ListingDataProvider extends DataProvider
{
    /**
     * @return SearchResultInterface
     */
    public function getSearchResult(): SearchResultInterface
    {
        $result = parent::getSearchResult();
        $column = 'rule_id';

        $adminSubQuery = new \Zend_Db_expr("(
                select rule_id, GROUP_CONCAT(name ORDER BY name SEPARATOR ', ') as website_id
                from catalogrule_website left join store_website ON catalogrule_website.website_id = store_website.website_id
                group by rule_id
                )");

        $result->getSelect()->joinLeft(
            ['website' => $adminSubQuery],
            'website.' . $column . ' = main_table.' . $column,
            ['website_id' => 'website.website_id']
        );

        return $result;
    }
}
