<?php namespace FHIR\Elements\Primitive;

/**
 * Class FHIRDate
 * @package FHIR\Elements
 */
class FHIRDate extends AbstractFHIRPrimitiveType
{
    // @link http://hl7.org/fhir/datatypes.html#primitive
    const FHIR_DATE_FORMAT = ' -?([1-9][0-9]{3}|0[0-9]{3})(-(0[1-9]|1[0-2])(-(0[1-9]|[12][0-9]|3[01]))?)?';

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValueValid($value)
    {
        if (is_string($value))
        {
            if (preg_match('{'.static::FHIR_DATE_FORMAT.'}S', $value))
                return true;

            trigger_error('FHIRDate value "'.$value.'" does not conform with spec, see "http://hl7.org/fhir/datatypes.html#primitive"');
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
            preg_match('{'.static::FHIR_DATE_FORMAT.'}', $value, $matches);

            // TODO Finish this up
        }

        return null;
    }
}