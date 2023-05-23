<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product; 
use  App\Models\Order; 
use  App\Models\Category; 
use PDF;
use Notification;

  
  
use App\Http\Controllers\MailController;

class AdminController extends Controller
{
    public function product(){
        return view('admin.product'); 
    }

    public function uploadproduct(Request $request){

        $data=new product;
        $image=$request->file;
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->des;

        $data->quantity=$request->quantity;
        $data->save();    

        return redirect()->back()->with('message','Product Added Successfully'); 
    }
    public function showproduct(){
        $data=product::all();
        return view('admin.showproduct',compact('data'));
    }
    public function deleteproduct($id){
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product Deleted');
    }
    public function updateview($id)
    {
        $data=product::find($id);
        return view('admin.updateview',compact('data'));
    }
    public function updateproduct(Request $request,$id)
    {
        $data=product::find($id);
        $image=$request->file;
        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;
        }

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;

        $data->save();
           return redirect()->back()->with('message','product Updated successfuly');
    }
    public function showorder()
    {
        $order=order::all();
        return view('admin.showorder',compact('order'));
    }
    public function updatestatus($id)
    {
        $order=order::find($id);

        $order->statut='delivered';

        $order->save();

        return redirect()->back();
    }

    public function category(){
        return view('admin.category'); 
    }


    public function uploadcategory(Request $request){

        $data=new Category;

        $data->name=$request->name;

        $data->save();    

        return redirect()->back()->with('message','category Added Successfully'); 
    }

    public function showcategory(){
        $data=category::all();
        return view('admin.showcategory',compact('data'));
    }

    public function updatecat($id)
    {
        $data=category::find($id);
        return view('admin.updatecat',compact('data'));
    }
    public function updatecategory(Request $request,$id)
    {
        $data=category::find($id);
        
        $data->name=$request->name;
        
        $data->save();
           return redirect()->back()->with('message','categorie Updated successfuly');
    }

    public function deletecat($id){
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','category Deleted');
    }

    public function print_pdf($id)
    {
       $order=order::find($id);
       $pdf=PDF::loadview('admin.pdf',compact('order'));
       return $pdf->download('order_details');
    }

 

}


