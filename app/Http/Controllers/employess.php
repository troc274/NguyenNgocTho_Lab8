<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp;

class employess extends Controller
{



    // HÀM HIỂN THỊ DƯC LIỆU RA TRANG CHỦ
    public function index()
     {
         $emp1 = emp::all();
         return view('DisplayEmployess')->with('emp2',$emp1);
     }




    // HÀM THỰC HIỆN CHỨC NĂNG INSERT 
    public function form_insert()
     {
         return view('InsertEmployess');
     }
     public function store(Request $request)
     {
         $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'contact_number'=>'required',
         ]);

         $emps= new emp;

         $emps->name = $request->input('name');
         $emps->email = $request->input('email');
         $emps->contact_number = $request->input('contact_number');

         $emps->save();

         return redirect('display');

     }



    //  HÀM EDIT BẢNG DỮ LIỆU



    public function form_edit($id) 
    {
        $emps = emp::find($id);
        return view('EditEmployess')->with('emp',$emps);
    } 

    public function update(Request $request, $id)
    {
        $this->validate($request,[
           'name'=>'required',
           'email'=>'required',
           'contact_number'=>'required',
        ]);

        $emps= emp::find($id);

        $emps->name = $request->input('name');
        $emps->email = $request->input('email');
        $emps->contact_number = $request->input('contact_number');

        $emps->save();

        return redirect('display');

        return "<script> alert('EDIT SUCCESSFUL') </script> ";

    }
     


    // HÀM XÓA DELETE SẢN PHẨM
    
    public function delete($id) 
    {
        $emps = emp::find($id);
        $emps->delete();

        return redirect('display');
        
    } 

    
    
}
