<?php
//
//namespace App\Http\Controllers;
//
//use App\Http\Controllers\Controller;
//use App\Models\Company;
//
//use App\Models\User;
//use Illuminate\Http\Request;
//use Illuminate\Http\Response;
//use Illuminate\Support\Facades\DB;
//
//class AdminController extends Controller
//{
//
//
//    public function adminHome()
//    {
//        $data['companies'] = DB::table('users')->get();
//
//        return view('admin.adminHome', $data);
//    }
//
//
//    public function createuUser()
//    {
//        return view('admin.create_user');
//    }
//
//
//    public function store(Request $request)
//    {
//        $user = new User();
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required',
//            'password' => 'required',
//
//        ]);
//        $data = $request->input();
//        unset($data['_token']);
//
//        $user->create_user_with_admin($data);
//
//        return redirect()->route('admin.home')
//            ->with('success', 'Company has been created successfully.');
//    }
//
//
//    public function show(User $user)
//    {
//        return view('admin.show', compact('user'));
//    }
//
//
//    public function edit_user(User $user)
//    {
//        die('test');
//        return view('admin.edit_user', compact('user'));
//    }
//
//
//    public function update(Request $request, $id)
//    {
//
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required',
//            'address' => 'required',
//        ]);
//        $company = Company::find($id);
//        $company->name = $request->name;
//        $company->email = $request->email;
//        $company->address = $request->address;
//        $company->save();
//        return redirect()->route('admin.index')
//            ->with('success', 'Company Has Been updated successfully');
//    }
//
//    public function delete($id)
//    {
//        User::find($id)->delete();
//        return back();
//    }
//}
