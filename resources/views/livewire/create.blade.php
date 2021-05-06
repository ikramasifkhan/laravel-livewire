<div class="col-12">
    <div class="jumbotron">
        <h3>Add a new record</h3>
        <form>
            <div class="form-group row">
                <label for="first_name" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" wire:model="first_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Last name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" wire:model="last_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" wire:model="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Phone number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" wire:model="phone_number">
                </div>
            </div>

            <button class="btn btn-success" wire:click.prevent="store()">Save a new record</button>
        </form>
    </div>
</div>
