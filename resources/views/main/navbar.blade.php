{{-- pc navbar --}}
<div class="container-fluid d-none d-sm-block">
    <nav class="row navbar address-green flex">
        <a class="navbar-brand col-auto mr-auto p-0 " href="/">
            <img src="{{ asset('img/head.png') }}" height="65px" alt="">
        </a>
        <ul class="nav col-auto">
            <li class="nav-item">
                <a href="/" class="btn btn-outline-dark font-weight-bold mr-2" role="button" aria-pressed="true">首頁</a>
            </li>
        </ul>
    </nav>
</div>

{{-- mobolie navbar --}}
<div class="container-fluid d-sm-none">
    <nav class="row navbar navbar-light address-green justify-content-between ">
        <a href="#" class="btn btn-outline-dark font-weight-bold mr-2" role="button" aria-pressed="true" onclick="openNav()" ><span class="navbar-toggler-icon"></span></a>
        <a class="navbar-brand col-auto mr-0" href="#">
            <img src="{{ asset('img/head.png') }}" height="55px" alt="">
        </a>
    </nav>
</div>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/">首頁</a>
    <a href="https://www.cakeresume.com/hsu-mingkai">關於我</a>
    <a href="https://github.com/hsumingkai/AddressForYou">Github</a>
</div>

      