<?php namespace FHIR\Elements\Complex;

use FHIR\Elements\Complex\Schedule\FHIRScheduleRepeat;

/**
 * Class FHIRSchedule
 * @package FHIR\Elements\Complex
 */
class FHIRSchedule extends AbstractFHIRComplexType
{
    /** @var FHIRPeriod */
    protected $event = null;

    /** @var \FHIR\Elements\Complex\Schedule\FHIRScheduleRepeat */
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
     * @return \FHIR\Elements\Complex\Schedule\FHIRScheduleRepeat
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * @param FHIRScheduleRepeat $repeat
     */
    public function setRepeat(FHIRScheduleRepeat $repeat)
    {
        $this->repeat = $repeat;
    }
}