@extends ('admin.admin-app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Reports</div>
                    <div class="card-body">
                        @if (count($reports))
                            <ul>
                            @foreach($reports as $report)
                                <li>User <b>{{ $report->login_who }}</b> (id = {{ $report->user }})
                                    reported user <b>{{ $report->login_whom }}</b> (id = {{ $report->reported }}) as fake account
                                    at {{ $report->date }}
                                </li>
                            @endforeach
                            </ul>
                        @else
                            <p>Nobody hasn't reported yet</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection