<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about all nodes of a specified eBay category
 * tree.
 */
class CategoryTree extends AbstractModel
{
    /**
     * A list of one or more identifiers of the eBay marketplaces that use this
     * category tree.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/bas:MarketplaceIdEnum'>eBay
     *                   API documentation</a>[]
     */
    public $applicableMarketplaceIds = null;

    /**
     * The unique identifier of this eBay category tree.
     *
     * @var string
     */
    public $categoryTreeId = null;

    /**
     * The version of this category tree. It's a good idea to cache this value for
     * comparison so you can determine if this category tree has been modified in
     * subsequent calls.
     *
     * @var string
     */
    public $categoryTreeVersion = null;

    /**
     * Contains details of all nodes of the category tree hierarchy, starting with the
     * root node and down to the leaf nodes. This is a recursive structure. Note: The
     * root node of a full default category tree includes the categoryId field, but its
     * value should not be relied upon. It provides no useful information for
     * application development.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\CategoryTreeNode
     */
    public $rootCategoryNode = null;
}
