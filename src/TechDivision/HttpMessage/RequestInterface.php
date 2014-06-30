<?php

/**
 * TechDivision\HttpMessage\RequestInterface
 *
 * PHP version 5
 *
 * @category  Library
 * @package   TechDivision_HttpMessage
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_HttpMessage
 * @link      http://www.appserver.io
 */

namespace TechDivision\HttpMessage;

/**
 * A HTTP request message.
 *
 * @category  Library
 * @package   TechDivision_HttpMessage
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_HttpMessage
 * @link      http://www.appserver.io
 * @link      http://tools.ietf.org/html/rfc2616#section-5
 */
interface RequestInterface extends MessageInterface
{
    /**
     * Gets the HTTP method of the request.
     *
     * @return string Returns the request method.
     */
    public function getMethod();

    /**
     * Sets the method to be performed on the resource identified by the
     * Request-URI.
     *
     * While HTTP method names are typically all uppercase characters, HTTP
     * method names are case-sensitive and thus implementations SHOULD NOT
     * modify the given string.
     *
     * @param string $method Case-insensitive method.
     *
     * @return void
     */
    public function setMethod($method);

    /**
     * Gets the absolute request URL.
     *
     * @return string Returns the URL as a string.
     */
    public function getUrl();

    /**
     * Sets the request URL.
     *
     * The URL MUST be a string, or an object that implements the
     * `__toString()` method. The URL must be an absolute URI as specified
     * in RFC 3986.
     *
     * @param string $url Request URL.
     *
     * @return void
     *
     * @throws \InvalidArgumentException If the URL is invalid.
     * @link http://tools.ietf.org/html/rfc3986#section-4.3
     */
    public function setUrl($url);
}
