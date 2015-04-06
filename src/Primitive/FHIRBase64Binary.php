<?php namespace FHIR\Elements\Primitive;

/**
 * Class FHIRBase64Binary
 * @package FHIR\Elements\Primitive
 */
class FHIRBase64Binary extends AbstractFHIRPrimitiveType
{
    /**
     * @param mixed $value
     * @return bool
     */
    public function isValueValid($value)
    {
        // @link http://stackoverflow.com/a/11154248
        return (bool)preg_match('{^[a-zA-Z0-9\/\r\n+]*={0,2}$}S', $value);
    }

    /**
     * @param bool $strict
     * @return null|string
     */
    public function getDecodedValue($strict = true)
    {
        if ($this->value)
            return base64_decode($this->value, $strict);

        return null;
    }
}