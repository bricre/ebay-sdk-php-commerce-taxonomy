<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about the formatting, occurrence, and support of
 * an aspect.
 */
class AspectConstraint extends AbstractModel
{
    /**
     * This value indicate if the aspect identified by the aspects.localizedAspectName
     * field is a product aspect (relevant to catalog products in the category) or an
     * item/instance aspect, which is an aspect whose value will vary based on a
     * particular instance of the product.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectApplicableToEnum'>eBay
     *                   API documentation</a>[]
     */
    public $aspectApplicableTo = null;

    /**
     * The data type of this aspect. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectDataTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $aspectDataType = null;

    /**
     * A value of true indicates that this aspect can be used to help identify item
     * variations.
     *
     * @var bool
     */
    public $aspectEnabledForVariations = null;

    /**
     * Returned only if the value of aspectDataType identifies a data type that
     * requires specific formatting. Currently, this field provides formatting hints as
     * follows: DATE: YYYY, YYYYMM, YYYYMMDD NUMBER: int32, double.
     *
     * @var string
     */
    public $aspectFormat = null;

    /**
     * The maximum length of the item/instance aspect's value. The seller must make
     * sure not to exceed this length when specifying the instance aspect's value for a
     * product. This field is only returned for instance aspects.
     *
     * @var int
     */
    public $aspectMaxLength = null;

    /**
     * The manner in which values of this aspect must be specified by the seller (as
     * free text or by selecting from available options). For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectModeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $aspectMode = null;

    /**
     * A value of true indicates that this aspect is required when offering items in
     * the specified category.
     *
     * @var bool
     */
    public $aspectRequired = null;

    /**
     * The enumeration value returned in this field will indicate if the corresponding
     * aspect is recommended or optional. Note: This field is always returned, even for
     * hard-mandated/required aspects (where aspectRequired: true). The value returned
     * for required aspects will be RECOMMENDED, but they are actually required and a
     * seller will be blocked from listing or revising an item without these aspects.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectUsageEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $aspectUsage = null;

    /**
     * The expected date after which the aspect will be required. Note: The value
     * returned in this field specifies only an approximate date, which may not reflect
     * the actual date after which the aspect is required.
     *
     * @var string
     */
    public $expectedRequiredByDate = null;

    /**
     * Indicates whether this aspect can accept single or multiple values for items in
     * the specified category. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ItemToAspectCardinalityEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $itemToAspectCardinality = null;
}
