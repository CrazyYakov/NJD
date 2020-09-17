@extends('layouts.app')


@section('content')
<div class="container">         
  <table class="table">
    <thead>
      <tr>        
        <th scope="col">#</th>
        <th scope="col">Должность</th>
        <th scope="col">Структурное подразделение</th>    
        <th scope="col">Разработчик должностной инструкции</th>
        <th scope="col">Дата разработки</th> 
        
      </tr>
    </thead>
    @forelse ($jobDescriptions as $document )
    <tbody>
      <tr>
                  <th scope="row">{{$document->id}}</th>
                    <td scope="col">{{$document->name}}</td>
                    <td scope="col">{{$document->user}}</td>
                    <td scope="col">{{$document->job}}</td>
                    <td scope="col">{{$document->created_at}}</td>
                  </tr>
                  @empty                        
                </tbody>
              </table>  
               <p class="text-center mx-auto">
                <h1>Нет должностных инструкций</h1>
                <br>
               <a href="{{Route('create')}}" class=" btn btn-primary">Создать инструкцию</a>
               </p>
            @endforelse          
        
</div>
@endsection
