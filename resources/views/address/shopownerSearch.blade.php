@extends('main.app')
@section('upjs')
<script src="{{ asset('js/lib_address.js') }}" ></script>
<script>
$(document).ready(function () {
    // initsearchMap()   
    createSearchMap("searchmap", getDefaultPlace(), getXinzhuangPath())

    $('#set').click(shopowner);
});
</script>
@endsection


@section('content')
    <div class="container">
    <div class="row mt-3 font-weight-bold">
        <div class="col">
            <h1> - 請選擇你想要開店的位置</h1>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-12 col-md-7 mt-4">
            <div id="searchmap"></div>
        </div>
        @include('address._searchinformation',['type' => $type ])
    </div>
</div>
@endsection

