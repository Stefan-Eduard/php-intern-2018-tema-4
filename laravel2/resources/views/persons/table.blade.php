@extends ('master')

@section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Persons</h1>
          </div>
            <table id="persons_id" class="display">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Citizenship</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
@endsection

@section('datatables')
  <script>
          $(document).ready( function () {
              $('#persons_id').DataTable({
              'ajax': 'http://api.local/persons',
                  "columns": [
                      { "data": "id" },
                      { "data": "user_id" },
                      { "data": "name" },
                      { "data": "citizenship" },
                      { "data": "age" }
                  ],
                  "lengthMenu": [[2, 4, 8, -1], [2, 4, 'Multe', "Toate"]]
              });
          } );
  </script>
@endsection