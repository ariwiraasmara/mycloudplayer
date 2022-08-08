@extends('index')
@section('content')
<div class="p-50 is-mobile">
    <form action="login/process" method="post" class="box1" name="login_form" id="login_form">
        @csrf
        <div class="title text-is-black center bold">{{ $title }}</div>

        <div class="field">
            <div class="control has-icons-left has-icons-right">
                <input type="text" class="input" name="user" id="user" placeholder="Username / Email / Phone Number">
                <span class="icon is-small is-left text-is-black bold">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
            </div>
        </div>

        <div class="field">
            <div class="control has-icons-left has-icons-right">
                <input type="password" class="input" name="pass" id="pass"  placeholder="********">
                <span class="icon is-small is-left text-is-black bold">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
            </div>
        </div>

        <div class="m-t-30">
            <div class="buttons has-addons is-centered">
                <button type="submit" name="loginok" id="loginok" class="button is-primary is-link is-rounded is-selected">Log in</button>
                <a href="signin" class="button is-danger is-light is-rounded is-selected">Sign in</a>
            </div>
        </div>

        <div class="field m-t-20 right">
            <p class="control">
                <a href="aboutus" class="tag is-link is-success is-rounded">What About Us?</a>
                <a href="storage/levelup" class="tag is-danger is-rounded">Level Up!</a>
                <a href="password/forgot" class="tag is-link is-rounded">Forgot Password</a>
            </p>
        </div>

        @if(isset($msg))
            <div class="notification is-success">
                <button class="delete"></button>
                {{ $msg }}
            </div>
        @endif

    </form>
</div>
@endsection
