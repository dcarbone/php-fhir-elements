<?php namespace FHIR\Elements\Simple;

use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRCode
 * @package FHIR\Elements\Simple
 */
class FHIRCode extends FHIRString
{
    // @link http://hl7.org/fhir/datatypes.html#patterns
    const FHIR_CODE_VALUE_VALIDATION = '[^\s]+([\s]+[^\s]+)*';

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValueValid($value)
    {
        return parent::isValueValid($value) && (bool)preg_match('{'.static::FHIR_CODE_VALUE_VALIDATION.'}S', $value);
    }
}