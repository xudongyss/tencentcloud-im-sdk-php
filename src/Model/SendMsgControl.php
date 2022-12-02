<?php
/**
 * SendMsgControl
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
 * SendMsgControl Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class SendMsgControl
{
    /**
     * Possible values of this enum
     */
    const NO_LAST_MSG = 'NoLastMsg';
    const NO_UNREAD = 'NoUnread';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_LAST_MSG,
            self::NO_UNREAD,
        ];
    }
}


