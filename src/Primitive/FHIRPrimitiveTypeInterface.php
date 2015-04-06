<?php namespace FHIR\Elements\Primitive;

use FHIR\Elements\FHIRElementInterface;

/**
 * Interface FHIRPrimitiveTypeInterface
 * @package FHIR\Elements\Primitive
 */
interface FHIRPrimitiveTypeInterface extends FHIRElementInterface
{
    /**
     * @param $value
     * @return bool
     */
    public function isValueValid($value);
}