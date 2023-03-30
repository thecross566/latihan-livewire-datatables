<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Action;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UserDatatables extends LivewireDatatable
{
    public $name, $email, $user_id;
    public $isUpdate = 0;
    public $model = User::class;
    public function buildActions()
    {
        return [


            Action::groupBy('Export Options', function () {
                return [
                    Action::value('csv')->label('Export CSV')->export('User.csv')->styles($this->exportStyles)->widths($this->exportWidths),
                    Action::value('html')->label('Export HTML')->export('User.html')->styles($this->exportStyles)->widths($this->exportWidths),
                ];
            }),
        ];
    }

    public function getExportStylesProperty()
    {
        return [
            '1'  => ['font' => ['bold' => true]],
            'B2' => ['font' => ['italic' => true]],
            'C'  => ['font' => ['size' => 16]],
        ];
    }
    public function getExportWidthsProperty()
    {
        return [
            'A' => 55,
            'B' => 45,
        ];
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')->label('ID')->sortBy('id'),
            Column::name('name')->label('Name'),
            Column::name('email')->label('Email'),
            DateColumn::name('created_at')->label('Creation Date'),

            Column::callback(['id'], function ($id) {
                return view('Actions', ['id' => $id]);
            })->label("Actions")->unsortable()->excludeFromExport()

        ];
    }

    public function ubah($id)
    {
        $user = User::findOrFail($id);
        $this->name = $user->name;
        $this->user_id = $id;
        $this->email = $user->email;
        $this->openModal();
    }

    public function resetForm()
    {
        $this->resetErrorBag();
        $this->name = "";
        $this->user_id = "";
        $this->email = "";
    }

    public function saveUpdate()
    {
        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        try {
            // Update category
            User::find($this->user_id)->fill($data)->save();
            session()->flash('success', 'User Updated Successfully!!');

            $this->closeModal();
        } catch (\Exception $e) {
            session()->flash('error', 'Something goes wrong while updating category!!');
            $this->closeModal();
        }
    }


    public function openModal()
    {
        $this->isUpdate = true;
    }
    // CloseModal
    public function closeModal()
    {
        $this->isUpdate = false;
        $this->resetForm();
    }
}
