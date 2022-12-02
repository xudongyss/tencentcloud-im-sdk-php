<?php
/**
 * ForbidCallbackControl
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
 * ForbidCallbackControl Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class ForbidCallbackControl
{
    /**
     * Possible values of this enum
     */
    const FORBID_BEFORE_SEND_MSG_CALLBACK = 'ForbidBeforeSendMsgCallback';
    const FORBID_AFTER_SEND_MSG_CALLBACK = 'ForbidAfterSendMsgCallback';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FORBID_BEFORE_SEND_MSG_CALLBACK,
            self::FORBID_AFTER_SEND_MSG_CALLBACK,
        ];
    }
}


