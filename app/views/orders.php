<div class="modal fade" id="orders" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Orders</h3>
      </div>
      <div class="modal-body" >

        <h3 class="tag-title text-center"> <i class="fa fa-user"></i> {{ clients.client.name }}</h3>
        <hr />

        <div ng-repeat="order in clients.orders" style="border-collapse:collapse;">

            <div class="list-group">
              <a href="#" class="list-group-item" data-toggle="collapse" data-target="#order{{ order.id }}" class="accordion-toggle">

                <h4 class="list-group-item-heading">
                  <i class="fa fa-file"></i> <small>Order #: </small> {{ order.order_Number }}
                </h4>
                <p class="list-group-item-text">
                  <div class="text-right">
                    <small>Date:</small> {{ order.order_Date }}
                  </div>
                </p>
                  <div class="collapse" id="order{{ order.id }}">
                    <table class='table table-striped table-bordered table-condensed'>
                      <caption class="text-center"><strong>Items</strong></caption>
                      <thead>
                        <tr>
                          <th>Qty</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Tax</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="item in clients.orders.items">
                          <td>{{ item.Qty }}</td>
                          <td>{{ item.Description }}</td>
                          <td>{{ item.price }}</td>
                          <td>{{ item.tax }}</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="text-right">
                      </h3>
                        <small>total items:</small>
                        <strong>{{ order.items_total}}</strong>
                      </h3>
                    </div>
                   </div>

                <div class="collapse" id="payment{{ order.id }}">

                  <table class='table table-striped table-bordered table-hover table-condensed'>
                    <caption class="text-center"><strong>payments</strong></caption>
                    <thead>
                      <tr>
                        <th>Amount</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="payment in clients.orders.payments">
                        <td>{{ payment.amount }}</td>
                        <td>{{ payment.date_entered }}</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

                <div class="text-right">
                <h5>
                  <small>subtotal:</small> <strong>{{ order.subtotal | currency}} </strong>
                  <small>taxes:</small> <strong> {{ order.taxes | currency}} </strong>
                  <small>ship:</small> <strong>{{ order.ship | currency}}</strong>
                  <small>total:</small> <strong>{{ order.total | currency}}</strong>
                  <small>paid:</small> <strong>{{ order.balance | currency}}</strong>
                </h5>
                </div>

                <div class="text-center">
                  <h5>
                    <small>shipped to:</small>
                    {{ clients.client.shipping.address }}
                    {{ clients.client.shipping.zip }}
                    {{ clients.client.shipping.country }}
                  </h5>
                </div>

              </a>
              <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#payment{{ order.id }}" class="accordion-toggle">
                <i class="fa fa-usd"></i> payments
              </button>
            </div>

          </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
