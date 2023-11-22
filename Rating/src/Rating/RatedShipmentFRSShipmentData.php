<?php
/**
 * RatedShipmentFRSShipmentData
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rate
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\Rating\Rating;

use \ArrayAccess;
use \UPS\Rating\ObjectSerializer;

/**
 * RatedShipmentFRSShipmentData Class Doc Comment
 *
 * @category Class
 * @description FRSShipmentData container.  Only returned when the FRSShipmentIIndicator is used. UPS Ground Freight Pricing Only.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RatedShipmentFRSShipmentData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RatedShipment_FRSShipmentData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transportation_charges' => '\UPS\Rating\Rating\FRSShipmentDataTransportationCharges',
        'freight_density_rate' => '\UPS\Rating\Rating\FRSShipmentDataFreightDensityRate',
        'handling_units' => 'OneOfRatedShipmentFRSShipmentDataHandlingUnits'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transportation_charges' => null,
        'freight_density_rate' => null,
        'handling_units' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'transportation_charges' => 'TransportationCharges',
        'freight_density_rate' => 'FreightDensityRate',
        'handling_units' => 'HandlingUnits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transportation_charges' => 'setTransportationCharges',
        'freight_density_rate' => 'setFreightDensityRate',
        'handling_units' => 'setHandlingUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transportation_charges' => 'getTransportationCharges',
        'freight_density_rate' => 'getFreightDensityRate',
        'handling_units' => 'getHandlingUnits'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['transportation_charges'] = isset($data['transportation_charges']) ? $data['transportation_charges'] : null;
        $this->container['freight_density_rate'] = isset($data['freight_density_rate']) ? $data['freight_density_rate'] : null;
        $this->container['handling_units'] = isset($data['handling_units']) ? $data['handling_units'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transportation_charges'] === null) {
            $invalidProperties[] = "'transportation_charges' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets transportation_charges
     *
     * @return \UPS\Rating\Rating\FRSShipmentDataTransportationCharges
     */
    public function getTransportationCharges()
    {
        return $this->container['transportation_charges'];
    }

    /**
     * Sets transportation_charges
     *
     * @param \UPS\Rating\Rating\FRSShipmentDataTransportationCharges $transportation_charges transportation_charges
     *
     * @return $this
     */
    public function setTransportationCharges($transportation_charges)
    {
        $this->container['transportation_charges'] = $transportation_charges;

        return $this;
    }

    /**
     * Gets freight_density_rate
     *
     * @return \UPS\Rating\Rating\FRSShipmentDataFreightDensityRate
     */
    public function getFreightDensityRate()
    {
        return $this->container['freight_density_rate'];
    }

    /**
     * Sets freight_density_rate
     *
     * @param \UPS\Rating\Rating\FRSShipmentDataFreightDensityRate $freight_density_rate freight_density_rate
     *
     * @return $this
     */
    public function setFreightDensityRate($freight_density_rate)
    {
        $this->container['freight_density_rate'] = $freight_density_rate;

        return $this;
    }

    /**
     * Gets handling_units
     *
     * @return OneOfRatedShipmentFRSShipmentDataHandlingUnits
     */
    public function getHandlingUnits()
    {
        return $this->container['handling_units'];
    }

    /**
     * Sets handling_units
     *
     * @param OneOfRatedShipmentFRSShipmentDataHandlingUnits $handling_units handling_units
     *
     * @return $this
     */
    public function setHandlingUnits($handling_units)
    {
        $this->container['handling_units'] = $handling_units;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
