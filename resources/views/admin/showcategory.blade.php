<x-app-layout>

</x-app-layout>

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

        <div  style="padding-buttom:30px" class="container-fluid page-body-wrapper">
            <div class="container" align="center">

                @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif

              <table>
                <tr style=" background-color:grey">
                    <td style="padding:20px;">Categories</td>
                </tr>
                @foreach ($data as $category )


            <tr  align="center" style="background-color:black;">
                <td >{{$category->name}}</td>
                <td>
                    <a class="btn btn-primary" href="{{url('updatecat',$category->id)}}">Update</a>
                </td>
                <td>
                    <a onclick="return confirm('Are you sure')"
                     class="btn btn-danger" href="{{url('deletecat',$category->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach

              </table>

          <!-- partial -->
       @include('admin.script')
  </body>
</html>
