'use strict'

/**
 * @ngdoc function
 * @name conseltek.controller:ClientsCtrl
 * @description
 * # ClientsCtrl
 * Controller of the consultek
 */
angular.module('conseltek')
  .controller('ClientsCtrl', function (ClientsResource, OrdersResource) {

    var clients = this

    // get all clients
    ClientsResource.get().$promise.then(function (data) {
          clients.all = data.clients
        })

    /**
     *
     */
    this.getorders = function (client_id) {

      clients.client = []
      clients.orders = []

      // get client info
      ClientsResource.get().$promise.then(function (data) {
            clients.client = data.clients[client_id]
            clients.client.shipping = data.shipping[client_id]
          })

      OrdersResource.get().$promise.then(function (data) {

            clients.orders = data.orders[client_id]
            clients.orders.items = data.items[client_id]
            clients.orders.payments = data.payments[client_id]

          })

      $('#orders').modal('show')

    }

  })
