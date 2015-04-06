<?php namespace FHIR\Elements\Complex;

/**
 * Class FHIRRange
 * @package FHIR\Elements\Complex
 */
class FHIRRange extends AbstractFHIRComplexType
{
    /** @var FHIRQuantity */
    protected $low = null;

    /** @var FHIRQuantity */
    protected $high = null;

    /**
     * @return FHIRQuantity
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * @param FHIRQuantity $low
     */
    public function setLow(FHIRQuantity $low)
    {
        $this->low = $low;
    }

    /**
     * @return FHIRQuantity
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param FHIRQuantity $high
     */
    public function setHigh(FHIRQuantity $high)
    {
        $this->high = $high;
    }
}