<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Split response
 */
class GetSplitResponse implements JsonSerializable
{
    /**
     * Type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Amount
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * Recipient
     * @var \MundiAPILib\Models\GetRecipientResponse|null $recipient public property
     */
    public $recipient;

    /**
     * The split rule gateway id
     * @required
     * @maps gateway_id
     * @var string $gatewayId public property
     */
    public $gatewayId;

    /**
     * @todo Write general description for this property
     * @var \MundiAPILib\Models\GetSplitOptionsResponse|null $options public property
     */
    public $options;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                  $type      Initialization value for $this->type
     * @param integer                 $amount    Initialization value for $this->amount
     * @param GetRecipientResponse    $recipient Initialization value for $this->recipient
     * @param string                  $gatewayId Initialization value for $this->gatewayId
     * @param GetSplitOptionsResponse $options   Initialization value for $this->options
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->type      = func_get_arg(0);
            $this->amount    = func_get_arg(1);
            $this->recipient = func_get_arg(2);
            $this->gatewayId = func_get_arg(3);
            $this->options   = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']       = $this->type;
        $json['amount']     = $this->amount;
        $json['recipient']  = $this->recipient;
        $json['gateway_id'] = $this->gatewayId;
        $json['options']    = $this->options;

        return $json;
    }
}
