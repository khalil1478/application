@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="
    background-color: beige; "> liste des questionnaires </div>

                <div class="card-body">



                <form class="" action="{{URL::to('/recherche')}}"   enctype="multipart/form-data" method="POST">
  <input id="name" type="text" class="form-control " name="recherche"  required  autofocus><br>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  <button type="submit" class="btn btn-primary ">recherche</button>
  </form> 
<br>
<a href="{{URL::to('/ajouter')}}"  ><button class="btn btn-primary">ajouter questionnaire </button></a>

                <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Q1</th>
      <th scope="col">Q2</th>
      <th scope="col">Q3</th>
      <th scope="col">Q4</th>
      <th scope="col">Q5</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>



  @foreach($users as $user)
  <br>
    <tr>
    
      
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->name}}</td>
      <td>{{ $user->roles()->get()->pluck('name') }}</td>
      <td>
      <a href=" {{ route('users.edit', $user->id) }}" ><button class="btn btn-primary">Editer</button></a>
     
  
      <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-warning">supprimer</button>

      </form>
      
      
      </td>
    </tr>
   
    @endforeach
  </tbody>
</table> 


             
 

                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
 