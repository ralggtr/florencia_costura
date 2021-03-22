<div>
    <div class="row mb-4">
       <!--  <div class="col form-inline">
            Per Page: &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
        </div> -->

        <div class="col">
            <input wire:model="search" class="form-control" type="text" placeholder="Buscar clientes...">
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('names')" role="button" href="#">
                        Nombres
                        @include('includes._sort-icon', ['field' => 'names'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('lastnames')" role="button" href="#">
                        Apellidos
                        @include('includes._sort-icon', ['field' => 'lastnames'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('area')" role="button" href="#">
                        Area
                        @include('includes._sort-icon', ['field' => 'area'])
                    </a></th>
                    <th><a>
                        Dirección
                    </a></th>
                    <th><a>
                        Teléfono
                    </a></th>
                    <th><a>
                        Comentarios
                    </a></th>
                    <th><a wire:click.prevent="sortBy('updated_at')" role="button" href="#">
                        Fecha 
                        @include('includes._sort-icon', ['field' => 'created_at'])
                    </a></th>
                    <th><a>
                    </a></th>
                    <th><a>
                    </a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->names }}</td>
                        <td>{{ $customer->lastnames }}</td>
                        <td>{{ $customer->area }}</td>
                        <td>{{ $customer->address1 }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->notes }}</td>
                        <td>{{ $customer->updated_at->format('d-m-y') }}</td>
                        <td><a href="/customer/{{ $customer->id }}/edit" 
                        class="button">Editar</a></td>
                        <td>
                        <form action="{{ route('customer.destroy', $customer->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="danger" title="Delete">X</button>
                        </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="row">
        <div class="col">
            {{ $customers->links() }}
        </div>

    </div>
</div>
