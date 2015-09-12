'use strict'

/**
 * @ngdoc service
 * @name postsApp.posts
 * @description
 * # posts
 * Service in the postsApp.
 */
angular.module('conseltek')
  .service('ClientsResource', function ($resource) {

    return $resource('http://localhost:9000/api/clients.php', {'get': { method: 'GET', isArray: false }})
  })
