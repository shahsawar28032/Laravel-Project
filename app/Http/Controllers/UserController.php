<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

////////////////  crud form with elequent method   //////////////

public function register()
{
    return view('register');
}


public function storess(UserRequest $request)
{
    $stu = User::create([
        'Name'=>$request->name,
        'Email'=>$request->email,
        'password'=>$request->password,
        'Age'=>$request->age,
        'Address'=>$request->address,
        
    ]);
   
    return redirect('/login')->with('conf','Here conform yourself');

}

public function login()
{
    return view('login');
}


public function store(Request $request)
{
  $check = $request->validate([
         'email'=>'required|email',
         'password'=>'required',
  ]);

   if(Auth::attempt($check)){
       return redirect('index')->with('status','welcom our websites');
   }else{
      return redirect()->route('/login')->with('status','Email or password is incorrect');
     }
}
//  logout user 
public function logout(request $request)
{
    Auth::logout();
     return redirect('/login');

    }


    //show insert page for user
    public function insert()
    {
        return view('insert');
    }

   // add user data into database
    public function save(UserRequest $request)
    {
        $stu = User::create([
            'Name'=>$request->name,
            'Email'=>$request->email,
            'password'=>$request->password,
            'Age'=>$request->age,
            'Address'=>$request->address,
            
        ]);
        return redirect('index')->with('status','Data successfully inserted');
    
    }
    //view detail user
    public function views($id)
    {
        $stu = User::find($id);
        return view('views',compact('stu'));
    }

    //show user data
    public function show()
    {
        $stu = User::paginate(4);
        return view('show',compact('stu'));
    }



   //show user data in form for edit
    public function update($id)
    {
        $stu = User::find($id);
        return view('update',compact('stu'));
    }
    

    //update user data
    public function edit(Request $request,$id)
    {
        //form validation on update 

        $request->validate([
            'name'=>'required|alpha',
            'email'=>'required|email',
            'age'=>'required|numeric|min:18',
            'address'=>'required|uppercase',
        ]);
    
        $stu= User::find($id);
           $stu->Name = $request->name;
           $stu->Email = $request->email;
           $stu->Age = $request->age;
           $stu->Address = $request->address;
           $stu->save();

           return redirect('index')->with('status','Data successfully updated');
    }

   
    //Delete user data
    public function delete($id)
    {
        $stu = User::find($id);
        $stu->delete();
        return redirect('index')->with('status','Data successfully Deleted');

    }

}
