<?php
/**
 * RateResponseRatedShipment
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
 * RateResponseRatedShipment Class Doc Comment
 *
 * @category Class
 * @description RatedShipment Container.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RateResponseRatedShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RateResponse_RatedShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'disclaimer' => 'OneOfRateResponseRatedShipmentDisclaimer',
        'service' => '\UPS\Rating\Rating\RatedShipmentService',
        'rate_chart' => 'string',
        'rated_shipment_alert' => 'OneOfRateResponseRatedShipmentRatedShipmentAlert',
        'billable_weight_calculation_method' => 'string',
        'rating_method' => 'string',
        'billing_weight' => '\UPS\Rating\Rating\RatedShipmentBillingWeight',
        'transportation_charges' => '\UPS\Rating\Rating\RatedShipmentTransportationCharges',
        'base_service_charge' => '\UPS\Rating\Rating\RatedShipmentBaseServiceCharge',
        'itemized_charges' => 'OneOfRateResponseRatedShipmentItemizedCharges',
        'frs_shipment_data' => '\UPS\Rating\Rating\RatedShipmentFRSShipmentData',
        'service_options_charges' => '\UPS\Rating\Rating\RatedShipmentServiceOptionsCharges',
        'tax_charges' => 'OneOfRateResponseRatedShipmentTaxCharges',
        'total_charges' => '\UPS\Rating\Rating\RatedShipmentTotalCharges',
        'total_charges_with_taxes' => '\UPS\Rating\Rating\RatedShipmentTotalChargesWithTaxes',
        'negotiated_rate_charges' => '\UPS\Rating\Rating\RatedShipmentNegotiatedRateCharges',
        'rated_package' => 'OneOfRateResponseRatedShipmentRatedPackage',
        'time_in_transit' => '\UPS\Rating\Rating\RatedShipmentTimeInTransit',
        'scheduled_delivery_date' => 'string',
        'roar_rated_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'disclaimer' => null,
        'service' => null,
        'rate_chart' => null,
        'rated_shipment_alert' => null,
        'billable_weight_calculation_method' => null,
        'rating_method' => null,
        'billing_weight' => null,
        'transportation_charges' => null,
        'base_service_charge' => null,
        'itemized_charges' => null,
        'frs_shipment_data' => null,
        'service_options_charges' => null,
        'tax_charges' => null,
        'total_charges' => null,
        'total_charges_with_taxes' => null,
        'negotiated_rate_charges' => null,
        'rated_package' => null,
        'time_in_transit' => null,
        'scheduled_delivery_date' => null,
        'roar_rated_indicator' => null
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
        'disclaimer' => 'Disclaimer',
        'service' => 'Service',
        'rate_chart' => 'RateChart',
        'rated_shipment_alert' => 'RatedShipmentAlert',
        'billable_weight_calculation_method' => 'BillableWeightCalculationMethod',
        'rating_method' => 'RatingMethod',
        'billing_weight' => 'BillingWeight',
        'transportation_charges' => 'TransportationCharges',
        'base_service_charge' => 'BaseServiceCharge',
        'itemized_charges' => 'ItemizedCharges',
        'frs_shipment_data' => 'FRSShipmentData',
        'service_options_charges' => 'ServiceOptionsCharges',
        'tax_charges' => 'TaxCharges',
        'total_charges' => 'TotalCharges',
        'total_charges_with_taxes' => 'TotalChargesWithTaxes',
        'negotiated_rate_charges' => 'NegotiatedRateCharges',
        'rated_package' => 'RatedPackage',
        'time_in_transit' => 'TimeInTransit',
        'scheduled_delivery_date' => 'ScheduledDeliveryDate',
        'roar_rated_indicator' => 'RoarRatedIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'disclaimer' => 'setDisclaimer',
        'service' => 'setService',
        'rate_chart' => 'setRateChart',
        'rated_shipment_alert' => 'setRatedShipmentAlert',
        'billable_weight_calculation_method' => 'setBillableWeightCalculationMethod',
        'rating_method' => 'setRatingMethod',
        'billing_weight' => 'setBillingWeight',
        'transportation_charges' => 'setTransportationCharges',
        'base_service_charge' => 'setBaseServiceCharge',
        'itemized_charges' => 'setItemizedCharges',
        'frs_shipment_data' => 'setFrsShipmentData',
        'service_options_charges' => 'setServiceOptionsCharges',
        'tax_charges' => 'setTaxCharges',
        'total_charges' => 'setTotalCharges',
        'total_charges_with_taxes' => 'setTotalChargesWithTaxes',
        'negotiated_rate_charges' => 'setNegotiatedRateCharges',
        'rated_package' => 'setRatedPackage',
        'time_in_transit' => 'setTimeInTransit',
        'scheduled_delivery_date' => 'setScheduledDeliveryDate',
        'roar_rated_indicator' => 'setRoarRatedIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'disclaimer' => 'getDisclaimer',
        'service' => 'getService',
        'rate_chart' => 'getRateChart',
        'rated_shipment_alert' => 'getRatedShipmentAlert',
        'billable_weight_calculation_method' => 'getBillableWeightCalculationMethod',
        'rating_method' => 'getRatingMethod',
        'billing_weight' => 'getBillingWeight',
        'transportation_charges' => 'getTransportationCharges',
        'base_service_charge' => 'getBaseServiceCharge',
        'itemized_charges' => 'getItemizedCharges',
        'frs_shipment_data' => 'getFrsShipmentData',
        'service_options_charges' => 'getServiceOptionsCharges',
        'tax_charges' => 'getTaxCharges',
        'total_charges' => 'getTotalCharges',
        'total_charges_with_taxes' => 'getTotalChargesWithTaxes',
        'negotiated_rate_charges' => 'getNegotiatedRateCharges',
        'rated_package' => 'getRatedPackage',
        'time_in_transit' => 'getTimeInTransit',
        'scheduled_delivery_date' => 'getScheduledDeliveryDate',
        'roar_rated_indicator' => 'getRoarRatedIndicator'
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
        $this->container['disclaimer'] = isset($data['disclaimer']) ? $data['disclaimer'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['rate_chart'] = isset($data['rate_chart']) ? $data['rate_chart'] : null;
        $this->container['rated_shipment_alert'] = isset($data['rated_shipment_alert']) ? $data['rated_shipment_alert'] : null;
        $this->container['billable_weight_calculation_method'] = isset($data['billable_weight_calculation_method']) ? $data['billable_weight_calculation_method'] : null;
        $this->container['rating_method'] = isset($data['rating_method']) ? $data['rating_method'] : null;
        $this->container['billing_weight'] = isset($data['billing_weight']) ? $data['billing_weight'] : null;
        $this->container['transportation_charges'] = isset($data['transportation_charges']) ? $data['transportation_charges'] : null;
        $this->container['base_service_charge'] = isset($data['base_service_charge']) ? $data['base_service_charge'] : null;
        $this->container['itemized_charges'] = isset($data['itemized_charges']) ? $data['itemized_charges'] : null;
        $this->container['frs_shipment_data'] = isset($data['frs_shipment_data']) ? $data['frs_shipment_data'] : null;
        $this->container['service_options_charges'] = isset($data['service_options_charges']) ? $data['service_options_charges'] : null;
        $this->container['tax_charges'] = isset($data['tax_charges']) ? $data['tax_charges'] : null;
        $this->container['total_charges'] = isset($data['total_charges']) ? $data['total_charges'] : null;
        $this->container['total_charges_with_taxes'] = isset($data['total_charges_with_taxes']) ? $data['total_charges_with_taxes'] : null;
        $this->container['negotiated_rate_charges'] = isset($data['negotiated_rate_charges']) ? $data['negotiated_rate_charges'] : null;
        $this->container['rated_package'] = isset($data['rated_package']) ? $data['rated_package'] : null;
        $this->container['time_in_transit'] = isset($data['time_in_transit']) ? $data['time_in_transit'] : null;
        $this->container['scheduled_delivery_date'] = isset($data['scheduled_delivery_date']) ? $data['scheduled_delivery_date'] : null;
        $this->container['roar_rated_indicator'] = isset($data['roar_rated_indicator']) ? $data['roar_rated_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['billing_weight'] === null) {
            $invalidProperties[] = "'billing_weight' can't be null";
        }
        if ($this->container['transportation_charges'] === null) {
            $invalidProperties[] = "'transportation_charges' can't be null";
        }
        if ($this->container['service_options_charges'] === null) {
            $invalidProperties[] = "'service_options_charges' can't be null";
        }
        if ($this->container['total_charges'] === null) {
            $invalidProperties[] = "'total_charges' can't be null";
        }
        if ($this->container['rated_package'] === null) {
            $invalidProperties[] = "'rated_package' can't be null";
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
     * Gets disclaimer
     *
     * @return OneOfRateResponseRatedShipmentDisclaimer
     */
    public function getDisclaimer()
    {
        return $this->container['disclaimer'];
    }

    /**
     * Sets disclaimer
     *
     * @param OneOfRateResponseRatedShipmentDisclaimer $disclaimer disclaimer
     *
     * @return $this
     */
    public function setDisclaimer($disclaimer)
    {
        $this->container['disclaimer'] = $disclaimer;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \UPS\Rating\Rating\RatedShipmentService
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \UPS\Rating\Rating\RatedShipmentService $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets rate_chart
     *
     * @return string
     */
    public function getRateChart()
    {
        return $this->container['rate_chart'];
    }

    /**
     * Sets rate_chart
     *
     * @param string $rate_chart Rate Type with which Shipment is rated. Possible RateChart values for different regions will be: US 48 origin: 1 \" Daily Rates 3 \" Standard List Rates 4 \" Retail Rates. Alaska/Hawaii origin:1 \" Daily Rates 3 \" Standard List Rates 4 \" Retail Rates.  All Other origins:1 \" Rates 5 - Regional Rates 6 - General List Rates. 3 and 4 do not apply
     *
     * @return $this
     */
    public function setRateChart($rate_chart)
    {
        $this->container['rate_chart'] = $rate_chart;

        return $this;
    }

    /**
     * Gets rated_shipment_alert
     *
     * @return OneOfRateResponseRatedShipmentRatedShipmentAlert
     */
    public function getRatedShipmentAlert()
    {
        return $this->container['rated_shipment_alert'];
    }

    /**
     * Sets rated_shipment_alert
     *
     * @param OneOfRateResponseRatedShipmentRatedShipmentAlert $rated_shipment_alert rated_shipment_alert
     *
     * @return $this
     */
    public function setRatedShipmentAlert($rated_shipment_alert)
    {
        $this->container['rated_shipment_alert'] = $rated_shipment_alert;

        return $this;
    }

    /**
     * Gets billable_weight_calculation_method
     *
     * @return string
     */
    public function getBillableWeightCalculationMethod()
    {
        return $this->container['billable_weight_calculation_method'];
    }

    /**
     * Sets billable_weight_calculation_method
     *
     * @param string $billable_weight_calculation_method Indicates whether the billable weight calculation method is utilized at the package or shipment level.  This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 = Shipment Billable Weight02 = Package Billable Weight
     *
     * @return $this
     */
    public function setBillableWeightCalculationMethod($billable_weight_calculation_method)
    {
        $this->container['billable_weight_calculation_method'] = $billable_weight_calculation_method;

        return $this;
    }

    /**
     * Gets rating_method
     *
     * @return string
     */
    public function getRatingMethod()
    {
        return $this->container['rating_method'];
    }

    /**
     * Sets rating_method
     *
     * @param string $rating_method Indicates whether the Shipment was rated at the shipment-level or the package-level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 = Shipment level02 = Package level
     *
     * @return $this
     */
    public function setRatingMethod($rating_method)
    {
        $this->container['rating_method'] = $rating_method;

        return $this;
    }

    /**
     * Gets billing_weight
     *
     * @return \UPS\Rating\Rating\RatedShipmentBillingWeight
     */
    public function getBillingWeight()
    {
        return $this->container['billing_weight'];
    }

    /**
     * Sets billing_weight
     *
     * @param \UPS\Rating\Rating\RatedShipmentBillingWeight $billing_weight billing_weight
     *
     * @return $this
     */
    public function setBillingWeight($billing_weight)
    {
        $this->container['billing_weight'] = $billing_weight;

        return $this;
    }

    /**
     * Gets transportation_charges
     *
     * @return \UPS\Rating\Rating\RatedShipmentTransportationCharges
     */
    public function getTransportationCharges()
    {
        return $this->container['transportation_charges'];
    }

    /**
     * Sets transportation_charges
     *
     * @param \UPS\Rating\Rating\RatedShipmentTransportationCharges $transportation_charges transportation_charges
     *
     * @return $this
     */
    public function setTransportationCharges($transportation_charges)
    {
        $this->container['transportation_charges'] = $transportation_charges;

        return $this;
    }

    /**
     * Gets base_service_charge
     *
     * @return \UPS\Rating\Rating\RatedShipmentBaseServiceCharge
     */
    public function getBaseServiceCharge()
    {
        return $this->container['base_service_charge'];
    }

    /**
     * Sets base_service_charge
     *
     * @param \UPS\Rating\Rating\RatedShipmentBaseServiceCharge $base_service_charge base_service_charge
     *
     * @return $this
     */
    public function setBaseServiceCharge($base_service_charge)
    {
        $this->container['base_service_charge'] = $base_service_charge;

        return $this;
    }

    /**
     * Gets itemized_charges
     *
     * @return OneOfRateResponseRatedShipmentItemizedCharges
     */
    public function getItemizedCharges()
    {
        return $this->container['itemized_charges'];
    }

    /**
     * Sets itemized_charges
     *
     * @param OneOfRateResponseRatedShipmentItemizedCharges $itemized_charges itemized_charges
     *
     * @return $this
     */
    public function setItemizedCharges($itemized_charges)
    {
        $this->container['itemized_charges'] = $itemized_charges;

        return $this;
    }

    /**
     * Gets frs_shipment_data
     *
     * @return \UPS\Rating\Rating\RatedShipmentFRSShipmentData
     */
    public function getFrsShipmentData()
    {
        return $this->container['frs_shipment_data'];
    }

    /**
     * Sets frs_shipment_data
     *
     * @param \UPS\Rating\Rating\RatedShipmentFRSShipmentData $frs_shipment_data frs_shipment_data
     *
     * @return $this
     */
    public function setFrsShipmentData($frs_shipment_data)
    {
        $this->container['frs_shipment_data'] = $frs_shipment_data;

        return $this;
    }

    /**
     * Gets service_options_charges
     *
     * @return \UPS\Rating\Rating\RatedShipmentServiceOptionsCharges
     */
    public function getServiceOptionsCharges()
    {
        return $this->container['service_options_charges'];
    }

    /**
     * Sets service_options_charges
     *
     * @param \UPS\Rating\Rating\RatedShipmentServiceOptionsCharges $service_options_charges service_options_charges
     *
     * @return $this
     */
    public function setServiceOptionsCharges($service_options_charges)
    {
        $this->container['service_options_charges'] = $service_options_charges;

        return $this;
    }

    /**
     * Gets tax_charges
     *
     * @return OneOfRateResponseRatedShipmentTaxCharges
     */
    public function getTaxCharges()
    {
        return $this->container['tax_charges'];
    }

    /**
     * Sets tax_charges
     *
     * @param OneOfRateResponseRatedShipmentTaxCharges $tax_charges tax_charges
     *
     * @return $this
     */
    public function setTaxCharges($tax_charges)
    {
        $this->container['tax_charges'] = $tax_charges;

        return $this;
    }

    /**
     * Gets total_charges
     *
     * @return \UPS\Rating\Rating\RatedShipmentTotalCharges
     */
    public function getTotalCharges()
    {
        return $this->container['total_charges'];
    }

    /**
     * Sets total_charges
     *
     * @param \UPS\Rating\Rating\RatedShipmentTotalCharges $total_charges total_charges
     *
     * @return $this
     */
    public function setTotalCharges($total_charges)
    {
        $this->container['total_charges'] = $total_charges;

        return $this;
    }

    /**
     * Gets total_charges_with_taxes
     *
     * @return \UPS\Rating\Rating\RatedShipmentTotalChargesWithTaxes
     */
    public function getTotalChargesWithTaxes()
    {
        return $this->container['total_charges_with_taxes'];
    }

    /**
     * Sets total_charges_with_taxes
     *
     * @param \UPS\Rating\Rating\RatedShipmentTotalChargesWithTaxes $total_charges_with_taxes total_charges_with_taxes
     *
     * @return $this
     */
    public function setTotalChargesWithTaxes($total_charges_with_taxes)
    {
        $this->container['total_charges_with_taxes'] = $total_charges_with_taxes;

        return $this;
    }

    /**
     * Gets negotiated_rate_charges
     *
     * @return \UPS\Rating\Rating\RatedShipmentNegotiatedRateCharges
     */
    public function getNegotiatedRateCharges()
    {
        return $this->container['negotiated_rate_charges'];
    }

    /**
     * Sets negotiated_rate_charges
     *
     * @param \UPS\Rating\Rating\RatedShipmentNegotiatedRateCharges $negotiated_rate_charges negotiated_rate_charges
     *
     * @return $this
     */
    public function setNegotiatedRateCharges($negotiated_rate_charges)
    {
        $this->container['negotiated_rate_charges'] = $negotiated_rate_charges;

        return $this;
    }

    /**
     * Gets rated_package
     *
     * @return OneOfRateResponseRatedShipmentRatedPackage
     */
    public function getRatedPackage()
    {
        return $this->container['rated_package'];
    }

    /**
     * Sets rated_package
     *
     * @param OneOfRateResponseRatedShipmentRatedPackage $rated_package rated_package
     *
     * @return $this
     */
    public function setRatedPackage($rated_package)
    {
        $this->container['rated_package'] = $rated_package;

        return $this;
    }

    /**
     * Gets time_in_transit
     *
     * @return \UPS\Rating\Rating\RatedShipmentTimeInTransit
     */
    public function getTimeInTransit()
    {
        return $this->container['time_in_transit'];
    }

    /**
     * Sets time_in_transit
     *
     * @param \UPS\Rating\Rating\RatedShipmentTimeInTransit $time_in_transit time_in_transit
     *
     * @return $this
     */
    public function setTimeInTransit($time_in_transit)
    {
        $this->container['time_in_transit'] = $time_in_transit;

        return $this;
    }

    /**
     * Gets scheduled_delivery_date
     *
     * @return string
     */
    public function getScheduledDeliveryDate()
    {
        return $this->container['scheduled_delivery_date'];
    }

    /**
     * Sets scheduled_delivery_date
     *
     * @param string $scheduled_delivery_date The rated shipments scheduled delivery date, ScheduledDeliveryDate returned only when Subversion of 2205 was sent in the request and the customer has the specific contract.
     *
     * @return $this
     */
    public function setScheduledDeliveryDate($scheduled_delivery_date)
    {
        $this->container['scheduled_delivery_date'] = $scheduled_delivery_date;

        return $this;
    }

    /**
     * Gets roar_rated_indicator
     *
     * @return string
     */
    public function getRoarRatedIndicator()
    {
        return $this->container['roar_rated_indicator'];
    }

    /**
     * Sets roar_rated_indicator
     *
     * @param string $roar_rated_indicator Informational only
     *
     * @return $this
     */
    public function setRoarRatedIndicator($roar_rated_indicator)
    {
        $this->container['roar_rated_indicator'] = $roar_rated_indicator;

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
