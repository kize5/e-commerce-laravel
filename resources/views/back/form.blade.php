@extends('components.layoutBack')

@section('content')
    <h1>Registration Form</h1>

    <div class="contain_all_create">
        <div class="form_create">
            <form action="{{route("backoffice.test.store")}}"
                  method="post">
                @csrf
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>


                    <hr>

                    <label for="first_name"><b>First Name</b></label>
                    <input type="text" placeholder="first name"
                           name="first_name">

                    <label for="last_name"><b>Last Name</b></label>
                    <input type="text" placeholder="Last name"
                           name="last_name">

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email">

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password"
                           name="password">

                    {{--                    <label for="psw-repeat"><b>Repeat Password</b></label>--}}
                    {{--                    <input type="password" placeholder="Repeat Password"--}}
                    {{--                           name="psw-repeat">--}}

                    {{--                    <label>--}}
                    {{--                        <input type="checkbox" checked="checked" name="remember"--}}
                    {{--                               style="margin-bottom:15px"> Remember me--}}
                    {{--                    </label>--}}

                    <p>By creating an account you agree to our <a href="#"
                                                                  style="color:dodgerblue">Terms
                            & Privacy</a>.</p>

                    <div class="clearfix">
                        <button class="myButton Tab">Cancel</button>
                        <button class="myButton Tab">Sign up</button>
                    </div>
                </div>

            </form>
            <div>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p style="color: red">{{ $error }}</p>
                    @endforeach
                @endif
            </div>
        </div>

@endsection

