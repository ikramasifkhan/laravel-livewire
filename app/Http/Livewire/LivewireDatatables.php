<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LivewireDatatables extends LivewireDatatable
{
//    public $model = Student::class;

    public function render()
    {
        $students = Student::all();
        return view('livewire.student-info', compact('students'));
    }


//    public function columns()
//    {
//        return [
//            NumberColumn::name('id')->label('ID')->sortBy('id'),
//            Column::name('first_name')->label('First name'),
//            Column::name('last_name')->label('Last name'),
//            Column::name('email')->label('Email'),
//            Column::name('phone_number')->label('Phone'),
//        ];
//    }
}
