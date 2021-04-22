
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> consulter profile de : <strong>{{  Auth::user()->name }}</strong> </div>




                    <div class="card-body">









                        <form  method="POST"   action="{{URL::to('/modifierprofile')}}"  >
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">
                                <label for="name" class="col-md-6 col-form-label ">{{ __('Nom') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ??  Auth::user()->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-6 col-form-label ">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control " name="email" value="{{   Auth::user()->email  }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-6 col-form-label ">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-6 col-form-label ">{{ __('Confirm Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>








                        @foreach($roles as $role)
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="roles" disabled="disabled"  value="{{ $role->id }}" id="{{ $role->id }}"
                                           @foreach( Auth::user()->roles as $userRole)
                                           @if ($userRole->id == $role->id) checked   @endif
                                        @endforeach
                                    >
                                    <label class="form-check-label" >{{$role->name}} </label>




                                </div>
                            @endforeach


                            <button type="submit" class="btn btn-primary"> modifier les  informations </button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
