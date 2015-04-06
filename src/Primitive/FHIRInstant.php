<?php namespace FHIR\Elements\Primitive;

/**
 * Class FHIRInstant
 * @package FHIR\Elements
 */
class FHIRInstant extends AbstractFHIRPrimitiveType
{
    /**
     * @param mixed $value
     * @return bool
     */
    public function isValueValid($value)
    {
        return (is_string($value) || is_int($value));
    }
}