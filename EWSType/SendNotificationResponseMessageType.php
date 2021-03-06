<?php
/**
 * Contains EWSType_SendNotificationResponseMessageType.
 */

/**
 * Represents the status and result of a single SendNotification operation
 * request.
 *
 * @package php-ews\Types
 */
class EWSType_SendNotificationResponseMessageType extends EWSType_ResponseMessageType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Contains information about the subscription and the events that have
     * occurred since the last notification.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NotificationType
     */
    public $Notification;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;
}
