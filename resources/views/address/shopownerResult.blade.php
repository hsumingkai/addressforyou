@extends('main.app')
@section('upjs')

<script src="https://d3js.org/d3.v3.js"></script>
<script src="{{ asset('js/lib_address.js') }}" ></script>
<script>

$(document).ready(function () {
    createCircleMap("industrymap", getCurrentPosition(), 500);
    createRentMap('rentmap', getCurrentPosition(), 500, getLocalStorageAsJson('nearRent'))
    createStoresMap('storesmap', getCurrentPosition(), 500, getLocalStorageAsJson('recommendedstores'))
    createBubble("#bubble")
    window.addEventListener('resize', createBubble("#bubble"))
    createNearRentTable('#nearrent', getLocalStorageAsJson('nearRent'))
    createRecommendedStoresTable("#recommendedaddress",getLocalStorageAsJson('recommendedstores'))
});
</script>

@endsection
@section('content')
<div class="container border rounded mt-3">
    <div class="row">
        <div class="col px-0">
            <nav class="nav nav-pills nav-justified" id="myTab" role="tablist">
                <a class="nav-item nav-link active " href="#home" data-toggle="tab"  aria-controls="home" aria-selected="true">建議租給的行業</a>
                <a class="nav-item nav-link" id="mapclick" href="#profile" data-toggle="tab" aria-controls="profile" aria-selected="false">附近的行業分布</a>
                <a class="nav-item nav-link" href="#messages" data-toggle="tab" aria-controls="messages" aria-selected="false">附近的租金行情</a>
            </nav>
        </div>
    </div>
    <div class="row mx-md-5 mt-3">
        <div class="col px-0">
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">                    
                    <div class="row">
                        <div class="col-12 col-md-6 px-3 py-5">
                            <div id="storesmap" ></div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2>推薦的店面位置</h2>
                            @include('address._recommendstorestable')
                        </div>
                    </div>                   
                </div>
                <div class="tab-pane text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-12 col-md-6 px-3 py-5">
                            <div id="industrymap" ></div>
                        </div>
                        <div id="bubble" class="col-12 col-md-6">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="bg-success">
                                        <th class="" scope="col">#</th>
                                        <th class="text-center" scope="col">地址</th>
                                        <th class="text-center" scope="col">適合的行業</th>
                                    </tr>
                                    <tbody id="recommendedindustries">
                                        
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                    <div class="container">
                        <div id="bubble-size" class="row">
                            <div class="col-12 col-md-4  py-5">
                                <div id="rentmap"></div>
                            </div>
                            <div class="col-12 col-md-8 py-4 pr-0">
                                @include('address._nearRentStores')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
