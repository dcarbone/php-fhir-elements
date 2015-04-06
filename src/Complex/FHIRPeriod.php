<?php namespace FHIR\Elements\Complex;

use FHIR\Elements\Primitive\FHIRDateTime;

/**
 * Class FHIRPeriod
 * @package FHIR\Elements\Complex
 */
class FHIRPeriod extends AbstractFHIRComplexType
{
    /** @var FHIRDateTime */
    protected $start = null;

    /** @var FHIRDateTime */
    protected $end = null;

    /**
     * @return FHIRDateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param FHIRDateTime $start
     */
    public function setStart(FHIRDateTime $start)
    {
        $this->start = $start;
    }

    /**
     * @return FHIRDateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param FHIRDateTime $end
     */
    public function setEnd(FHIRDateTime $end)
    {
        $this->end = $end;
    }
}