<div>
    <div class="row mb-4">
        <div class="col form-inline">
            Per Page: &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
        </div>

        <div class="col">
            <input wire:model="search" class="form-control" type="text" placeholder="Search Contacts...">
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Name
                    </a></th>
                    <th><a wire:click.prevent="sortBy('email')" role="button" href="#">
                        Email
                    </a></th>
                    <th><a wire:click.prevent="sortBy('birthdate')" role="button" href="#">
                        Birthdate
                    </a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->names }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->created_at->format('m-d-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col">
        </div>

        <div class="col text-right text-muted">
        </div>
    </div>
</div>
