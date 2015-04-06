<?php namespace FHIR\Elements\Primitive;

/**
 * Class FHIRString
 * @package FHIR\Elements
 */
class FHIRString extends AbstractFHIRPrimitiveType
{
    /**
     * @param mixed $value
     * @return bool
     */
    public function isValueValid($value)
    {
        return is_string($value);
    }
}