@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('content.sidebar')
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <table class="table table-striped table-bordered table-sm">
                      <thead>
                        <tr>
                          <th scope="col" class="bg-info"><span class="text-white">#</span></th>
                          <th scope="col" class="bg-info"><span class="text-white">見出し１</span></th>
                          <th scope="col" class="bg-info"><span class="text-white">見出し２</span></th>
                          <th scope="col" class="bg-info"><span class="text-white">見出し３</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>項目１</td>
                          <td>項目２</td>
                          <td>項目３</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>項目４</td>
                          <td>項目５</td>
                          <td>項目６</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>項目７</td>
                          <td>項目８</td>
                          <td>項目９</td>
                        </tr>
                      </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
