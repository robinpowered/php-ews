<?php
/**
 * Contains EWSType_GetPhoneCallInformationResponseMessageType.
 */

/**
 * Defines a response to a single GetPhoneCallInformation request.
 *
 * @package php-ews\Types
 */
class EWSType_GetPhoneCallInformationResponseMessageType extends EWSType_ResponseMessageType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Specifies the state information for a phone call.
     *
     * @since Exchange 2010
     *
     * @var EWSType_PhoneCallInformationType
     */
    public $PhoneCallInformation;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;
}
