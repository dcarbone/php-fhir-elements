<?php namespace FHIR\Elements\Primitive;

/**
 * Class FHIRInteger
 * @package FHIR\Elements
 *
 * @property int value
 */
class FHIRInteger extends AbstractFHIRPrimitiveType
{
    /**
     * @param mixed $value
     * @return bool
     */
    public function isValueValid($value)
    {
        return (is_string($value) && ctype_digit($value)) || is_int($value);
    }
}