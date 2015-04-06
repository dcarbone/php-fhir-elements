<?php namespace FHIR\Elements\Complex;

use FHIR\Elements\Extension\FHIRExtensionInterface;
use FHIR\Elements\FHIRElementInterface;

/**
 * Interface FHIRComplexTypeInterface
 * @package FHIR\Elements\Complex
 */
interface FHIRComplexTypeInterface extends FHIRElementInterface
{
    /**
     * @param FHIRExtensionInterface $extension
     */
    public function addExtension(FHIRExtensionInterface $extension);

    /**
     * @return FHIRExtensionInterface[]|\FHIR\Common\Collection\ExtensionCollection
     */
    public function getExtension();
}