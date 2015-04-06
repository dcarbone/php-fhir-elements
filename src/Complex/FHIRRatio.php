<?php namespace FHIR\Elements\Complex;

/**
 * Class FHIRRatio
 * @package FHIR\Elements\Complex
 */
class FHIRRatio extends AbstractFHIRComplexType
{
    /** @var FHIRQuantity */
    protected $numerator = null;

    /** @var FHIRQuantity */
    protected $denominator = null;

    /**
     * @return FHIRQuantity
     */
    public function getNumerator()
    {
        return $this->numerator;
    }

    /**
     * @param FHIRQuantity $numerator
     */
    public function setNumerator(FHIRQuantity $numerator)
    {
        $this->numerator = $numerator;
    }

    /**
     * @return FHIRQuantity
     */
    public function getDenominator()
    {
        return $this->denominator;
    }

    /**
     * @param FHIRQuantity $denominator
     */
    public function setDenominator(FHIRQuantity $denominator)
    {
        $this->denominator = $denominator;
    }
}