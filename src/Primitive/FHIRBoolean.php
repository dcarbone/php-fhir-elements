<?php namespace FHIR\Elements\Primitive;

/**
 * Class FHIRBoolean
 * @package FHIR\Elements
 */
class FHIRBoolean extends AbstractFHIRPrimitiveType
{
    /**
     * @param $value
     * @return bool
     */
    public function isValueValid($value)
    {
        if (is_string($value))
        {
            $value = strtolower($value);
            return 'true' === $value || 'false' === $value;
        }
        else
        {
            return false;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if ($this->value)
            return 'TRUE';
        else
            return 'FALSE';
    }
}