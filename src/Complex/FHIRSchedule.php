<?php namespace FHIR\Elements\Complex;

use FHIR\Elements\Complex\Schedule\FHIRRepeat;

/**
 * Class FHIRSchedule
 * @package FHIR\Elements\Complex
 */
class FHIRSchedule extends AbstractFHIRComplexType
{
    /** @var FHIRPeriod */
    protected $event = null;

    /** @var \FHIR\Elements\Complex\Schedule\FHIRRepeat */
    protected $repeat = null;

    /**
     * @return FHIRPeriod
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param FHIRPeriod $event
     */
    public function setEvent(FHIRPeriod $event)
    {
        $this->event = $event;
    }

    /**
     * @return \FHIR\Elements\Complex\Schedule\FHIRRepeat
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * @param FHIRRepeat $repeat
     */
    public function setRepeat(FHIRRepeat $repeat)
    {
        $this->repeat = $repeat;
    }
}