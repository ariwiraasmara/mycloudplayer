@extends('index')
@section('content')
<div class="p-50 is-mobile">
    <form action="{{ route('user/save') }}" method="POST" name="register_form" id="register_form" class="box1">
        {{ csrf_field() }}
        <div class="title text-is-black center bold">{{ $title }}</div>

        <div class="field">
            <div class="control has-icons-left has-icons-right">
                <input type="text" class="input"  name="username" id="username" placeholder="Username" required>
                <span class="icon is-small is-left text-is-black bold">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
            </div>
        </div>

        <div class="field">
            <div class="control has-icons-left has-icons-right">
                <input type="text" class="input" name="email" id="email" placeholder="Email" required>
                <span class="icon is-small is-left text-is-black bold">
                    <ion-icon name="mail-outline"></ion-icon>
                </span>
            </div>
        </div>

        <div class="field">
            <div class="control has-icons-left has-icons-right">
                <input type="password" class="input" name="password" id="password" placeholder="********" required>
                <span class="icon is-small is-left text-is-black bold">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
            </div>
        </div>

        <div class="m-t-30">
            <div class="buttons has-addons is-centered">
                <button type="submit" name="registerok" id="registerok" class="button is-primary is-link is-rounded is-medium is-selected">
                    <ion-icon name="checkmark-outline"></ion-icon>
                </button>

                <a href="login" class="button is-danger is-light is-rounded is-medium is-selected">
                    <ion-icon name="home-outline"></ion-icon>
                </a>
            </div>
        </div>

    </form>

    @if (isset($msg))
    <div class="m-t-30 center">
        <div class="notification is-success text-is-center">
            <button class="delete"></button>
            {{ Session::get('msg'); }}
        </div>
    </div>
    @endif
</div>
@endsection
