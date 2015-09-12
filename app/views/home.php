<?php require VIEW_ROOT . '/partials/header.php'; ?>

  <div class="container-fluid" ng-controller="ClientsCtrl as clients">

    <div class="col-md-8 col-md-offset-2">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><h2> <i class="fa fa-users fa-2x"></i> Clients</h2></h3>
      </div>

        <table class='table table-striped table-bordered table-hover table-condensed'>
          <thead>
            <tr>
              <th>Name</th>
              <th>
                Phone
              </th>
              <th>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="client in clients.all">
              <td>{{ client.name }}</td>
              <td>
                {{ client.phone }}
              </td>
              <td>
                <button type="button" class="btn btn-default btn-block" ng-click="clients.getorders(client.id)">
                  Orders
                </button>
              </td>
            </tr>
          </tbody>
        </table>

      <div class="panel-footer">

    </div>

  </div>

  <?php require VIEW_ROOT . '/orders.php'; ?>

  </div>

  </div>

  <p class="text-center">
    <i class="fa fa-hand-peace-o"></i> <strong>lalocespedes</strong>
  </p>


<?php require VIEW_ROOT . '/partials/footer.php'; ?>
