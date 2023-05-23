

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
      <!-- partial -->
    @include('admin.sidebar')

    @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <table>
                <tr style="background-color:grey;">
                    <td style="padding:20px">Customer name</td>
                        <td style="padding:20px">Customer email</td>
                        <td style="padding:20px">Phone</td>
                        <td style="padding:20px">Address</td>
                        <td style="padding:20px">Product title</td>
                        <td style="padding:20px">price</td>
                        <td style="padding:20px">Quantity</td>
                        <td style="padding:20px">Status</td>
                        <td style="padding:20px">Action</td>
                        <td style="padding:20px">Print PDF</td>
                        <td style="padding:20px">Email</td>


                </tr>
                @foreach($order as $orders)
                <tr align="center" style="background-color:black;">
                    <td style="padding:20px">{{$orders->name}}</td>
                        <td style="padding:20px">{{$orders->phone}}</td>
                        <td style="padding:20px">{{$orders->address}}</td>
                        <td style="padding:20px">{{$orders->product_name}}</td>
                        <td style="padding:20px">{{$orders->price}}</td>
                        <td style="padding:20px">{{$orders->quantity}}</td>
                        <td style="padding:20px">{{$orders->statut}}</td>
                        <td style="padding:20px">Send Email</td>
                        <td style="padding:20px">
                            <a class="btn btn-success"
                             href="{{url('updatestatus',$orders->id)}}">Delivered
                            </a>
                        </td>
                        <td>
                            <a href="{{url('print_pdf',$orders->id)}}" class="btn btn-info">Print PDF</a>
                          </td>
                          <td>

                            <a class="btn btn-info" href="{{url('send-mail')}}">Send Email</a>

                            </td>

                            
                          <td>


                    </tr>
                    @endforeach
            </table>

        </div>
        </div>


          <!-- partial -->
       @include('admin.script')
  </body>
</html>
