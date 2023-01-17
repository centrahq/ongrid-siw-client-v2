<?php
/**
 * CreateSessionRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SIW API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CreateSessionRequest Class Doc Comment
 *
 * @category Class
 * @description Contains the required information to initialize a new session.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateSessionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateSessionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cart' => '\OpenAPI\Client\Model\Cart',
        'customer' => '\OpenAPI\Client\Model\CustomerInfo',
        'customer_info' => '\OpenAPI\Client\Model\CustomerInfo',
        'delivery_price_discount' => 'int',
        'external_id' => 'string',
        'locale' => 'string',
        'locales' => 'string[]',
        'meta' => 'array<string,string>',
        'purchase_country' => 'string',
        'purchase_currency' => 'string',
        'search_address' => '\OpenAPI\Client\Model\Address',
        'snippet_configuration' => '\OpenAPI\Client\Model\SnippetConfiguration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cart' => null,
        'customer' => null,
        'customer_info' => null,
        'delivery_price_discount' => 'int32',
        'external_id' => null,
        'locale' => null,
        'locales' => null,
        'meta' => null,
        'purchase_country' => null,
        'purchase_currency' => null,
        'search_address' => null,
        'snippet_configuration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cart' => false,
		'customer' => false,
		'customer_info' => false,
		'delivery_price_discount' => false,
		'external_id' => false,
		'locale' => false,
		'locales' => false,
		'meta' => false,
		'purchase_country' => false,
		'purchase_currency' => false,
		'search_address' => false,
		'snippet_configuration' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cart' => 'cart',
        'customer' => 'customer',
        'customer_info' => 'customer_info',
        'delivery_price_discount' => 'delivery_price_discount',
        'external_id' => 'external_id',
        'locale' => 'locale',
        'locales' => 'locales',
        'meta' => 'meta',
        'purchase_country' => 'purchase_country',
        'purchase_currency' => 'purchase_currency',
        'search_address' => 'search_address',
        'snippet_configuration' => 'snippet_configuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cart' => 'setCart',
        'customer' => 'setCustomer',
        'customer_info' => 'setCustomerInfo',
        'delivery_price_discount' => 'setDeliveryPriceDiscount',
        'external_id' => 'setExternalId',
        'locale' => 'setLocale',
        'locales' => 'setLocales',
        'meta' => 'setMeta',
        'purchase_country' => 'setPurchaseCountry',
        'purchase_currency' => 'setPurchaseCurrency',
        'search_address' => 'setSearchAddress',
        'snippet_configuration' => 'setSnippetConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cart' => 'getCart',
        'customer' => 'getCustomer',
        'customer_info' => 'getCustomerInfo',
        'delivery_price_discount' => 'getDeliveryPriceDiscount',
        'external_id' => 'getExternalId',
        'locale' => 'getLocale',
        'locales' => 'getLocales',
        'meta' => 'getMeta',
        'purchase_country' => 'getPurchaseCountry',
        'purchase_currency' => 'getPurchaseCurrency',
        'search_address' => 'getSearchAddress',
        'snippet_configuration' => 'getSnippetConfiguration'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('cart', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('customer_info', $data ?? [], null);
        $this->setIfExists('delivery_price_discount', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('locales', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('purchase_country', $data ?? [], null);
        $this->setIfExists('purchase_currency', $data ?? [], null);
        $this->setIfExists('search_address', $data ?? [], null);
        $this->setIfExists('snippet_configuration', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets cart
     *
     * @return \OpenAPI\Client\Model\Cart|null
     */
    public function getCart()
    {
        return $this->container['cart'];
    }

    /**
     * Sets cart
     *
     * @param \OpenAPI\Client\Model\Cart|null $cart cart
     *
     * @return self
     */
    public function setCart($cart)
    {

        if (is_null($cart)) {
            throw new \InvalidArgumentException('non-nullable cart cannot be null');
        }

        $this->container['cart'] = $cart;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\CustomerInfo|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\CustomerInfo|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {

        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }

        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets customer_info
     *
     * @return \OpenAPI\Client\Model\CustomerInfo|null
     */
    public function getCustomerInfo()
    {
        return $this->container['customer_info'];
    }

    /**
     * Sets customer_info
     *
     * @param \OpenAPI\Client\Model\CustomerInfo|null $customer_info customer_info
     *
     * @return self
     */
    public function setCustomerInfo($customer_info)
    {

        if (is_null($customer_info)) {
            throw new \InvalidArgumentException('non-nullable customer_info cannot be null');
        }

        $this->container['customer_info'] = $customer_info;

        return $this;
    }

    /**
     * Gets delivery_price_discount
     *
     * @return int|null
     */
    public function getDeliveryPriceDiscount()
    {
        return $this->container['delivery_price_discount'];
    }

    /**
     * Sets delivery_price_discount
     *
     * @param int|null $delivery_price_discount delivery_price_discount
     *
     * @return self
     */
    public function setDeliveryPriceDiscount($delivery_price_discount)
    {

        if (is_null($delivery_price_discount)) {
            throw new \InvalidArgumentException('non-nullable delivery_price_discount cannot be null');
        }

        $this->container['delivery_price_discount'] = $delivery_price_discount;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id external_id
     *
     * @return self
     */
    public function setExternalId($external_id)
    {

        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {

        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }

        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets locales
     *
     * @return string[]|null
     */
    public function getLocales()
    {
        return $this->container['locales'];
    }

    /**
     * Sets locales
     *
     * @param string[]|null $locales locales
     *
     * @return self
     */
    public function setLocales($locales)
    {

        if (is_null($locales)) {
            throw new \InvalidArgumentException('non-nullable locales cannot be null');
        }

        $this->container['locales'] = $locales;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return array<string,string>|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param array<string,string>|null $meta Generic key/value object that is used for supplying complementing information.
     *
     * @return self
     */
    public function setMeta($meta)
    {

        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }

        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets purchase_country
     *
     * @return string|null
     */
    public function getPurchaseCountry()
    {
        return $this->container['purchase_country'];
    }

    /**
     * Sets purchase_country
     *
     * @param string|null $purchase_country purchase_country
     *
     * @return self
     */
    public function setPurchaseCountry($purchase_country)
    {

        if (is_null($purchase_country)) {
            throw new \InvalidArgumentException('non-nullable purchase_country cannot be null');
        }

        $this->container['purchase_country'] = $purchase_country;

        return $this;
    }

    /**
     * Gets purchase_currency
     *
     * @return string|null
     */
    public function getPurchaseCurrency()
    {
        return $this->container['purchase_currency'];
    }

    /**
     * Sets purchase_currency
     *
     * @param string|null $purchase_currency purchase_currency
     *
     * @return self
     */
    public function setPurchaseCurrency($purchase_currency)
    {

        if (is_null($purchase_currency)) {
            throw new \InvalidArgumentException('non-nullable purchase_currency cannot be null');
        }

        $this->container['purchase_currency'] = $purchase_currency;

        return $this;
    }

    /**
     * Gets search_address
     *
     * @return \OpenAPI\Client\Model\Address|null
     */
    public function getSearchAddress()
    {
        return $this->container['search_address'];
    }

    /**
     * Sets search_address
     *
     * @param \OpenAPI\Client\Model\Address|null $search_address search_address
     *
     * @return self
     */
    public function setSearchAddress($search_address)
    {

        if (is_null($search_address)) {
            throw new \InvalidArgumentException('non-nullable search_address cannot be null');
        }

        $this->container['search_address'] = $search_address;

        return $this;
    }

    /**
     * Gets snippet_configuration
     *
     * @return \OpenAPI\Client\Model\SnippetConfiguration|null
     */
    public function getSnippetConfiguration()
    {
        return $this->container['snippet_configuration'];
    }

    /**
     * Sets snippet_configuration
     *
     * @param \OpenAPI\Client\Model\SnippetConfiguration|null $snippet_configuration snippet_configuration
     *
     * @return self
     */
    public function setSnippetConfiguration($snippet_configuration)
    {

        if (is_null($snippet_configuration)) {
            throw new \InvalidArgumentException('non-nullable snippet_configuration cannot be null');
        }

        $this->container['snippet_configuration'] = $snippet_configuration;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


