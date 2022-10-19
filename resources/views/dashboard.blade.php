@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container m-6 ">
        <h1><b>Dashboard</b></h1>
        <div class="card col-sm-7 offset-sm-3 border border-light mt-5">
            <div class="card-header">
                <h1 class="text-center">Lipsticks</h1>
            </div>
            <div class="card-body shadow">
            <img class="offset-sm-1" src="images/lip.jpg" alt="cover">
            </div>
        </div>
    </div>

@endsection

<style>
    img {
        width: 80%;
    }
<style>
#basic-add01{
    width: 50px;
    text-align:center;
    background-color: white;
}
body{
    background-image: url("images/img.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: cover;
    height: 100%
}
</style>
</style>
