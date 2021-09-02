<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the compatibilityProperties array that is returned in the
 * getCompatibilityProperties call. The compatibilityProperties container consists
 * of an array of all compatible vehicle properties applicable to the specified
 * eBay marketplace and eBay category ID.
 */
class CompatibilityProperty extends AbstractModel
{
    /**
     * This is the actual name of the compatible vehicle property as it is known on the
     * specified eBay marketplace and in the eBay category. This is the string value
     * that should be used in the compatibility_property and filter query parameters of
     * a getCompatibilityPropertyValues request URI. Typical vehicle properties are
     * 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay
     * marketplace and the eBay category.
     *
     * @var string
     */
    public $name = null;

    /**
     * This is the localized name of the compatible vehicle property. The language that
     * is used will depend on the user making the call, or based on the language
     * specified if the Content-Language HTTP header is used. In some instances, the
     * string value in this field may be the same as the string in the corresponding
     * name field.
     *
     * @var string
     */
    public $localizedName = null;
}
