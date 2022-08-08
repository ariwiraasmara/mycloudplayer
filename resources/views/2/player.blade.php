@extends('index')
@section('content')
<!--auth-->
<div id="bodyplay">
    @include('2/1_dashboard/dashboard')
    @include('2/2_profile/profile')
    @include('2/3_setting/setting')
</div>
@include('2/navbottom')
<!--endauth-->
@endsection
