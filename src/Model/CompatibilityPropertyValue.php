<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the compatibilityPropertyValues array that is returned in
 * the getCompatibilityPropertyValues response. The compatibilityPropertyValues
 * array contains all compatible vehicle property values that match the specified
 * eBay marketplace, specified eBay category, and filters in the request. If the
 * compatibility_property parameter value in the request is 'Trim', each value
 * returned in each value field will be a different vehicle trim, applicable to any
 * filters that are set in the filter query parameter of the request, and also
 * based on the eBay marketplace and category specified in the call request.
 */
class CompatibilityPropertyValue extends AbstractModel
{
    /**
     * Each value field shows one applicable compatible vehicle property value. The
     * values that are returned will depend on the specified eBay marketplace,
     * specified eBay category, and filters in the request.
     *
     * @var string
     */
    public $value = null;
}
