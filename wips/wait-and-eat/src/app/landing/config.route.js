(function () {
    'use strict';
    
    angular
        .module('app.landing')//getting the landing module - very similar to how you create a module
        .config(configFunction) //running config on the landing module; defined below
    
    configFunction.$inject = ['$routeProvider']; //in angular-route.js; making everything inside $routeProvider available in configFUnction - creating dependency
    
    function configFunction($routeProvider) {
        // need to have access to route provider - allows us to specify where the app should go according to diff url's
        $routeProvider.when('/', { 
            templateUrl: 'app/landing/landing.html'
            //what to do when you get to "/" url
        });
    }
    
})();