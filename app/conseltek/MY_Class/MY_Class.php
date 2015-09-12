<?php

/**
 * Clase proyecto consultek
 */
class MY_Class
{
    /**
     * Clients array
     * @return array
     */
    public function clients()
    {
      return [
          [
              'id'    => 0,
              'name'  => 'Eduardo',
              'phone' => '1111111111'
          ],
          [
              'id'    => 1,
              'name'  => 'Norma',
              'phone' => '2222222222'
          ],
          [
              'id'    => 2,
              'name'  => 'Eunice',
              'phone' => '3333333333'
          ],
          [
              'id'    => 3,
              'name'  => 'Berenice',
              'phone' => '4444444444'
          ],
          [
              'id'    => 4,
              'name'  => 'Max',
              'phone' => '5555555555'
          ]
      ];

    }

    /**
     * Payments array
     * @return array
     */
    public function payments()
    {
      return [
        [
          [
            'id'            => 1,
            'order_id'      => 1,
            'amount'        => '869.00',
            'date_entered'  => '2015-09-10 23:59:59'
          ]
        ],
        [
          [
            'id'            => 2,
            'order_id'      => 2,
            'amount'        => '63.80',
            'date_entered'  => '2015-09-06 23:59:59'
          ]
        ],
        [
          [
            'id'            => 3,
            'order_id'      => 3,
            'amount'        => '603.98',
            'date_entered'  => '2015-09-07 23:59:59'
          ]
        ],
        [
          [
            'id'            => 4,
            'order_id'      => 4,
            'amount'        => '18.70',
            'date_entered'  => '2015-09-08 23:59:59'
          ]
        ],
        [
          [
            'id'            => 5,
            'order_id'      => 5,
            'amount'        => '165.00',
            'date_entered'  => '2015-09-09 23:59:59'
          ]
        ]
      ];

    }

    /**
     * Shipping array
     * @return array
     */
    public function shipping()
    {

      return [

          [
            'id'        => 1,
            'client_id' => 1,
            'address'   => 'Calle uno 123 Col. Conocida Matehuala, SLP',
            'zip'       => '78700',
            'country'   => 'Mexico'
          ],
          [
            'id'        => 1,
            'client_id' => 2,
            'address'   => 'Calle dos 234 Col. Conocida Matehuala, SLP',
            'zip'       => '78700',
            'country'   => 'Mexico'
          ],
          [
            'id'        => 1,
            'client_id' => 3,
            'address'   => 'Calle tres 345 Col. Conocida Matehuala, SLP',
            'zip'       => '78700',
            'country'   => 'Mexico'
          ],
          [
            'id'        => 1,
            'client_id' => 4,
            'address'   => 'Calle cuatro 456 Col. Conocida Matehuala, SLP',
            'zip'       => '78700',
            'country'   => 'Mexico'
          ],
          [
            'id'        => 1,
            'client_id' => 5,
            'address'   => 'Calle cinco 567 Col. Conocida Matehuala, SLP',
            'zip'       => '78700',
            'country'   => 'Mexico'
          ],

      ];

    }

    /**
     * Orders array
     * @return array
     */
    public function orders()
    {

      return [

          [
            [
              'id'            => 1,
              'client_id'     => 1,
              'shipping_id'   => 1,
              'order_Number'  => 'BC00001',
              'order_Date'    => '2015-09-05 23:59:59',
              'order_Status'  => 1,
              'items_total'   => 5,
              'subtotal'      => '790.00',
              'ship'          => '0.00',
              'taxes'         => '79',
              'total'         => '869',
              'balance'       => '869'
            ]
          ],
          [
            [
              'id'            => 2,
              'client_id'     => 2,
              'shipping_id'   => 2,
              'order_Number'  => 'BC00002',
              'order_Date'    => '2015-09-05 23:59:59',
              'order_Status'  => 1,
              'items_total'   => 3,
              'subtotal'      => '58.00',
              'ship'          => '0.00',
              'taxes'         => '5.80',
              'total'         => '63.80',
              'balance'       => '63.80'
            ]
          ],
          [
            [
              'id'            => 3,
              'client_id'     => 3,
              'shipping_id'   => 3,
              'order_Number'  => 'BC00003',
              'order_Date'    => '2015-09-05 23:59:59',
              'order_Status'  => 1,
              'items_total'   => 2,
              'subtotal'      => '598.00',
              'ship'          => '0.00',
              'taxes'         => '5.98',
              'total'         => '603.98',
              'balance'       => '603.98'
            ]
          ],
          [
            [
              'id'            => 4,
              'client_id'     => 4,
              'shipping_id'   => 4,
              'order_Number'  => 'BC00004',
              'order_Date'    => '2015-09-05 23:59:59',
              'order_Status'  => 1,
              'items_total'   => 3,
              'subtotal'      => '17.00',
              'ship'          => '0.00',
              'taxes'         => '1.70',
              'total'         => '18.70',
              'balance'       => '18.70'
            ]
          ],
          [
            [
              'id'            => 5,
              'client_id'     => 5,
              'shipping_id'   => 5,
              'order_Number'  => 'BC00005',
              'order_Date'    => '2015-09-05 23:59:59',
              'order_Status'  => 1,
              'items_total'   => 2,
              'subtotal'      => '150.00',
              'ship'          => '0.00',
              'taxes'         => '15.00',
              'total'         => '165.00',
              'balance'       => '165.00'
            ]
          ]
      ];

    }

    /**
     * OrdersItems array
     * @return array
     */
    public function ordersItems()
    {

      return [

          [
            [
              'id'          => 1,
              'order_id'    => 1,
              'Description' => 'rubber duck',
              'Qty'         => 3,
              'price'       => '250.00',
              'tax'         => '75.00'
            ],
            [
              'id'          => 2,
              'order_id'    => 1,
              'Description' => 'soap',
              'Qty'         => 1,
              'price'       => '25.00',
              'tax'         => '2.50'
            ],
            [
              'id'          => 3,
              'order_id'    => 1,
              'Description' => 'brush teeth',
              'Qty'         => 1,
              'price'       => '15.00',
              'tax'         => '1.50'
            ]
          ],
          [
            [
              'id'          => 4,
              'order_id'    => 2,
              'Description' => 'notebook',
              'Qty'         => 1,
              'price'       => '50.00',
              'tax'         => '5.00'
            ],
            [
              'id'          => 5,
              'order_id'    => 2,
              'Description' => 'pencil',
              'Qty'         => 2,
              'price'       => '8.00',
              'tax'         => '1.60'

            ]
          ],
          [
            [
              'id'          => 6,
              'order_id'    => 3,
              'Description' => 'chateau le doyenne',
              'Qty'         => 2,
              'price'       => '299.00',
              'tax'         => '59.80'
            ]
          ],
          [
            [
              'id'          => 8,
              'order_id'    => 4,
              'Description' => 'bubble gum pack',
              'Qty'         => 1,
              'price'       => '5.00',
              'tax'         => '0.50'
            ],
            [
              'id'          => 9,
              'order_id'    => 4,
              'Description' => 'ferrero rocher 300g',
              'Qty'         => 2,
              'price'       => '6.00',
              'tax'         => '1.20'
            ]
          ],
          [
            [
              'id'          => 10,
              'order_id'    => 5,
              'Description' => 'hammer drill',
              'Qty'         => 2,
              'price'       => '75.00',
              'tax'         => '15.00'
            ]
          ]
      ];

    }

}
