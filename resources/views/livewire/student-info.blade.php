<section>
    <div class="container mt-5">
        <div class="row mb-5">
                @if($updateMode)
                    @include('livewire.update')
                @else
                    @include('livewire.create')
                @endif
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover" id="data-table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->first_name}}</td>
                            <td>{{$student->last_name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->phone_number}}</td>
                            <td>
                                <button class="btn btn-sm btn-warning" wire:click="edit({{$student->id}})">Edit now</button>
                                <button class="btn btn-sm btn-danger" wire:click="delete({{$student->id}})">Delete now</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

