//wrapping angular components in IIFE immediately invoked function expression ; removes variables from the global scope
(function() {
    'use strict';
    
    angular
        .module('app', [
            // Angular modules.
            'ngRoute', //sits inside of angular-route.js file

            // Third-party modules.
            'firebase', //inside of firebase.js file
        
            // Custom modules that we've written.
            'app.landing',
            'app.waitList'
        ]);
    
})(); //immediately run function
