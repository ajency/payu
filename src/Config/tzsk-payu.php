<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Required Fields.
    |--------------------------------------------------------------------------
    |
    | These are the fields that are required for making a payment.
    |
    */
    'required_fields' => ['txnid', 'amount', 'productinfo', 'phone'],

    /*
    |--------------------------------------------------------------------------
    | Custom Ajency Fields.
    |--------------------------------------------------------------------------
    |
    | These are the fields that are removed from required.
    |
    */
    'custom_fields' => ['firstname', 'email'],

    /*
    |--------------------------------------------------------------------------
    | Optional / Additional Fields.
    |--------------------------------------------------------------------------
    |
    | These are the fields that are optional for making a payment.
    |
    */
    'optional_fields' => array_map(function ($i) {
        return "udf{$i}";
    }, range(1, 10)),

    'additional_fields' => ['lastname', 'address1', 'address2', 'city', 'state', 'country', 'zipcode'],

    /*
    |--------------------------------------------------------------------------
    | Payu Endpoint.
    |--------------------------------------------------------------------------
    |
    | Payment endpoint for Payu.
    |
    */
    'endpoint' => 'payu.in/_payment',

    /*
    |--------------------------------------------------------------------------
    | Redirect Success / Failure URL.
    |--------------------------------------------------------------------------
    |
    | Redirect after payment is complete with respect to Success or Failure.
    |
    */
    'redirect' => [
        'surl' => 'payu/payment/success',
        'furl' => 'payu/payment/failed',
    ]
];
