<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado Empleados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="mt-2 text-xl text-center text text-gray-800 font-semibold">Listado Empleados</h2>
                <div class="col-12">
                    <!-- -->
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead class="thead-dark">
                          <tr>

                            <th scope="col">Identificacion</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Tipo contrato</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Acciones</th>
                            <th scope="col"></th>

                        </tr>
                        </thead>
                        <tbody>
                            @php $secuencia = 1; @endphp
                            @foreach ($empleados as $empleado)

                          <tr>
                            <th scope="row">{{ $empleado->identificacion }}</th>
                            <td>{{ $empleado->nombres }}</td>
                            <td>{{ $empleado->apellidos }}</td>
                            <td>{{ $empleado->correo }}</td>
                            <td>{{ $empleado->direccion }}</td>
                            <td>{{ $empleado->telefono }}</td>
                            <td>{{ $empleado->tipocontrato }}</td>
                            <td>{{ $empleado->departamento }}</td>
                            <td><a href="" class="btn btn-success">
                                <i class="bi bi-pencil"></i> Editar
                            </a></td>
                            <td><a href="" class="btn btn-danger">
                                <i class="bi bi-pencil"></i> Eliminar
                            </a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script>




