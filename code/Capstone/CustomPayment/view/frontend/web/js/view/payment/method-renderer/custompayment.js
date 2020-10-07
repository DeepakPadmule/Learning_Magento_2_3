define([
        'jquery',
        'Magento_Payment/js/view/payment/cc-form'
    ],
    function ($, Component) {
        'use strict';

        return Component.extend({
            defaults: {
                template: 'Capstone_CustomPayment/payment/custompayment'
            },

            context: function() {
                return this;
            },

            getCode: function() {
                return 'capstone_custompayment';
            },

            isActive: function() {
                return true;
            }
        });
    }
);