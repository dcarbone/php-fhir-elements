<?php namespace FHIR\Elements\Complex\Schedule;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRDecimal;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRRepeat
 * @package FHIR\Elements
 */
class FHIRRepeat extends AbstractFHIRObject
{
    // @TODO Implement http://www.hl7.org/implement/standards/fhir/event-timing.html enumeration
    // @TODO Implement http://www.hl7.org/implement/standards/fhir/units-of-time.html enumeration

    /** @var FHIRInteger */
    protected $frequency = null;

    /** @var FHIRCode */
    protected $when = null;

    /** @var FHIRDecimal */
    protected $duration = null;

    /** @var FHIRCode */
    protected $units = null;

    /** @var FHIRInteger */
    protected $count = null;

    /** @var FHIRDateTime */
    protected $end = null;

    /**
     * @return FHIRInteger
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param FHIRInteger $frequency
     */
    public function setFrequency(FHIRInteger $frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return FHIRCode
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * @param FHIRCode $when
     */
    public function setWhen(FHIRCode $when)
    {
        $this->when = $when;
    }

    /**
     * @return FHIRDecimal
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param FHIRDecimal $duration
     */
    public function setDuration(FHIRDecimal $duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return FHIRCode
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @param FHIRCode $units
     */
    public function setUnits(FHIRCode $units)
    {
        $this->units = $units;
    }

    /**
     * @return FHIRInteger
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param FHIRInteger $count
     */
    public function setCount(FHIRInteger $count)
    {
        $this->count = $count;
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