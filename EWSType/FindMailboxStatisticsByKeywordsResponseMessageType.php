<?php
/**
 * Contains EWSType_FindMailboxStatisticsByKeywordsResponseMessageType.
 */

/**
 * Represents the response message for a FindMailboxStatisticsByKeywords
 * request.
 *
 * @package php-ews\Types
 */
class EWSType_FindMailboxStatisticsByKeywordsResponseMessageType extends EWSType_ResponseMessageType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Specifies the result of a mailbox search.
     *
     * @since Exchange 2013
     *
     * @var EWSType_MailboxStatisticsSearchResultType
     */
    public $MailboxStatisticsSearchResult;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2013
     *
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2013
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;
}
