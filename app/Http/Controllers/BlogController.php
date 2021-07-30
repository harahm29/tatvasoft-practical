<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\User;
use Illuminate\Support\Facades\Validator;


class BlogController extends Controller
{

    public function index()
    {
        return view('blog.create');
    }

    public function update($id = null)
    {
        $data['blog']= Blog::find(base64_decode($id));
        //dd( $data,base64_decode($id));
        return view('blog.create')->with($data);
    }

    public function store(Request $request)
    {
        //dd($request->all());

        if($request->id){

            $validator= Validator::make($request->all(), [
                'title' => ['required', 'string', 'max:255'],
                'des' => ['required', 'string', 'max:655'],
                'daterange' => ['required'],
                'is_active'=>['required'],
            ]);

            if ($validator->fails()) {
               notify()->error($validator->fails());
               return back();
            }
            $start_date='';
            $end_date='';
            if($request->daterange){
                $date =explode('-',$request->daterange);
                if($date[0]){
                    $start_date=$date[0];
                }
                if($date[1]){
                    $end_date=$date[0];
                }
            }

            if($request->file('img')){
                $imageName = time().'.'.$request->file('img')->extension();
                $request->file('img')->move(public_path('image/blog'), $imageName);
            }else{
                $imageName =$request->oldimg;
            }


            $data=array(
            'title' =>$request->title ,
            'des' => $request->des,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'is_active'=>$request->is_active,
            'img'=>$imageName,
            );

            $blog = Blog::where('id',$request->id)->update($data);
            if($blog){
               return redirect('/')->with('success','Blog Updated!');
            }else{

                return redirect('/')->with('error','Blog not Updated!');
            }

            return redirect('/');
        }else{

            $validator= Validator::make($request->all(), [
                'title' => ['required', 'string', 'max:255'],
                'des' => ['required', 'string', 'max:655'],
                'daterange' => ['required'],
                'img' => ['required',]
            ]);

            if ($validator->fails()) {
               return back()
               ->withErrors($validator)
               ->withInput();
            }

            $start_date='';
            $end_date='';
            if($request->daterange){
                $date =explode('-',$request->daterange);
                if($date[0]){
                    $start_date=$date[0];
                }
                if($date[1]){
                    $end_date=$date[0];
                }
            }
            $imageName='';
            if($request->file('img')){
                $imageName = time().'.'.$request->file('img')->extension();
                $request->file('img')->move(public_path('image/blog'), $imageName);
            }


            $data=array(
                'user_id'=>Auth::user()->id,
                'title' =>$request->title ,
                'des' => $request->des,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'is_active'=>$request->is_active,
                'img'=>$imageName ,
            );



            $blog = Blog::create($data);

            if($blog){
                return redirect('/')->with('success','Blog Created!');
             }else{

                 return redirect('/')->with('error','Blog not Created!');
             }
            return redirect('/');


        }


        return redirect('/');


    }



    public function delete(Request $request)
    {
        $notes = Blog::where(['id'=>base64_decode($request->id)])
        ->update(['is_delete'=>'true']);
        if($notes)
        {
            $data['status'] = "success";
            $data['message'] = "Blog is deleted successfully!";
        }
        else
        {
            $data['status'] = "error";
            $data['message'] = "Blog is not deleted.";
        }

        return response()->json($data);
    }


    public function onoff(Request $request)
    {
        $notes = Blog::where(['id'=>base64_decode($request->id)])
        ->update(['is_active'=>$request->value]);
        if($notes)
        {
            $data['status'] = "success";
            $data['message'] = "Blog is ".$request->value." successfully!";
        }
        else
        {
            $data['status'] = "error";
            $data['message'] = "Blog is not ".$request->value." .";
        }

        return response()->json($data);
    }
}
