<?php
/**
 * Aspect
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Commerce Taxonomy Api
 *
 * Use the Taxonomy API to discover the most appropriate eBay categories under which sellers can offer inventory items for sale, and the most likely categories under which buyers can browse or search for items to purchase. In addition, the Taxonomy API provides information about the required and recommended category aspects to include in listings.
 *
 * OpenAPI spec version: v1_beta.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Aspect Class Doc Comment
 *
 * @category Class
 * @description This type contains information about an item attribute (for example, color) that is appropriate or necessary for accurately describing items in a particular leaf category. Sellers are required or encouraged to provide one or more values of this aspect when offering an item in that category on eBay.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Aspect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Aspect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aspect_constraint' => '\Swagger\Client\Model\AspectConstraint',
        'aspect_values' => '\Swagger\Client\Model\AspectValue[]',
        'localized_aspect_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aspect_constraint' => null,
        'aspect_values' => null,
        'localized_aspect_name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'aspect_constraint' => 'aspectConstraint',
        'aspect_values' => 'aspectValues',
        'localized_aspect_name' => 'localizedAspectName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_constraint' => 'setAspectConstraint',
        'aspect_values' => 'setAspectValues',
        'localized_aspect_name' => 'setLocalizedAspectName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_constraint' => 'getAspectConstraint',
        'aspect_values' => 'getAspectValues',
        'localized_aspect_name' => 'getLocalizedAspectName'
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
        return self::$swaggerModelName;
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
        $this->container['aspect_constraint'] = isset($data['aspect_constraint']) ? $data['aspect_constraint'] : null;
        $this->container['aspect_values'] = isset($data['aspect_values']) ? $data['aspect_values'] : null;
        $this->container['localized_aspect_name'] = isset($data['localized_aspect_name']) ? $data['localized_aspect_name'] : null;
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

        return true;
    }


    /**
     * Gets aspect_constraint
     *
     * @return \Swagger\Client\Model\AspectConstraint
     */
    public function getAspectConstraint()
    {
        return $this->container['aspect_constraint'];
    }

    /**
     * Sets aspect_constraint
     *
     * @param \Swagger\Client\Model\AspectConstraint $aspect_constraint aspect_constraint
     *
     * @return $this
     */
    public function setAspectConstraint($aspect_constraint)
    {
        $this->container['aspect_constraint'] = $aspect_constraint;

        return $this;
    }

    /**
     * Gets aspect_values
     *
     * @return \Swagger\Client\Model\AspectValue[]
     */
    public function getAspectValues()
    {
        return $this->container['aspect_values'];
    }

    /**
     * Sets aspect_values
     *
     * @param \Swagger\Client\Model\AspectValue[] $aspect_values Contains a list of valid values for this aspect (for example: Red, Green, and Blue), along with any constraints on those values.
     *
     * @return $this
     */
    public function setAspectValues($aspect_values)
    {
        $this->container['aspect_values'] = $aspect_values;

        return $this;
    }

    /**
     * Gets localized_aspect_name
     *
     * @return string
     */
    public function getLocalizedAspectName()
    {
        return $this->container['localized_aspect_name'];
    }

    /**
     * Sets localized_aspect_name
     *
     * @param string $localized_aspect_name The localized name of this aspect (for example: colour on the eBay UK site). Note: This name is always localized for the specified marketplace. There is no canonical aspect name.
     *
     * @return $this
     */
    public function setLocalizedAspectName($localized_aspect_name)
    {
        $this->container['localized_aspect_name'] = $localized_aspect_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


