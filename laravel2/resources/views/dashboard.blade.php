@extends ('master')

@section ('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>

              <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dash_drop_id" 
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span if = "span_id"> {{ $crt_opt }} </span>
              </button>

              <div class="dropdown-menu" aria-labelledby="dash_drop_id">
                <button class="dropdown-item" class="dropdown-item" data-toggle="button" aria-pressed="false" autocomplete="off">
                    All
                </button>
                <button class="dropdown-item" class="dropdown-item" data-toggle="button" aria-pressed="false" autocomplete="off">
                    Last Week
                </button>
                <button class="dropdown-item" class="dropdown-item" data-toggle="button" aria-pressed="false" autocomplete="off">
                    Last Month
                </button>
                <button class="dropdown-item" class="dropdown-item" data-toggle="button" aria-pressed="false" autocomplete="off">
                    Last Year
                </button>
              </div>

            </div>
    </div>
    
    <table id="results_id" class="display">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
    </table>

@endsection ('content')

@section ('datatables')

    <?php $id =  Auth::id(); ?>
    
    <script>
    function loadDT(link) {
        $(document).ready( function () {
                    $('#results_id').DataTable({
                    'ajax': link,
                        "columns": [
                            { "data": "type" },
                            { "data": "time" }
                        ],
                        "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All of them"]]
                    });
                } );
    }     
    </script>
  @switch ($crt_opt)
        @case('all')
            
            <?php $link =  "http://api.local/persons/$id/results" ?>
            <script>
                var link = "<?= $link ?>";
            </script>
            @break
        @case('week')

            <?php $link =  "http://api.local/persons/$id/results/week" ?>
            <script>
                var link = "<?= $link ?>";
            </script>
            @break
        @case('month')

            <?php $link =  "http://api.local/persons/$id/results/month" ?>
            <script>
                var link = "<?= $link ?>";
            </script>
            @break 
        @case('year')

            <?php $link =  "http://api.local/persons/$id/results/year" ?>
            <script>
                var link = "<?= $link ?>";
            </script>
            @break 
    @endswitch
    <script>
        loadDT(link);
    </script>
@endsection