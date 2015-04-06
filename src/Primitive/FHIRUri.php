<?php namespace FHIR\Elements\Primitive;

/**
 * Class FHIRUri
 * @package FHIR\Elements\Primitive
 */
class FHIRUri extends AbstractFHIRPrimitiveType
{
    // @link http://tools.ietf.org/html/rfc3986#appendix-B
    const RFC_URI_REGEX = '^(([^:/?#]+):)?(//([^/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?';

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValueValid($value)
    {
        if (is_string($value))
        {
            if (preg_match('{'.static::RFC_URI_REGEX.'}S', $value))
            {
                return true;
            }
            else
            {
                // TODO: Exception if match fails??
                trigger_error('FHIRUri value "'.$value.'" does not follow RFC-3986 standard (see http://tools.ietf.org/html/rfc3986#appendix-B).');
                return true;
            }
        }
        else
        {
            return false;
        }
    }
}