@extends('layouts.app')

@section('content')

 
<div class="wrapper">

  <!-- Preloader -->
    @include('layouts.admin_layout.preloader')
  <!-- Preloader -->


  <!-- Navbar -->
    @include('layouts.admin_layout.top_navbar')
  <!-- /.navbar -->


  <!-- Left Navbar -->
    @include('layouts.admin_layout.left_navbar')
  <!-- Left Navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <br>
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img style="height: 70px !important;" src="{{asset(App\Http\Traits\ConfigTraits::get_favicon())}}" alt="">
            </div>
        </div>

        <!-- Main row -->
        <div class="row">

            <div class="col-md-12" style="margin-top:25px;">
    
           

            <div class="card">
            <div class="card-header bg-info">Product</div>
            <div class="card-body">
                <a href="{{ url('/admin/product/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>

                <form method="GET" action="{{ url('/admin/product') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                        <span class="input-group-append">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>

                <br/>
                <br/>
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Subcategory</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Image</th>
                                <th>Multiple Images</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>

                                    <td>{{ $item->title }}</td>
                                    
                                    <td>{{ App\Models\Category::find($item->category)->name }}</td>
                                    <td>{{ ($item->subcategory) ? App\Models\Subcategory::find($item->subcategory)->name : 'No Sub-Category'}}</td>
                                    
                                    <td>{{ $item->price }}</td>
                                    
                                    <td>{{ $item->quantity }}</td>
                                    
                                    <td>
                                        <img src="{{ ($item->image != null) ? asset($item->image) : asset('no_image.png') }}" style="height: 75px;width: 120px;border: 1px solid #000;border-radius: 10px;" />
                                    </td>
                                    
                                    <td>
                                        <a href="{{ url('/admin/uploadimage?id='.$item->id) }}" title="View Product"><button class="btn btn-dark btn-sm"><i class="fa fa-upload" aria-hidden="true"></i> Upload Images </button></a>
                                    </td>
                                   
                                    <td> <?php if($item->status == '1'){ ?> <span class="badge bg-primary"> <i class="fa fa-check"></i> Active </span> <?php }else{ ?> <span class="badge bg-danger"> <i class="fa fa-ban"></i> In-Active </span> <?php } ?> </td>
                                   
                                    <td>
                                        <a href="{{ url('/admin/product/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View </button></a>
                                        <a href="{{ url('/admin/product/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit </button></a>

                                        <form method="POST" action="{{ url('/admin/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Delete </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $product->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>

            </div>
            </div>
            </div>



        </div>
        <!-- /.row (main row) -->



      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Footer -->

  <!-- End Footer -->
  
</div>
<!-- ./wrapper -->


@endsection
