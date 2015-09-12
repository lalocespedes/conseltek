'use strict'

/**
 * @ngdoc service
 * @name postsApp.posts
 * @description
 * # posts
 * Service in the postsApp.
 */
angular.module('conseltek')
  .service('OrdersResource', function ($resource) {

    return $resource('http://localhost:9000/api/orders.php', {})
  })
