@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="fa fa-dashboard"></i> Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Wellcome, {{ Auth::user()->name }}<br>
                    @if(Auth::user()->role=='admin')
                    <div>
                        Admin Role
                    </div>
                    @else
                    <div>
                        Member Role
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
