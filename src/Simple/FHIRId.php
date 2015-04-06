<?php namespace FHIR\Elements\Simple;

use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRId
 * @package FHIR\Elements\Simple
 */
class FHIRId extends FHIRString
{
    // @link http://hl7.org/fhir/datatypes.html#patterns
    const FHIR_ID_VALUE_VALIDATION = '[a-z0-9\-\.]{1,36}';

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValueValid($value)
    {
        return parent::isValueValid($value) && (bool)preg_match('{'.static::FHIR_ID_VALUE_VALIDATION.'}S', $value);
    }
}