define([
    'uiComponent',
    'ko'
], function (Component, ko) {
    "use strict";

    return Component.extend({
        defaults: {
            template: 'Ammi_PromoWidget/promo-widget',
            messageText: '',
            backgroundColor: '',
            showMessage: false
        },

        /** Initialisation du composant */
        initialize: function (config) {
            this._super();

            // Initialiser les valeurs dynamiques
            this.messageText = ko.observable(config.messageText || 'Offre spéciale en cours !');
            this.backgroundColor = ko.observable(config.backgroundColor || '#ffcc00');
            this.showMessage = ko.observable(false);

            // Faire apparaître le message après 5 secondes
            setTimeout(() => {
                this.showMessage(true);
            }, 5000);
        },

        /** Initialisation des observables */
        initObservable: function () {
            this._super().observe(['messageText', 'backgroundColor', 'showMessage']);
            return this;
        }
    });
});
