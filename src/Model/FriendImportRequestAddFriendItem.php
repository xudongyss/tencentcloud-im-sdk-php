<?php
/**
 * FriendImportRequestAddFriendItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentCloud\IM

 */

/**
 * TIM SERVER REST API SDK
 *
 * TIM REST API
 *
 * 
 */

/**
 *
 * Do not edit the class manually.
 */

namespace TencentCloud\IM\Model;

use \ArrayAccess;
use \TencentCloud\IM\ObjectSerializer;

/**
 * FriendImportRequestAddFriendItem Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class FriendImportRequestAddFriendItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FriendImportRequest_AddFriendItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'toAccount' => 'string',
        'remark' => 'string',
        'remarkTime' => 'int',
        'groupName' => 'string[]',
        'addSource' => 'string',
        'addWording' => 'string',
        'addTime' => 'int',
        'customItem' => '\TencentCloud\IM\Model\FriendImportRequestCustomItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'toAccount' => null,
        'remark' => null,
        'remarkTime' => 'int32',
        'groupName' => null,
        'addSource' => null,
        'addWording' => null,
        'addTime' => 'int32',
        'customItem' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'toAccount' => 'To_Account',
        'remark' => 'Remark',
        'remarkTime' => 'RemarkTime',
        'groupName' => 'GroupName',
        'addSource' => 'AddSource',
        'addWording' => 'AddWording',
        'addTime' => 'AddTime',
        'customItem' => 'CustomItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'toAccount' => 'setToAccount',
        'remark' => 'setRemark',
        'remarkTime' => 'setRemarkTime',
        'groupName' => 'setGroupName',
        'addSource' => 'setAddSource',
        'addWording' => 'setAddWording',
        'addTime' => 'setAddTime',
        'customItem' => 'setCustomItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'toAccount' => 'getToAccount',
        'remark' => 'getRemark',
        'remarkTime' => 'getRemarkTime',
        'groupName' => 'getGroupName',
        'addSource' => 'getAddSource',
        'addWording' => 'getAddWording',
        'addTime' => 'getAddTime',
        'customItem' => 'getCustomItem'
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
        $this->container['toAccount'] = isset($data['toAccount']) ? $data['toAccount'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['remarkTime'] = isset($data['remarkTime']) ? $data['remarkTime'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['addSource'] = isset($data['addSource']) ? $data['addSource'] : null;
        $this->container['addWording'] = isset($data['addWording']) ? $data['addWording'] : null;
        $this->container['addTime'] = isset($data['addTime']) ? $data['addTime'] : null;
        $this->container['customItem'] = isset($data['customItem']) ? $data['customItem'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['toAccount'] === null) {
            $invalidProperties[] = "'toAccount' can't be null";
        }
        if ($this->container['addSource'] === null) {
            $invalidProperties[] = "'addSource' can't be null";
        }
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
     * Gets toAccount
     *
     * @return string
     */
    public function getToAccount()
    {
        return $this->container['toAccount'];
    }

    /**
     * Sets toAccount
     *
     * @param string $toAccount 好友的 UserID
     *
     * @return $this
     */
    public function setToAccount($toAccount)
    {
        $this->container['toAccount'] = $toAccount;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string|null $remark From_Account 对 To_Account 的好友备注，详情可参见 标配好友字段(https://cloud.tencent.com/document/product/269/1501#.E6.A0.87.E9.85.8D.E5.A5.BD.E5.8F.8B.E5.AD.97.E6.AE.B5)
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets remarkTime
     *
     * @return int|null
     */
    public function getRemarkTime()
    {
        return $this->container['remarkTime'];
    }

    /**
     * Sets remarkTime
     *
     * @param int|null $remarkTime From_Account 对 To_Account 的好友备注时间
     *
     * @return $this
     */
    public function setRemarkTime($remarkTime)
    {
        $this->container['remarkTime'] = $remarkTime;

        return $this;
    }

    /**
     * Gets groupName
     *
     * @return string[]|null
     */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
     * Sets groupName
     *
     * @param string[]|null $groupName From_Account 对 To_Account 的分组信息，详情可参见 标配好友字段(https://cloud.tencent.com/document/product/269/1501#.E6.A0.87.E9.85.8D.E5.A5.BD.E5.8F.8B.E5.AD.97.E6.AE.B5)
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;

        return $this;
    }

    /**
     * Gets addSource
     *
     * @return string
     */
    public function getAddSource()
    {
        return $this->container['addSource'];
    }

    /**
     * Sets addSource
     *
     * @param string $addSource 加好友来源字段，详情可参见 标配好友字段（https://cloud.tencent.com/document/product/269/1501#.E6.A0.87.E9.85.8D.E5.A5.BD.E5.8F.8B.E5.AD.97.E6.AE.B5）
     *
     * @return $this
     */
    public function setAddSource($addSource)
    {
        $this->container['addSource'] = $addSource;

        return $this;
    }

    /**
     * Gets addWording
     *
     * @return string|null
     */
    public function getAddWording()
    {
        return $this->container['addWording'];
    }

    /**
     * Sets addWording
     *
     * @param string|null $addWording From_Account 和 To_Account 形成好友关系时的附言信息，详情可参见 标配好友字段（标配好友字段）
     *
     * @return $this
     */
    public function setAddWording($addWording)
    {
        $this->container['addWording'] = $addWording;

        return $this;
    }

    /**
     * Gets addTime
     *
     * @return int|null
     */
    public function getAddTime()
    {
        return $this->container['addTime'];
    }

    /**
     * Sets addTime
     *
     * @param int|null $addTime From_Account 和 To_Account 形成好友关系的时间
     *
     * @return $this
     */
    public function setAddTime($addTime)
    {
        $this->container['addTime'] = $addTime;

        return $this;
    }

    /**
     * Gets customItem
     *
     * @return \TencentCloud\IM\Model\FriendImportRequestCustomItem[]|null
     */
    public function getCustomItem()
    {
        return $this->container['customItem'];
    }

    /**
     * Sets customItem
     *
     * @param \TencentCloud\IM\Model\FriendImportRequestCustomItem[]|null $customItem From_Account 对 To_Account 的自定义好友数据，每一个成员都包含一个 Tag 字段和一个 Value 字段，详情可参见 自定义好友字段（https://cloud.tencent.com/document/product/269/1501#.E8.87.AA.E5.AE.9A.E4.B9.89.E5.A5.BD.E5.8F.8B.E5.AD.97.E6.AE.B5）
     *
     * @return $this
     */
    public function setCustomItem($customItem)
    {
        $this->container['customItem'] = $customItem;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


