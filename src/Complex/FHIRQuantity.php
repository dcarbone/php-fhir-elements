<?php namespace FHIR\Elements\Complex;

use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRQuantity
 * @package FHIR\Elements\Complex
 */
class FHIRQuantity extends AbstractFHIRComplexDecimal
{
    /** @var FHIRCode */
    protected $comparator = null;

    /** @var FHIRString */
    protected $units = null;

    /** @var FHIRUri */
    protected $system = null;

    /** @var FHIRCoding */
    protected $code = null;

    /**
     * @return FHIRCode
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * @param FHIRCode $comparator
     */
    public function setComparator(FHIRCode $comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * @return FHIRString
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @param FHIRString $units
     */
    public function setUnits(FHIRString $units)
    {
        $this->units = $units;
    }

    /**
     * @return FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @param FHIRUri $system
     */
    public function setSystem(FHIRUri $system)
    {
        $this->system = $system;
    }

    /**
     * @return FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCode $code
     */
    public function setCode(FHIRCode $code)
    {
        $this->code = $code;
    }
}