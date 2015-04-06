<?php namespace FHIR\Elements\Complex;

use FHIR\Elements\Primitive\FHIRDecimal;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRSampledData
 * @package FHIR\Elements\Complex
 */
class FHIRSampledData extends AbstractFHIRComplexType
{
    /** @var FHIRQuantity */
    protected $origin = null;

    /** @var FHIRDecimal */
    protected $period = null;

    /** @var FHIRDecimal */
    protected $factor = null;

    /** @var FHIRDecimal */
    protected $lowerLimit = null;

    /** @var FHIRDecimal */
    protected $upperLimit = null;

    /** @var FHIRInteger */
    protected $dimensions = null;

    /** @var FHIRString */
    protected $data = null;

    /**
     * @return FHIRQuantity
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param FHIRQuantity $origin
     */
    public function setOrigin(FHIRQuantity $origin)
    {
        $this->origin = $origin;
    }

    /**
     * @return FHIRDecimal
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param FHIRDecimal $period
     */
    public function setPeriod(FHIRDecimal $period)
    {
        $this->period = $period;
    }

    /**
     * @return FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * @param FHIRDecimal $factor
     */
    public function setFactor(FHIRDecimal $factor)
    {
        $this->factor = $factor;
    }

    /**
     * @return FHIRDecimal
     */
    public function getLowerLimit()
    {
        return $this->lowerLimit;
    }

    /**
     * @param FHIRDecimal $lowerLimit
     */
    public function setLowerLimit(FHIRDecimal $lowerLimit)
    {
        $this->lowerLimit = $lowerLimit;
    }

    /**
     * @return FHIRDecimal
     */
    public function getUpperLimit()
    {
        return $this->upperLimit;
    }

    /**
     * @param FHIRDecimal $upperLimit
     */
    public function setUpperLimit(FHIRDecimal $upperLimit)
    {
        $this->upperLimit = $upperLimit;
    }

    /**
     * @return FHIRInteger
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param FHIRInteger $dimensions
     */
    public function setDimensions(FHIRInteger $dimensions)
    {
        $this->dimensions = $dimensions;
    }

    /**
     * @return FHIRString
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param FHIRString $data
     */
    public function setData(FHIRString $data)
    {
        $this->data = $data;
    }
}