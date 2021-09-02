<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about a suggested category tree leaf node that
 * corresponds to keywords provided in the request. It includes details about each
 * of the category's ancestor nodes extending up to the root of the category tree.
 */
class CategorySuggestion extends AbstractModel
{
    /**
     * Contains details about the suggested category.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\Category
     */
    public $category = null;

    /**
     * An ordered list of category references that describes the location of the
     * suggested category in the specified category tree. The list identifies the
     * category's ancestry as a sequence of parent nodes, from the current node's
     * immediate parent to the root node of the category tree. Note: The root node of a
     * full default category tree includes categoryId and categoryName fields, but
     * their values should not be relied upon. They provide no useful information for
     * application development.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\AncestorReference[]
     */
    public $categoryTreeNodeAncestors = null;

    /**
     * The absolute level of the category tree node in the hierarchy of its category
     * tree. Note: The root node of any full category tree is always at level 0.
     *
     * @var int
     */
    public $categoryTreeNodeLevel = null;

    /**
     * This field is reserved for internal or future use.
     *
     * @var string
     */
    public $relevancy = null;
}
