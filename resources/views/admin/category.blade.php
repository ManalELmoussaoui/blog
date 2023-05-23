<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style type="text/css">

      .title{
        color:white;
        padding-top: 25px;
         font-size: 25px;
     }
     label{
        display:inline-block;
        width: 200px;

     }

   </style>
  </head>
  <body>
      <!-- partial -->
    @include('admin.sidebar')

    @include('admin.navbar')
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
        <h1 class="title">Add Category</h1>

        @if(session()->has('message'))
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
        </div>
        @endif

         <form action="{{url('uploadcategory')}}" method="post" enctype="multipart/form-data">

            @csrf
        <div style="padding:15px;">
            <label>Caregory title :</label>
            <input style="color:black;" type="text" name="name" placeholder="give a product title" required="">
        </div>

        
        <div style="padding:15px;">

            <input  type="submit" class="btn btn-success" >
        </div>

    </form>


    </div>

          <!-- partial -->
       @include('admin.script')
  </body>
</html>
