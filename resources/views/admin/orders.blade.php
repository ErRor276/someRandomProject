@extends('partials/layout')

@section('pageTitle', 'Orders')

@section('content')


        <!-- Begin Page Content --> 
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Orders</h1>
         {{--  <p class="mb-4">There are currently <b>{{ $counts }}</b> users in FoodTPie.</p> --}}

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Oders</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>OrderID</th>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Address</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>OrderID</th>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Address</th>
                    </tr>
                  </tfoot>
                  <tbody>
                   @foreach($order as $orders)
                        <tr>
                          <td>{{ $orders->order_id }}</td>
                          <td>{{ $orders->product_name }}</td>
                          <td>{{ $orders->quantity }}
                          <td>{{ $orders->order_location }}</td>
                        </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection

@section('script')
 
  <!-- Bootstrap core JavaScript-->
  <script src="{{ URL::asset('administrator/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('administrator/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ URL::asset('administrator/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ URL::asset('administrator/js/sb-admin-2.min.js') }}"></script>


  <script src="{{ URL::asset('administrator/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('administrator/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ URL::asset('administrator/js/demo/datatables-demo.js') }}"></script>

@endsection
