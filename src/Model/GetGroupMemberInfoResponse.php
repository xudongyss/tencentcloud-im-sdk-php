<?php
/**
 * GetGroupMemberInfoResponse
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
use \TencentCloud\IM\ObjectSerializer;

/**
 * GetGroupMemberInfoResponse Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GetGroupMemberInfoResponse extends CommonResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetGroupMemberInfoResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'memberNum' => 'int',
        'memberList' => 'object[]',
        'appMemberDefinedData' => 'object[]',
        'next' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'memberNum' => 'int32',
        'memberList' => null,
        'appMemberDefinedData' => null,
        'next' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'memberNum' => 'MemberNum',
        'memberList' => 'MemberList',
        'appMemberDefinedData' => 'AppMemberDefinedData',
        'next' => 'Next'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'memberNum' => 'setMemberNum',
        'memberList' => 'setMemberList',
        'appMemberDefinedData' => 'setAppMemberDefinedData',
        'next' => 'setNext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'memberNum' => 'getMemberNum',
        'memberList' => 'getMemberList',
        'appMemberDefinedData' => 'getAppMemberDefinedData',
        'next' => 'getNext'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['memberNum'] = isset($data['memberNum']) ? $data['memberNum'] : null;
        $this->container['memberList'] = isset($data['memberList']) ? $data['memberList'] : null;
        $this->container['appMemberDefinedData'] = isset($data['appMemberDefinedData']) ? $data['appMemberDefinedData'] : null;
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets memberNum
     *
     * @return int|null
     */
    public function getMemberNum()
    {
        return $this->container['memberNum'];
    }

    /**
     * Sets memberNum
     *
     * @param int|null $memberNum 本群组的群成员总数
     *
     * @return $this
     */
    public function setMemberNum($memberNum)
    {
        $this->container['memberNum'] = $memberNum;

        return $this;
    }

    /**
     * Gets memberList
     *
     * @return object[]|null
     */
    public function getMemberList()
    {
        return $this->container['memberList'];
    }

    /**
     * Sets memberList
     *
     * @param object[]|null $memberList 获取到的群成员列表，其中包含了全部或者指定的群成员信息，成员信息字段详情请参阅 群成员资料（https://cloud.tencent.com/document/product/269/1502#SelfInfoFilter）
     *
     * @return $this
     */
    public function setMemberList($memberList)
    {
        $this->container['memberList'] = $memberList;

        return $this;
    }

    /**
     * Gets appMemberDefinedData
     *
     * @return object[]|null
     */
    public function getAppMemberDefinedData()
    {
        return $this->container['appMemberDefinedData'];
    }

    /**
     * Sets appMemberDefinedData
     *
     * @param object[]|null $appMemberDefinedData 返回的群成员自定义字段信息
     *
     * @return $this
     */
    public function setAppMemberDefinedData($appMemberDefinedData)
    {
        $this->container['appMemberDefinedData'] = $appMemberDefinedData;

        return $this;
    }

    /**
     * Gets next
     *
     * @return string|null
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param string|null $next 下一次请求应该传的 Next 值，仅查询 Community（社群）时会返回该字段
     *
     * @return $this
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

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


