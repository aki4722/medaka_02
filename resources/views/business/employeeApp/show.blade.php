@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('business.sidebar')

            <div class="col-md-9">
                <div class="card border-danger">
                    <div class="card-header">employee {{ $employee->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/employee') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/employee/' . $employee->id . '/edit') }}" title="Edit employee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/employee', $employee->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete employee',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $employee->id }}</td>
                                    </tr>
                                    <tr><th> User Id </th><td> {{ $employee->user_id }} </td></tr><tr><th> Fname </th><td> {{ $employee->fname }} </td></tr><tr><th> Lneme </th><td> {{ $employee->lneme }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
