@extends('../default')

@section('content')
<div id="signinbox">
    <div id="textbox">
      <div id="signintext">
        @if(Session::get('error'))
        <div class="alert alert-danger">
            {{session::get('error')}}
        </div>
        @endif 
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <p class="signinheader">CREATE A NEW ACCOUNT</p>
      </div>
      <form id="formContainer" href="{{ route('user.store') }}" method="POST">
        @csrf
        <input type="text" name="username" id="username" placeholder="Username" value={{old('username')}}>
        <input name="phone" placeholder="Phone number" type="text" value={{old('phone')}}>
        <input type="email" name="email" id="email" placeholder="Email id" value={{old('email')}} >
        <input type="password" placeholder="Password" name="password" >
        <br />
      <input type="submit" class="signinbtn" name="SIGN UP" value='SIGN UP'>
      <br />
      </form>
      
      <p style="text-align: center">
        Already have an account <a href="{{route('user.login')}}">click Here</a>
      </p>
    </div>
  </div>

@endsection
