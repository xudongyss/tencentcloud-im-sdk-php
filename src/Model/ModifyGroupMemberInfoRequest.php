<?php
/**
 * ModifyGroupMemberInfoRequest
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
 * ModifyGroupMemberInfoRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class ModifyGroupMemberInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModifyGroupMemberInfoRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groupId' => 'string',
        'memberAccount' => 'string',
        'role' => 'string',
        'msgFlag' => 'string',
        'nameCard' => 'string',
        'appMemberDefinedData' => '\TencentCloud\IM\Model\ModifyGroupMemberInfoRequestAppMemberDefinedData[]',
        'shutUpTime' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'groupId' => null,
        'memberAccount' => null,
        'role' => null,
        'msgFlag' => null,
        'nameCard' => null,
        'appMemberDefinedData' => null,
        'shutUpTime' => 'int32'
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
        'groupId' => 'GroupId',
        'memberAccount' => 'Member_Account',
        'role' => 'Role',
        'msgFlag' => 'MsgFlag',
        'nameCard' => 'NameCard',
        'appMemberDefinedData' => 'AppMemberDefinedData',
        'shutUpTime' => 'ShutUpTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupId' => 'setGroupId',
        'memberAccount' => 'setMemberAccount',
        'role' => 'setRole',
        'msgFlag' => 'setMsgFlag',
        'nameCard' => 'setNameCard',
        'appMemberDefinedData' => 'setAppMemberDefinedData',
        'shutUpTime' => 'setShutUpTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupId' => 'getGroupId',
        'memberAccount' => 'getMemberAccount',
        'role' => 'getRole',
        'msgFlag' => 'getMsgFlag',
        'nameCard' => 'getNameCard',
        'appMemberDefinedData' => 'getAppMemberDefinedData',
        'shutUpTime' => 'getShutUpTime'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['memberAccount'] = isset($data['memberAccount']) ? $data['memberAccount'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['msgFlag'] = isset($data['msgFlag']) ? $data['msgFlag'] : null;
        $this->container['nameCard'] = isset($data['nameCard']) ? $data['nameCard'] : null;
        $this->container['appMemberDefinedData'] = isset($data['appMemberDefinedData']) ? $data['appMemberDefinedData'] : null;
        $this->container['shutUpTime'] = isset($data['shutUpTime']) ? $data['shutUpTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
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
     * Gets groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string $groupId 操作的群 ID
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
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
     * @param string $memberAccount 要操作的群成员
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
     * @param string|null $role 成员身份，Admin/Member 分别为设置/取消管理员
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

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
     * @param string|null $msgFlag 消息屏蔽类型
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
     * @param string|null $nameCard 群名片（最大不超过50个字节）
     *
     * @return $this
     */
    public function setNameCard($nameCard)
    {
        if (!is_null($nameCard) && (mb_strlen($nameCard) > 50)) {
            throw new \InvalidArgumentException('invalid length for $nameCard when calling ModifyGroupMemberInfoRequest., must be smaller than or equal to 50.');
        }

        $this->container['nameCard'] = $nameCard;

        return $this;
    }

    /**
     * Gets appMemberDefinedData
     *
     * @return \TencentCloud\IM\Model\ModifyGroupMemberInfoRequestAppMemberDefinedData[]|null
     */
    public function getAppMemberDefinedData()
    {
        return $this->container['appMemberDefinedData'];
    }

    /**
     * Sets appMemberDefinedData
     *
     * @param \TencentCloud\IM\Model\ModifyGroupMemberInfoRequestAppMemberDefinedData[]|null $appMemberDefinedData 群成员维度的自定义字段，默认情况是没有的，可以通过 即时通信 IM 控制台（https://console.cloud.tencent.com/im） 进行配置，详情请参阅 群组系统（https://cloud.tencent.com/document/product/269/1502）
     *
     * @return $this
     */
    public function setAppMemberDefinedData($appMemberDefinedData)
    {
        $this->container['appMemberDefinedData'] = $appMemberDefinedData;

        return $this;
    }

    /**
     * Gets shutUpTime
     *
     * @return int|null
     */
    public function getShutUpTime()
    {
        return $this->container['shutUpTime'];
    }

    /**
     * Sets shutUpTime
     *
     * @param int|null $shutUpTime 需禁言时间，单位为秒，0表示取消禁言
     *
     * @return $this
     */
    public function setShutUpTime($shutUpTime)
    {
        $this->container['shutUpTime'] = $shutUpTime;

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


