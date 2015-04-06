<?php namespace FHIR\Elements\Primitive;

/**
 * Class FHIRDecimal
 * @package FHIR\Elements
 */
class FHIRDecimal extends AbstractFHIRPrimitiveType
{
    /**
     * TODO: Maybe do some Rational Number checking?
     *
     * @param mixed $value
     * @return bool
     */
    public function isValueValid($value)
    {
        // If this value is a string and is mostly a number...
        if (is_string($value) && is_numeric($value))
        {
            // ...but contains an exponential value.
            if (0 <= strpos($value, 'e'))
            {
                // TODO: throw exception, maybe??
                trigger_error('FHIRDecimal should NOT contain exponential value.  "'.$value.'" seen.');
                return true;
            }
            // ...and does not contain a decimal.
            else if (false === strpos($value, '.'))
            {
                return ctype_digit($value);
            }
            // ...Assume we're OK for now...
            // TODO: Additional checks
            else
            {
                return true;
            }
        }
        else if (is_int($value) || is_float($value))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * @return float|null
     */
    public function toFloat()
    {
        if ($this->value)
            return (float)$this->value;

        return null;
    }

    /**
     * @return int|null
     */
    public function toInt()
    {
        if ($this->value)
            return (int)$this->value;

        return null;
    }
}
