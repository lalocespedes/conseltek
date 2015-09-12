'use strict';

/**
 * @ngdoc overview
 * @name consultek
 * @description
 * # conseltek
 *
 * Main module of the application.
 */
angular
  .module('conseltek', [
    'ngResource',
    'ngSanitize',
    'ui.router'
  ])
  .config(function ($stateProvider, $urlRouterProvider) {
  //
  // Now set up the states
  $stateProvider
    .state('home', {
      url: '/',
      templateUrl: null
    })
    .state('items', {
      url: '/items',
      templateUrl: 'partials/items.html',
      controller: 'ItemsCtrl',
      controllerAs: 'items'
    })
});
