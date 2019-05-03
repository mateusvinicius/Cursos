@extends('dashboard.pages.home')


@section('css-home')

<link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.css') }}">
    
@endsection

@section('main')
   <!-- Dynamic Table Full Pagination -->
   <div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Usuarios</h3>
    </div>
    <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell">Email</th>
                    <th class="d-none d-sm-table-cell" style="width: 2%;">Nivel</th>
                    <th class="text-center" style="width: 15%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                  @foreach ($usuarios as $user)
                  
 
 
                  <tr>
                        
 
                    <td class="text-center">{{($user->id)}}</td>
                    <td class="font-w600">{{($user->name)}}</td>
                    <td class="d-none d-sm-table-cell">{{($user->email)}}</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-primary">{{($user->nivel)}}</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            edit
                        </button>
                    </td>
                      
                  @endforeach


                
               
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- END Dynamic Table Full Pagination -->


@endsection


@section('sc')


<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/pages/be_tables_datatables.js') }}"></script>


@endsection