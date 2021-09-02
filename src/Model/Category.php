<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about a particular eBay category.
 */
class Category extends AbstractModel
{
    /**
     * The unique identifier of the eBay category within its category tree. Note: The
     * root node of a full default category tree includes the categoryId field, but its
     * value should not be relied upon. It provides no useful information for
     * application development.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * The name of the category identified by categoryId.
     *
     * @var string
     */
    public $categoryName = null;
}
