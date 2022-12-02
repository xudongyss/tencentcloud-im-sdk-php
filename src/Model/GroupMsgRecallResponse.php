<?php
/**
 * GroupMsgRecallResponse
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
 * GroupMsgRecallResponse Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GroupMsgRecallResponse extends CommonResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupMsgRecallResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recallRetList' => 'object[]',
        'msgSeq' => 'int',
        'retCode' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'recallRetList' => null,
        'msgSeq' => 'int32',
        'retCode' => 'int32'
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
        'recallRetList' => 'RecallRetList',
        'msgSeq' => 'MsgSeq',
        'retCode' => 'RetCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recallRetList' => 'setRecallRetList',
        'msgSeq' => 'setMsgSeq',
        'retCode' => 'setRetCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recallRetList' => 'getRecallRetList',
        'msgSeq' => 'getMsgSeq',
        'retCode' => 'getRetCode'
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

        $this->container['recallRetList'] = isset($data['recallRetList']) ? $data['recallRetList'] : null;
        $this->container['msgSeq'] = isset($data['msgSeq']) ? $data['msgSeq'] : null;
        $this->container['retCode'] = isset($data['retCode']) ? $data['retCode'] : null;
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
     * Gets recallRetList
     *
     * @return object[]|null
     */
    public function getRecallRetList()
    {
        return $this->container['recallRetList'];
    }

    /**
     * Sets recallRetList
     *
     * @param object[]|null $recallRetList 消息撤回请求的详细结果
     *
     * @return $this
     */
    public function setRecallRetList($recallRetList)
    {
        $this->container['recallRetList'] = $recallRetList;

        return $this;
    }

    /**
     * Gets msgSeq
     *
     * @return int|null
     */
    public function getMsgSeq()
    {
        return $this->container['msgSeq'];
    }

    /**
     * Sets msgSeq
     *
     * @param int|null $msgSeq 单个被撤回消息的 seq
     *
     * @return $this
     */
    public function setMsgSeq($msgSeq)
    {
        $this->container['msgSeq'] = $msgSeq;

        return $this;
    }

    /**
     * Gets retCode
     *
     * @return int|null
     */
    public function getRetCode()
    {
        return $this->container['retCode'];
    }

    /**
     * Sets retCode
     *
     * @param int|null $retCode 单个消息的被撤回结果：0表示成功；其它表示失败，参考下文错误码说明
     *
     * @return $this
     */
    public function setRetCode($retCode)
    {
        $this->container['retCode'] = $retCode;

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


