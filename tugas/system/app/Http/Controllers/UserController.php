<?php 

namespace App\Http\Controllers;

use App\models\User;
use App\models\UserDetail;

class UserController extends Controller {

  function index(){
    $data['list_user'] = User::withCount('produk')->get();
    return view('admin.user.index', $data);
  } 

  function store (){
    $user = new User;
    $user->nama = request('nama');
    $user->username = request('username');
    $user->email = request('email');
    $user->password = request('password');
    $user->jenis_kelamin = 1;
    $user->save();

    $userDetail = New UserDetail;
    $userDetail->id_user = $user->id;
    $userDetail->no_hp = request('no_hp');
    $userDetail->save();
    return redirect('admin/user')->with('success', 'data berhasil ditambahkan');
  }

  function create() {
    return view('admin.user.create');
  }

  function show(User $user) {
    $data['user'] = $user;
    return view('user.show', $data);
  }

  function edit(User $user) {
    $data['user'] = $user;
    return view('user.edit', $data);
  }

  function update(User $user){
    $user->nama = request('nama');
    $user->username = request('username');
    $user->email = request('email');
    if (request("password"))$user->password = request('password');   
    $user->save();
    return redirect('admin/user')->with('success', 'data berhasil edit');

  }
  
  function destroy (User $user){
    $user->delete();

    return redirect('admin/user')->with('danger', 'data berhasil dihapus');
  }

}