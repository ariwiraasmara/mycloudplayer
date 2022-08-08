@extends('index')
@section('content')
<div class="p-50 is-mobile">
    <div class="box1 p-30 m-b-50">
        <div class="title center bold text-is-black">{{ $title }}</div>

        <div class="m-t-30 justify content text-is-black">
            @include('0.table_purchase_storage')
            
            <div class="center">
                <a href="login" class="button is-link is-large text-is-white is-rounded-full">
                    <ion-icon name="home-outline"></ion-icon>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
