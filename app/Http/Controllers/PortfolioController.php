<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use Mail; 
use App\Models\Portfolio;
use App\Models\SubServices;
use App\Models\Services;
class PortfolioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $active_menu = 'home';
        return view('welcome',compact('active_menu'));
    }

    //addPortfolio
    public function addPortfolio(Request $request)
    {
        $active_menu = 'portfolio';
        return view('add_portfolio',compact('active_menu'));
    }

    //addNewPortfolio
    public function addNewPortfolio(Request $request)
    {
        $data = $request->all();
        $image = $request->file('photos');
        if(isset($image) && !empty($image)){
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) .'_'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/portfolio');
            $image->move($destinationPath, $imagename);
            $data['photo'] = $imagename;
        } else {
            $data['photo'] = '';
        }

        $saveImage = Portfolio::create(
                $data
        );

        $id = $saveImage['id'];        
        if ($id) {
            $data['status']='success';
            $data['msg']='Data uploaded successfully';
        } else {
            $data['status']='error';
            $data['msg']='Something went wrong. Please try again!';
        }
        echo json_encode($data);

        
    }

    public function addProduct(Request $request)
    {   
        $active_menu = 'products';
        $id= $request->id;
        $categories = Services::get()->toArray();
        return view('add_product',compact('active_menu','categories','id'));         
    }


    //addCategory
    public function addCategory(Request $request)
    {   
        $active_menu = 'products';
        return view('add_category',compact('active_menu'));         
    }
    //addNewProduct
    public function addNewProduct(Request $request)
    {   
        $data=$request->all();
        $image = $request->file('profile_pic');
        if(isset($image) && !empty($image)){
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) .'_'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/portfolio');
            $image->move($destinationPath, $imagename);
            $data['profile_pic'] = $imagename;
        } else {
            $data['profile_pic'] = '';
        }

        $saveData = SubServices::create(
                $data
        );

        $id = $saveData['id'];        
        if ($id) {
            $data['status']='success';
            $data['msg']='Data uploaded successfully';
        } else {
            $data['status']='error';
            $data['msg']='Something went wrong. Please try again!';
        }
        echo json_encode($data);        
    }

    //addNewCategory
    public function addNewCategory(Request $request)
    {   
        $data=$request->all();
        
        $image = $request->file('image');
       


        if (isset($data['edit_id'])) {

            $updateCategory = Services::find($data['edit_id']);
            if(isset($image) && !empty($image)){
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) .'_'.time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/portfolio');
                $image->move($destinationPath, $imagename);
                $updateCategory->image = $imagename;
            }

            $updateCategory->name = $data['name'];
            $updateCategory->save();
            $id = $updateCategory->id;
        } else {
            if(isset($image) && !empty($image)){
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) .'_'.time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/portfolio');
                $image->move($destinationPath, $imagename);
                $data['image'] = $imagename;
            } else {
                $data['image'] = '';
            }
            
            
            $saveData = Services::create(
                    $data
            );
            $id = $saveData['id']; 
        }

               
        if ($id) {
            $data['status']='success';
            $data['msg']='Data uploaded successfully';
        } else {
            $data['status']='error';
            $data['msg']='Something went wrong. Please try again!';
        }
        echo json_encode($data);        
    }

    //deleteRecord
    public function deleteRecord(Request $request)
    {   
        $data=$request->all();
        SubServices::where('id',$data['id'])->delete();
        $data['status']='success';
        $data['msg']='Data deleted successfully';
        echo json_encode($data);
    }


    //editProduct
    public function editCategory(Request $request,$id)
    {  
        $active_menu = 'products';
        $id = base64_decode($id);
        $categories = Services::where('id',$id)->first()->toArray();
        //print_r($categories);
        return view('edit_category',compact('active_menu','categories','id'));    

    }
}
