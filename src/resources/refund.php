<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        /**
         *    getRefunds() method
         *
         *    reference: https://help.shopify.com/api/reference/refund
         */
        "getRefunds" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{order_id}/refunds.json",
            "summary" => "Retrieve a list of Refunds for an Order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the order.",
                    "required" => true
                ),
                "fields" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),


        /**
         *    getRefund() method
         *
         *    reference: https://help.shopify.com/api/reference/refund
         */
        "getRefund" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{order_id}/refunds/{id}.json",
            "summary" => "Receive a single refund.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the refund.",
                    "required" => true
                ),
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the order.",
                    "required" => true
                ),
                "fields" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),

        /**
         *    calculateRefund() method
         *
         *    reference: https://help.shopify.com/api/reference/refund
         */
        "calculateRefund" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders/{order_id}/refunds/calculate.json",
            "summary" => "Calculate a Refund",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the order.",
                    "required" => true
                ),
                "shipping" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Object to specify how much shipping to refund."
                ),
                "refund_line_items" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Array of line item IDs and quantities to refund."
                )
            )
        ),
        
        
        /**
         *    createRefund() method
         *
         *    reference: https://help.shopify.com/api/reference/refund
         */
        "createRefund" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders/{order_id}/refunds.json",
            "summary" => "Create a Refund",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
              "refund" => array(
                "location" => "json",
                "parameters" => array(
                  "restock" => array(
                    "type" => "boolean",
                    "location" => "json",
                    "description" => "Restock the items to inventory or not."
                  ),
                  "notify" => array(
                    "type" => "boolean",
                    "location" => "json",
                    "description" => "Notify the customer.",
                  ),
                  "note" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "An optional comment attached to a refund.",
                  ),
                  "shipping" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Object to specify how much shipping to refund."
                  ),
                  "refund_line_items" => array(
                      "type" => "string",
                      "location" => "json",
                      "description" => "A list of line item objects, containing line_item_id and quantity."
                  ),
                  "transactions" => array(
                      "type" => "string",
                      "location" => "json",
                      "description" => "A list of line item objects, containing line_item_id and quantity."
                  ),
                )
              )
            )
        )
    ),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(),
);