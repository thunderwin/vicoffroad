/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
        'jquery',
        'Magestore_OneStepCheckout/js/view/payment/default',
        "mage/validation"
    ],
    function ($, Component) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'Magestore_OneStepCheckout/payment/paypal_billing_agreement-form',
                selectedBillingAgreement: ''
            },
            initObservable: function () {
                this._super()
                    .observe('selectedBillingAgreement');
                return this;
            },
            getTransportName: function() {
                return window.checkoutConfig.payment.paypalBillingAgreement.transportName;
            },
            getBillingAgreements: function() {
                return window.checkoutConfig.payment.paypalBillingAgreement.agreements;
            },
            getData: function() {

                var additionalData = null;
                if (this.getTransportName()) {
                    additionalData = {};
                    additionalData[this.getTransportName()] = this.selectedBillingAgreement();
                }
                return {'method': this.item.method, 'additional_data': additionalData};
            },
            validate: function() {
                var form = '#billing-agreement-form';
                return $(form).validation() && $(form).validation('isValid') && this._super();
            }
        });
    }
);
