@extends ('master')

@section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Results</h1>
          </div>
            <table id="results_id" class="display">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>User Id</th>
                        <th>Time</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
@endsection

@section('datatables')
  <script>
          $(document).ready( function () {
              $('#results_id').DataTable({
              'ajax': 'http://api.local/results',
                  "columns": [
                      { "data": "id" },
                      { "data": "person_id" },
                      { "data": "time" },
                      { "data": "type" }
                  ],
                  "lengthMenu": [[4, 8, 16, -1], [4, 8, 'Multe', "Toate"]]
              });
          } );
  </script>
@endsection