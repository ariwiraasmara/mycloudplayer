@extends('index')
@section('content')
<div class="p-50">
    <form action="" method="post" class="box1" name="forgot_pass" id="forgot_pass">
        <span class="">Input Your Username / Email / Phone Number, we will give you a link to reset your password</span>
        <div class="field">
            <div class="control has-icons-left has-icons-right">
                <input type="text" class="input"  name="user" id="user" placeholder="Username / Email / Phone Number">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
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
</div>
@endsection
