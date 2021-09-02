<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about one of the ancestors of a suggested
 * category. An ordered list of these references describes the path from the
 * suggested category to the root of the category tree it belongs to.
 */
class AncestorReference extends AbstractModel
{
    /**
     * The unique identifier of the eBay ancestor category. Note: The root node of a
     * full default category tree includes the categoryId field, but its value should
     * not be relied upon. It provides no useful information for application
     * development.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * The name of the ancestor category identified by categoryId.
     *
     * @var string
     */
    public $categoryName = null;

    /**
     * The href portion of the getCategorySubtree call that retrieves the subtree below
     * the ancestor category node.
     *
     * @var string
     */
    public $categorySubtreeNodeHref = null;

    /**
     * The absolute level of the ancestor category node in the hierarchy of its
     * category tree. Note: The root node of any full category tree is always at level
     * 0.
     *
     * @var int
     */
    public $categoryTreeNodeLevel = null;
}
