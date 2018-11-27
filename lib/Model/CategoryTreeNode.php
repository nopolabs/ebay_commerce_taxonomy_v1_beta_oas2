<?php
/**
 * CategoryTreeNode
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
 * CategoryTreeNode Class Doc Comment
 *
 * @category Class
 * @description This type contains information about all nodes of a category tree or subtree hierarchy, including and below the specified &lt;b&gt;Category&lt;/b&gt;, down to the leaf nodes. It is a recursive structure.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoryTreeNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CategoryTreeNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category' => '\Swagger\Client\Model\Category',
        'category_tree_node_level' => 'int',
        'child_category_tree_nodes' => '\Swagger\Client\Model\CategoryTreeNode[]',
        'leaf_category_tree_node' => 'bool',
        'parent_category_tree_node_href' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category' => null,
        'category_tree_node_level' => null,
        'child_category_tree_nodes' => null,
        'leaf_category_tree_node' => null,
        'parent_category_tree_node_href' => null
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
        'category' => 'category',
        'category_tree_node_level' => 'categoryTreeNodeLevel',
        'child_category_tree_nodes' => 'childCategoryTreeNodes',
        'leaf_category_tree_node' => 'leafCategoryTreeNode',
        'parent_category_tree_node_href' => 'parentCategoryTreeNodeHref'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'category_tree_node_level' => 'setCategoryTreeNodeLevel',
        'child_category_tree_nodes' => 'setChildCategoryTreeNodes',
        'leaf_category_tree_node' => 'setLeafCategoryTreeNode',
        'parent_category_tree_node_href' => 'setParentCategoryTreeNodeHref'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'category_tree_node_level' => 'getCategoryTreeNodeLevel',
        'child_category_tree_nodes' => 'getChildCategoryTreeNodes',
        'leaf_category_tree_node' => 'getLeafCategoryTreeNode',
        'parent_category_tree_node_href' => 'getParentCategoryTreeNodeHref'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['category_tree_node_level'] = isset($data['category_tree_node_level']) ? $data['category_tree_node_level'] : null;
        $this->container['child_category_tree_nodes'] = isset($data['child_category_tree_nodes']) ? $data['child_category_tree_nodes'] : null;
        $this->container['leaf_category_tree_node'] = isset($data['leaf_category_tree_node']) ? $data['leaf_category_tree_node'] : null;
        $this->container['parent_category_tree_node_href'] = isset($data['parent_category_tree_node_href']) ? $data['parent_category_tree_node_href'] : null;
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
     * Gets category
     *
     * @return \Swagger\Client\Model\Category
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Swagger\Client\Model\Category $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets category_tree_node_level
     *
     * @return int
     */
    public function getCategoryTreeNodeLevel()
    {
        return $this->container['category_tree_node_level'];
    }

    /**
     * Sets category_tree_node_level
     *
     * @param int $category_tree_node_level The absolute level of the current category tree node in the hierarchy of its category tree. Note: The root node of any full category tree is always at level 0.
     *
     * @return $this
     */
    public function setCategoryTreeNodeLevel($category_tree_node_level)
    {
        $this->container['category_tree_node_level'] = $category_tree_node_level;

        return $this;
    }

    /**
     * Gets child_category_tree_nodes
     *
     * @return \Swagger\Client\Model\CategoryTreeNode[]
     */
    public function getChildCategoryTreeNodes()
    {
        return $this->container['child_category_tree_nodes'];
    }

    /**
     * Sets child_category_tree_nodes
     *
     * @param \Swagger\Client\Model\CategoryTreeNode[] $child_category_tree_nodes An array of one or more category tree nodes that are the immediate children of the current category tree node, as well as their children, recursively down to the leaf nodes. Returned only if the the current category tree node is not a leaf node (the value of leafCategoryTreeNode is false).
     *
     * @return $this
     */
    public function setChildCategoryTreeNodes($child_category_tree_nodes)
    {
        $this->container['child_category_tree_nodes'] = $child_category_tree_nodes;

        return $this;
    }

    /**
     * Gets leaf_category_tree_node
     *
     * @return bool
     */
    public function getLeafCategoryTreeNode()
    {
        return $this->container['leaf_category_tree_node'];
    }

    /**
     * Sets leaf_category_tree_node
     *
     * @param bool $leaf_category_tree_node A value of true indicates that the current category tree node is a leaf node (it has no child nodes). A value of false indicates that the current node has one or more child nodes, which are identified by the childCategoryTreeNodes array. Returned only if the value of this field is true.
     *
     * @return $this
     */
    public function setLeafCategoryTreeNode($leaf_category_tree_node)
    {
        $this->container['leaf_category_tree_node'] = $leaf_category_tree_node;

        return $this;
    }

    /**
     * Gets parent_category_tree_node_href
     *
     * @return string
     */
    public function getParentCategoryTreeNodeHref()
    {
        return $this->container['parent_category_tree_node_href'];
    }

    /**
     * Sets parent_category_tree_node_href
     *
     * @param string $parent_category_tree_node_href The href portion of the getCategorySubtree call that retrieves the subtree below the parent of this category tree node. Not returned if the current category tree node is the root node of its tree.
     *
     * @return $this
     */
    public function setParentCategoryTreeNodeHref($parent_category_tree_node_href)
    {
        $this->container['parent_category_tree_node_href'] = $parent_category_tree_node_href;

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


