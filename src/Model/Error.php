<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to express detailed information on errors and warnings that
 * may occur with a call request.
 */
class Error extends AbstractModel
{
    /**
     * This string value indicates the error category. There are three categories of
     * errors: request errors, application errors, and system errors.
     *
     * @var string
     */
    public $category = null;

    /**
     * The name of the domain in which the error or warning occurred.
     *
     * @var string
     */
    public $domain = null;

    /**
     * A unique code that identifies the particular error or warning that occurred.
     * Your application can use error codes as identifiers in your customized
     * error-handling algorithms.
     *
     * @var int
     */
    public $errorId = null;

    /**
     * An array of one or more reference IDs which identify the specific request
     * element(s) most closely associated to the error or warning, if any.
     *
     * @var string[]
     */
    public $inputRefIds = null;

    /**
     * A detailed description of the condition that caused the error or warning, and
     * information on what to do to correct the problem.
     *
     * @var string
     */
    public $longMessage = null;

    /**
     * A description of the condition that caused the error or warning.
     *
     * @var string
     */
    public $message = null;

    /**
     * An array of one or more reference IDs which identify the specific response
     * element(s) most closely associated to the error or warning, if any.
     *
     * @var string[]
     */
    public $outputRefIds = null;

    /**
     * Various warning and error messages return one or more variables that contain
     * contextual information about the error or waring. This is often the field or
     * value that triggered the error or warning.
     *
     * @var \Ebay\Sell\Inventory\Model\ErrorParameter[]
     */
    public $parameters = null;

    /**
     * The name of the subdomain in which the error or warning occurred.
     *
     * @var string
     */
    public $subdomain = null;
}
