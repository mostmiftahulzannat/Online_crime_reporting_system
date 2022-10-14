@extends('layouts.app')
@section('title')
Users Details
@endsection
@section('content')

<section class="section">
                    <div class="card">
                        <div class="card-body">  
                            <table class="table table-striped">  
                                <tbody>
                               
                                    <tr>
                                        <th>Name </th>
                                        <th>:</th>
                                        <td>{{$user['name']}}</td>
                                    </tr>
                                    
                                    <tr>        
                                            <th>Email </th>
                                            <th>:</th>
                                            <td>{{$user['email']}}</td>
                                    </tr> 
                                                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
@endsection