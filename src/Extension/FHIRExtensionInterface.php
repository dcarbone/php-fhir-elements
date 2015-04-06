<?php namespace FHIR\Elements\Extension;

use FHIR\Elements\FHIRElementInterface;
use FHIR\Elements\Primitive\FHIRUri;

/**
 * Interface FHIRExtensionInterface
 * @package FHIR\Elements\Extension
 */
interface FHIRExtensionInterface extends FHIRElementInterface
{
    /**
     * @return FHIRExtensionInterface[]|\FHIR\Common\Collection\ExtensionCollection
     */
    public function getExtension();

    /**
     * @param FHIRExtensionInterface $extension
     */
    public function addExtension(FHIRExtensionInterface $extension);

    /**
     * @return FHIRUri
     */
    public function getUri();

    /**
     * @param FHIRUri $uri
     * @return FHIRUri
     */
    public function setUri(FHIRUri $uri);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param mixed $value
     * @return mixed
     */
    public function setValue($value);
}