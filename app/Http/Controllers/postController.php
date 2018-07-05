<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\post;

use App\insert;

class postController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth')->except('show');
    }
    

    public function index(){

        $posts=post::latest()->get();

        return view('layout.index',compact('posts'));
    }

    public function delete($id){
        
        $ram= insert::where('title','=',$id);
        
        $ram->delete();


        $list=insert::latest()->get();
        
         return view('layout.showlist',compact('list','p'));
       
        }

    public function create(){
        return view('layout.create');
    }

    public function store(){

       $this->validate(request(),[
           'title' => 'required|min:3',
           'body'  => 'required'
       ]);

        post::create([
            'title' => request('title'),
            'body'  => request('body'),
            'user_id' => auth()->user()->id

        ]);


        return redirect('/create');
    }

    public function go(post $post){

        $post->addcomment(request('body'));
        
        return back();
    }

    /*
        publish() ---- status:: not working error:: not found source::laracasr from scratch leacture- 19 time::16:14
    */

   public function edit(){

    $list=insert::latest()->get();
    
    return view('layout.edit',compact('list'));

   }

   public function insert(Request $request){

    $task= $request->input('task');

    $text = json_encode($task);   

       insert::create([

        'title' => request('title'),
        'task'  => $text,
        'priority' => request('priority'),
        'dt' => request('date')

       ]);


       return redirect('/ram');


   }

   public function list(){
    
    $list=insert::latest()->get();

    return view('layout.list',compact('list'));


    }


    public function edd($edit){
        

        $edit=insert::where('title','=',$edit)->get();
        
        
        
        $list=insert::latest()->get();     

        return view('layout.editlist',compact('edit','list'));

    }

    public function modify(Request $request){
        
        //$modify= insert::where('title','=',request('title'))->update(array('task'=> request('task'),'priority' => request('priority') ,'dt'=> request('dt')));


        $name = $request->input('title');
        
        $ram = $request->input('task');

        

        $priority = $request->input('priority');

        $date = $request->input('dt');

        $task=json_encode($ram);


        \DB::update("update inserts set task= '$task', priority= '$priority', dt='$date' where title ='$name' ");
        
        return redirect('/edit');
        
    }



    public function check($title){

        $post= insert::where('title',$title)->value('complete');

        if ($post==0){
            \DB::update("update inserts set complete= 1 where title='$title'");
        }else{

            \DB::update("update inserts set complete= 0 where title='$title'");
            
        }

        return redirect('/list');


    }

    public function search(){
       
        return view("layout.search");
    }

    public function game(){
   
           $a = request('a');

   
           $row=insert::where('title','like','%'.$a.'%')->get();

           return response()->json(array("msg"=>$row),200);
           

    }
   
}
