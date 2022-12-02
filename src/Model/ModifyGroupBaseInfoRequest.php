<?php
/**
 * ModifyGroupBaseInfoRequest
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
 * ModifyGroupBaseInfoRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class ModifyGroupBaseInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModifyGroupBaseInfoRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groupId' => 'string',
        'name' => 'string',
        'introduction' => 'string',
        'notification' => 'string',
        'faceUrl' => 'string',
        'maxMemberNum' => 'int',
        'applyJoinOption' => 'string',
        'appDefinedData' => '\TencentCloud\IM\Model\ModifyGroupBaseInfoRequestAppDefinedData[]',
        'shutUpAllMember' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'groupId' => null,
        'name' => null,
        'introduction' => null,
        'notification' => null,
        'faceUrl' => null,
        'maxMemberNum' => 'int32',
        'applyJoinOption' => null,
        'appDefinedData' => null,
        'shutUpAllMember' => null
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
        'name' => 'Name',
        'introduction' => 'Introduction',
        'notification' => 'Notification',
        'faceUrl' => 'FaceUrl',
        'maxMemberNum' => 'MaxMemberNum',
        'applyJoinOption' => 'ApplyJoinOption',
        'appDefinedData' => 'AppDefinedData',
        'shutUpAllMember' => 'ShutUpAllMember'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupId' => 'setGroupId',
        'name' => 'setName',
        'introduction' => 'setIntroduction',
        'notification' => 'setNotification',
        'faceUrl' => 'setFaceUrl',
        'maxMemberNum' => 'setMaxMemberNum',
        'applyJoinOption' => 'setApplyJoinOption',
        'appDefinedData' => 'setAppDefinedData',
        'shutUpAllMember' => 'setShutUpAllMember'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupId' => 'getGroupId',
        'name' => 'getName',
        'introduction' => 'getIntroduction',
        'notification' => 'getNotification',
        'faceUrl' => 'getFaceUrl',
        'maxMemberNum' => 'getMaxMemberNum',
        'applyJoinOption' => 'getApplyJoinOption',
        'appDefinedData' => 'getAppDefinedData',
        'shutUpAllMember' => 'getShutUpAllMember'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['introduction'] = isset($data['introduction']) ? $data['introduction'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
        $this->container['faceUrl'] = isset($data['faceUrl']) ? $data['faceUrl'] : null;
        $this->container['maxMemberNum'] = isset($data['maxMemberNum']) ? $data['maxMemberNum'] : null;
        $this->container['applyJoinOption'] = isset($data['applyJoinOption']) ? $data['applyJoinOption'] : null;
        $this->container['appDefinedData'] = isset($data['appDefinedData']) ? $data['appDefinedData'] : null;
        $this->container['shutUpAllMember'] = isset($data['shutUpAllMember']) ? $data['shutUpAllMember'] : null;
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
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 30)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['introduction']) && (mb_strlen($this->container['introduction']) > 240)) {
            $invalidProperties[] = "invalid value for 'introduction', the character length must be smaller than or equal to 240.";
        }

        if (!is_null($this->container['notification']) && (mb_strlen($this->container['notification']) > 300)) {
            $invalidProperties[] = "invalid value for 'notification', the character length must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['faceUrl']) && (mb_strlen($this->container['faceUrl']) > 100)) {
            $invalidProperties[] = "invalid value for 'faceUrl', the character length must be smaller than or equal to 100.";
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
     * @param string $groupId 需要拉取成员信息的群组的 ID
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 群名称，最长30字节
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ModifyGroupBaseInfoRequest., must be smaller than or equal to 30.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets introduction
     *
     * @return string|null
     */
    public function getIntroduction()
    {
        return $this->container['introduction'];
    }

    /**
     * Sets introduction
     *
     * @param string|null $introduction 群简介，最长240字节
     *
     * @return $this
     */
    public function setIntroduction($introduction)
    {
        if (!is_null($introduction) && (mb_strlen($introduction) > 240)) {
            throw new \InvalidArgumentException('invalid length for $introduction when calling ModifyGroupBaseInfoRequest., must be smaller than or equal to 240.');
        }

        $this->container['introduction'] = $introduction;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return string|null
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param string|null $notification 群公告，最长300字节
     *
     * @return $this
     */
    public function setNotification($notification)
    {
        if (!is_null($notification) && (mb_strlen($notification) > 300)) {
            throw new \InvalidArgumentException('invalid length for $notification when calling ModifyGroupBaseInfoRequest., must be smaller than or equal to 300.');
        }

        $this->container['notification'] = $notification;

        return $this;
    }

    /**
     * Gets faceUrl
     *
     * @return string|null
     */
    public function getFaceUrl()
    {
        return $this->container['faceUrl'];
    }

    /**
     * Sets faceUrl
     *
     * @param string|null $faceUrl 群头像 URL，最长100字节
     *
     * @return $this
     */
    public function setFaceUrl($faceUrl)
    {
        if (!is_null($faceUrl) && (mb_strlen($faceUrl) > 100)) {
            throw new \InvalidArgumentException('invalid length for $faceUrl when calling ModifyGroupBaseInfoRequest., must be smaller than or equal to 100.');
        }

        $this->container['faceUrl'] = $faceUrl;

        return $this;
    }

    /**
     * Gets maxMemberNum
     *
     * @return int|null
     */
    public function getMaxMemberNum()
    {
        return $this->container['maxMemberNum'];
    }

    /**
     * Sets maxMemberNum
     *
     * @param int|null $maxMemberNum 最大群成员数量；私有群、公开群和聊天室：该字段阈值请参考 群组系统（https://cloud.tencent.com/document/product/269/1502#.E7.BE.A4.E7.BB.84.E9.99.90.E5.88.B6.E5.B7.AE.E5.BC.82） 和 计费概述（https://cloud.tencent.com/document/product/269/40267#.E5.9F.BA.E7.A1.80.E6.9C.8D.E5.8A.A1.E8.AF.A6.E6.83.85） 中的群成员人数上限相关说明；音视频聊天室和在线成员广播大群：该字段为无效字段，无需填写
     *
     * @return $this
     */
    public function setMaxMemberNum($maxMemberNum)
    {
        $this->container['maxMemberNum'] = $maxMemberNum;

        return $this;
    }

    /**
     * Gets applyJoinOption
     *
     * @return string|null
     */
    public function getApplyJoinOption()
    {
        return $this->container['applyJoinOption'];
    }

    /**
     * Sets applyJoinOption
     *
     * @param string|null $applyJoinOption 申请加群处理方式。包含 FreeAccess（自由加入），NeedPermission（需要验证），DisableApply（禁止加群）
     *
     * @return $this
     */
    public function setApplyJoinOption($applyJoinOption)
    {
        $this->container['applyJoinOption'] = $applyJoinOption;

        return $this;
    }

    /**
     * Gets appDefinedData
     *
     * @return \TencentCloud\IM\Model\ModifyGroupBaseInfoRequestAppDefinedData[]|null
     */
    public function getAppDefinedData()
    {
        return $this->container['appDefinedData'];
    }

    /**
     * Sets appDefinedData
     *
     * @param \TencentCloud\IM\Model\ModifyGroupBaseInfoRequestAppDefinedData[]|null $appDefinedData 默认情况是没有的。开通群组维度的自定义字段详情请参见 自定义字段（https://cloud.tencent.com/document/product/269/1502#.E8.87.AA.E5.AE.9A.E4.B9.89.E5.AD.97.E6.AE.B5）
     *
     * @return $this
     */
    public function setAppDefinedData($appDefinedData)
    {
        $this->container['appDefinedData'] = $appDefinedData;

        return $this;
    }

    /**
     * Gets shutUpAllMember
     *
     * @return string|null
     */
    public function getShutUpAllMember()
    {
        return $this->container['shutUpAllMember'];
    }

    /**
     * Sets shutUpAllMember
     *
     * @param string|null $shutUpAllMember 群内群成员禁言，只有群管理员和群主以及系统管理员可以发言 设置全员禁言（选填）:\"On\"开启，\"Off\"关闭
     *
     * @return $this
     */
    public function setShutUpAllMember($shutUpAllMember)
    {
        $this->container['shutUpAllMember'] = $shutUpAllMember;

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


