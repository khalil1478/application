@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="
    background-color: beige; "> liste des utilisateurs </div>

                <div class="card-body">



                <form class="" action="{{URL::to('/recherche')}}"   enctype="multipart/form-data" method="POST">
  <input id="name" type="text" class="form-control " name="recherche"  required  autofocus><br>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  <button type="submit" class="btn btn-primary ">recherche</button>
  </form>
<br>
<a href="{{URL::to('/ajouter')}}"  ><button class="btn btn-primary">ajouter</button></a>

                <table class="table">
  <thead>
    <tr>

      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>



  @foreach($users as $user)
  <br>
    <tr>


      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
        <td>{{$user->roles()->get()->pluck('name') }}</td>


      <td>
          @if((Auth::user()->roles->pluck('name')->contains('admin')) && (($user->roles->pluck('name')->contains('utilisateur'))))
      <a href=" {{ route('users.edit', $user->id) }}" ><button class="btn btn-primary">Editer</button></a>


      <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-warning">supprimer</button>

      </form>



              @elseif((Auth::user()->roles->pluck('name')->contains('superadmin')) && (($user->roles->pluck('name')->contains('admin') ) or ($user->roles->pluck('name')->contains('utilisateur') )or ($user->roles->pluck('name')->contains('superadmin') )))

              <a href=" {{ route('users.edit', $user->id) }}" ><button class="btn btn-primary">Editer</button></a>


          <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-warning">supprimer</button>

          </form>
        @endif
    </tr>
  </td>

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
