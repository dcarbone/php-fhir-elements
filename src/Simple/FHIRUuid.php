<?php namespace FHIR\Elements\Simple;

use FHIR\Elements\Primitive\FHIRUri;

/**
 * Class FHIRUuid
 * @package FHIR\Elements\Simple
 */
class FHIRUuid extends FHIRUri
{
    /**
     * @link http://www.ietf.org/rfc/rfc4122.txt
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