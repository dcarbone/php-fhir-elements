<?php namespace FHIR\Elements\Simple;

use FHIR\Elements\Primitive\FHIRUri;

/**
 * Class FHIROid
 * @package FHIR\Elements\Simple
 */
class FHIROid extends FHIRUri
{
    /**
     * @link http://www.ietf.org/rfc/rfc3001.txt
     * @see Validation mechanism
     *
     * @param mixed $value
     * @return bool
     */
    public function isValueValid($value)
    {
        return is_string($value);
    }
}