@extends('../default')

@section('content')


    <div id="loginbox">
      <img
        src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/2021/7/14/1db28809-f3db-48b1-b303-d937716565661626257521634-Banner_Hamburger--2---1-.jpg"
      />
      <div class="loginbody">
        @if(Session::get('message'))
        <div class="alert alert-success">
            {{session::get('message')}}
        </div>
        @endif 
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
        <div class="loginheader">
          Login <span id="smallheader">Or </span>Signup
        </div>
        <form id="login" href="{{route('user.login')}}" method="POST">
            @csrf
          <input type="text" placeholder="email" name="email"  /><br />
          <input type="password" id="password" name="password" placeholder="Enter Password" />
          <input type="submit" class="signinbtn" name="Continue" value='Continue'>
        </form>
        <p>
          By continuing I agree to the<span class="smallhead">
            Terms of Use </span
          >&<span id="small"> Privacy Policy</span>
        </p>
        <p>Don't have account <a href="{{route('user.register')}}">Signup</a></p>
        <div id="alert"></div>
        
      </div>
    </div>
  


  @endsection
