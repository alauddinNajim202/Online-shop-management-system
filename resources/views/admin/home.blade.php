@extends('admin.templete')

@section('content')

<div class="content-wrapper">

    <div class="row">
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card bg-info">
              <div class="card-body">
                <div class="row">
                  <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                      <h3 class="mb-3">{{ $user }} </h3>

                    </div>
                  </div>

                </div>
                <h6 class="text-muted font-weight-normal">Total Users</h6>
              </div>
            </div>
          </div>
      <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
        <div class="card bg-info">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-3">{{ $products }} </h3>

                </div>
              </div>

            </div>
            <h6 class="text-muted font-weight-normal">Total Products</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
        <div class="card bg-info">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-3">{{ $category }} </h3>
                    </div>
              <h6 class="text-muted font-weight-normal">Total Category</h6>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
        <div class="card bg-info">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-3">{{ $order }} </h3>
                    </div>
              <h6 class="text-muted font-weight-normal">Total Order</h6>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
        <div class="card bg-info">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-3">${{ $price }} </h3>
                    </div>
              <h6 class="text-muted font-weight-normal">Total Income</h6>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
        <div class="card bg-info">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-3">{{ $order_quantity }} </h3>
                    </div>
              <h6 class="text-muted font-weight-normal">Total order quantity</h6>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
      <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Transaction History</h4>
            <canvas id="transaction-history" class="transaction-chart"> </canvas>
            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
              <div class="text-md-center text-xl-left">
                <h6 class="mb-1">Transfer to Cash</h6>
                <p class="text-muted mb-0">07 Jan 2023, 09:12AM</p>
              </div>
              <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <h6 class="font-weight-bold mb-0">${{ $order_cash }}</h6>
              </div>
            </div>
            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
              <div class="text-md-center text-xl-left">
                <h6 class="mb-1">Tranfer to Stripe</h6>
                <p class="text-muted mb-0">07 Jan 2023, 09:12AM</p>
              </div>
              <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <h6 class="font-weight-bold mb-0">${{ $order_stripe }} </h6>
              </div>
            </div>
          </div>
        </div>
      </div>




    </div>

  </div>
@endsection
