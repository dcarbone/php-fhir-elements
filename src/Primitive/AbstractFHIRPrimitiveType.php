<?php namespace FHIR\Elements\Primitive;

use FHIR\Elements\AbstractFHIRElement;

/**
 * Class FHIRPrimitive
 * @package FHIR\Elements\Primitive
 */
abstract class AbstractFHIRPrimitiveType extends AbstractFHIRElement implements FHIRPrimitiveTypeInterface
{
    /** @var string|int|float|bool|null */
    protected $value = null;

    /**
     * @return string|int|float|bool|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        if (null === $value || $this->isValueValid($value))
            $this->value = $value;
        else
            throw $this->createInvalidPropertyValueTypeException('value', 'scalar or null', $value);
    }

    /**
     * @return null|string
     */
    public function __toString()
    {
        return (string)$this->value;
    }
}