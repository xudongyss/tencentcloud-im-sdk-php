<?php
/**
 * CreateGroupRequestMemberList
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
 * CreateGroupRequestMemberList Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class CreateGroupRequestMemberList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateGroupRequest_MemberList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'memberAccount' => 'string',
        'role' => 'string',
        'joinTime' => 'int',
        'msgSeq' => 'int',
        'msgFlag' => 'string',
        'nameCard' => 'string',
        'lastSendMsgTime' => 'int',
        'appMemberDefinedData' => '\TencentCloud\IM\Model\DefinedData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'memberAccount' => null,
        'role' => null,
        'joinTime' => 'int32',
        'msgSeq' => 'int32',
        'msgFlag' => null,
        'nameCard' => null,
        'lastSendMsgTime' => 'int32',
        'appMemberDefinedData' => null
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
        'memberAccount' => 'Member_Account',
        'role' => 'Role',
        'joinTime' => 'JoinTime',
        'msgSeq' => 'MsgSeq',
        'msgFlag' => 'MsgFlag',
        'nameCard' => 'NameCard',
        'lastSendMsgTime' => 'LastSendMsgTime',
        'appMemberDefinedData' => 'AppMemberDefinedData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'memberAccount' => 'setMemberAccount',
        'role' => 'setRole',
        'joinTime' => 'setJoinTime',
        'msgSeq' => 'setMsgSeq',
        'msgFlag' => 'setMsgFlag',
        'nameCard' => 'setNameCard',
        'lastSendMsgTime' => 'setLastSendMsgTime',
        'appMemberDefinedData' => 'setAppMemberDefinedData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'memberAccount' => 'getMemberAccount',
        'role' => 'getRole',
        'joinTime' => 'getJoinTime',
        'msgSeq' => 'getMsgSeq',
        'msgFlag' => 'getMsgFlag',
        'nameCard' => 'getNameCard',
        'lastSendMsgTime' => 'getLastSendMsgTime',
        'appMemberDefinedData' => 'getAppMemberDefinedData'
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
        $this->container['memberAccount'] = isset($data['memberAccount']) ? $data['memberAccount'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['joinTime'] = isset($data['joinTime']) ? $data['joinTime'] : null;
        $this->container['msgSeq'] = isset($data['msgSeq']) ? $data['msgSeq'] : null;
        $this->container['msgFlag'] = isset($data['msgFlag']) ? $data['msgFlag'] : null;
        $this->container['nameCard'] = isset($data['nameCard']) ? $data['nameCard'] : null;
        $this->container['lastSendMsgTime'] = isset($data['lastSendMsgTime']) ? $data['lastSendMsgTime'] : null;
        $this->container['appMemberDefinedData'] = isset($data['appMemberDefinedData']) ? $data['appMemberDefinedData'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['memberAccount'] === null) {
            $invalidProperties[] = "'memberAccount' can't be null";
        }
        if (!is_null($this->container['nameCard']) && (mb_strlen($this->container['nameCard']) > 50)) {
            $invalidProperties[] = "invalid value for 'nameCard', the character length must be smaller than or equal to 50.";
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
     * Gets memberAccount
     *
     * @return string
     */
    public function getMemberAccount()
    {
        return $this->container['memberAccount'];
    }

    /**
     * Sets memberAccount
     *
     * @param string $memberAccount memberAccount
     *
     * @return $this
     */
    public function setMemberAccount($memberAccount)
    {
        $this->container['memberAccount'] = $memberAccount;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role 群内身份，包括 Owner 群主、Admin 群管理员以及 Member 群成员
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets joinTime
     *
     * @return int|null
     */
    public function getJoinTime()
    {
        return $this->container['joinTime'];
    }

    /**
     * Sets joinTime
     *
     * @param int|null $joinTime 入群时间
     *
     * @return $this
     */
    public function setJoinTime($joinTime)
    {
        $this->container['joinTime'] = $joinTime;

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
     * @param int|null $msgSeq 该成员当前已读消息 Seq
     *
     * @return $this
     */
    public function setMsgSeq($msgSeq)
    {
        $this->container['msgSeq'] = $msgSeq;

        return $this;
    }

    /**
     * Gets msgFlag
     *
     * @return string|null
     */
    public function getMsgFlag()
    {
        return $this->container['msgFlag'];
    }

    /**
     * Sets msgFlag
     *
     * @param string|null $msgFlag 消息接收选项 消息接收选项，包括如下几种 AcceptAndNotify 表示接收并提示 AcceptNotNotify 表示接收不提示（不会触发 APNs 远程推送） Discard 表示屏蔽群消息（不会向客户端推送消息）
     *
     * @return $this
     */
    public function setMsgFlag($msgFlag)
    {
        $this->container['msgFlag'] = $msgFlag;

        return $this;
    }

    /**
     * Gets nameCard
     *
     * @return string|null
     */
    public function getNameCard()
    {
        return $this->container['nameCard'];
    }

    /**
     * Sets nameCard
     *
     * @param string|null $nameCard 可读可写。最长50字节，不可调整
     *
     * @return $this
     */
    public function setNameCard($nameCard)
    {
        if (!is_null($nameCard) && (mb_strlen($nameCard) > 50)) {
            throw new \InvalidArgumentException('invalid length for $nameCard when calling CreateGroupRequestMemberList., must be smaller than or equal to 50.');
        }

        $this->container['nameCard'] = $nameCard;

        return $this;
    }

    /**
     * Gets lastSendMsgTime
     *
     * @return int|null
     */
    public function getLastSendMsgTime()
    {
        return $this->container['lastSendMsgTime'];
    }

    /**
     * Sets lastSendMsgTime
     *
     * @param int|null $lastSendMsgTime 最后发送消息的时间 支持三个普通群，不支持直播群
     *
     * @return $this
     */
    public function setLastSendMsgTime($lastSendMsgTime)
    {
        $this->container['lastSendMsgTime'] = $lastSendMsgTime;

        return $this;
    }

    /**
     * Gets appMemberDefinedData
     *
     * @return \TencentCloud\IM\Model\DefinedData[]|null
     */
    public function getAppMemberDefinedData()
    {
        return $this->container['appMemberDefinedData'];
    }

    /**
     * Sets appMemberDefinedData
     *
     * @param \TencentCloud\IM\Model\DefinedData[]|null $appMemberDefinedData 群成员维度的自定义字段，默认情况是没有的，可以通过 即时通信 IM 控制台(https://console.cloud.tencent.com/im) 进行配置，详情请参阅 自定义字段(https://cloud.tencent.com/document/product/269/1502#.E8.87.AA.E5.AE.9A.E4.B9.89.E5.AD.97.E6.AE.B5)
     *
     * @return $this
     */
    public function setAppMemberDefinedData($appMemberDefinedData)
    {
        $this->container['appMemberDefinedData'] = $appMemberDefinedData;

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


