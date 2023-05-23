
<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>

              <form action="{{url('search')}}" method="" class="form-inline" style="float:right;padding:10px;">

                  @csrf

                  <input class="form-control" type="search" name="search" id="" placeholder="search">
                  <input type="submit" value="Search" class="btn btn-success">
              </form>
          </div>
        </div>


        @foreach($data as $product)


        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{$product->title}}</h4></a>
              <h5>{{$product->catagory}}</h5>
              <h6>{{$product->price}}DH</h6>
              <p>{{$product->description}}</p>



              <form action="{{url('addcart',$product->id)}}" method="POST">
                  @csrf
                  <br>
                  <input class="btn " type="submit" value="Add Cart" id="" style="background-color:blue">
              </form>

            </div>
          </div>
        </div>
        @endforeach

  @if(method_exists($data,'links'))
        <div class="d-flex justify-content-center">

        {!! $data->links() !!}

        </div>

        @endif

      </div>
    </div>
  </div>
