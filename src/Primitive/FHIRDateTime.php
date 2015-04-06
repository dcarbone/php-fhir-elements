<?php namespace FHIR\Elements\Primitive;

/**
 * Class FHIRDateTime
 * @package FHIR\Elements
 */
class FHIRDateTime extends AbstractFHIRPrimitiveType
{
    // @link http://hl7.org/fhir/datatypes.html#primitive
    const FHIR_DATETIME_FORMAT = '-?([1-9][0-9]{3}|0[0-9]{3})(-(0[1-9]|1[0-2])(-(0[1-9]|[12][0-9]|3[01])(T(([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9](\.[0-9]+)?|(24:00:00(\.0+)?))(Z|(\+|-)((0[0-9]|1[0-3]):[0-5][0-9]|14:00))?)?)?)?';

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValueValid($value)
    {
        if (is_string($value))
        {
            if (preg_match('{'.static::FHIR_DATETIME_FORMAT.'}S', $value))
                return true;

            trigger_error('FHIRDateTime value "'.$value.'" does not conform to spec, see "http://hl7.org/fhir/datatypes.html#primitive"');
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * @return null|\DateTime
     */
    public function toDateTime()
    {
        if ($value = $this->getValue())
        {
            $matches = array();
            preg_match('{'.static::FHIR_DATETIME_FORMAT.'}', $value, $matches);

            // TODO Finish this up
        }

        return null;
    }
}