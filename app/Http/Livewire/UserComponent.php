<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class UserComponent extends Component
{
  public $name, $email, $user_id, $password, $password_confirmation;
  public $isUpdate = 0;
  public $isCreate = 0;
  protected $rules = [
    'name' => 'required',
    'email' => 'required|email',
    'password' => 'required|confirmed|min:6',
  ];
  public function render()
  {
    return view("Components.user.user");
  }
  public function tambah()
  {
    $this->openModal('isCreate');
    $this->resetInputFields();
  }

  // Open Modal
  public function openModal($type)
  {
    $this->$type = true;
  }

  // Close Modal
  public function closeModal($type)
  {
    $this->$type = false;
  }

  // Reset Fields
  public function resetInputFields()
  {
    $this->resetErrorBag();
    $this->name = '';
    $this->email = '';
    $this->password = '';
    $this->password_confirmation = '';
    $this->user_id = '';
  }
  public function ubah($id)
  {
    $user = User::findOrFail($id);
    $this->name = $user->name;
    $this->user_id = $id;
    $this->email = $user->email;
    $this->openModal('isUpdate');
  }
  public function cancel($method)
  {
    ($method == 'create') ? $this->closeModal('isCreate') : $this->closeModal('isUpdate');
    $this->resetInputFields();
  }
  public function store()
  {
    $this->validate();
    try {
      User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => $this->password,
      ]);
      session()->flash('success', 'User Created Successfully!!');
      $this->resetInputFields();
      $this->closeModal('isCreate');
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
}
