<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentInfo extends  Component
{
    public $first_name, $last_name, $email, $phone_number, $student_id;
    public $updateMode = false;
    public function render()
    {
        $students = Student::orderBy('id', 'desc')->get();
        return view('livewire.student-info', compact('students'));
    }
    private function resetInputFields(){
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->phone_number = '';
    }

    public function store(){
        $validatedDate = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        Student::create($validatedDate);

//        session()->flash('message', 'Post Created Successfully.');
//
        $this->resetInputFields();
    }

    public function edit($id){
        $student = Student::findOrFail($id);
        $this->student_id = $id;
        $this->first_name = $student->first_name;
        $this->last_name = $student->last_name;
        $this->email = $student->email;
        $this->phone_number = $student->phone_number;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ]);
        if ($this->selected_id) {
            $record = Student::findOrFail($this->student_id);
            $record->update([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'phone_number' => $this->phone_number,
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function delete($id){
        if ($id) {
            $record = Student::findOrFail($id);
            $record->delete();
        }
    }

}
