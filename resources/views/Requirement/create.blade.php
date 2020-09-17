@extends('layouts.app')

@section('content')
    <div class="container">
    
        <form class="form-horizontal" action="{{route('requirement.store')}}" method="GET">
            {{csrf_field()}}
             @include('Requirement.partials.form')
        </form>
    </div>
@endsection