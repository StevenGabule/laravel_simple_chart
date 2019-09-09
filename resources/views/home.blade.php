@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <add></add>
                        <chart></chart>
                    </div><!-- end of card body -->
                </div><!-- end of card -->
            </div><!-- end of col-md-8 -->
        </div><!-- end of row -->
    </div><!-- end of container -->
@endsection
