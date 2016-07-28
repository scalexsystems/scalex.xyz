@extends('_includes.contact')

@section('contact')
    <div class="container-fluid p-y-3 vcard">
        <div class="text-xs-center">
            <img src="/assets/images/qr/rahul.jpg" alt="Rahul Kadyan" class="profile">
        </div>
        <h4 class="text-xs-center m-t-2 fn">Rahul Kadyan</h4>
        <div class="text-xs-center">Development</div>
        <br>
        <div class="card">
            <div class="card-block">
                <div class="text-xs-center">
                    <img src="/assets/images/mini.svg" alt="Scalex Systems Pvt. Ltd." class="company"> <span class="org">Scalex Systems Pvt. Ltd.</span>
                </div>
            </div>
        </div>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-y-1">
                    <i class="fa fa-fw fa-phone"></i> <a href="tel:+918473994943" class="text-link tel">+91-84-73-994943</a>
                </li>
                <li class="list-group-item p-y-1">
                    <i class="fa fa-fw fa-envelope"></i> <a href="mailto:rahul@scalex.xyz" class="text-link email">rahul@scalex.xyz</a>
                </li>
                <li class="list-group-item p-y-1">
                    <i class="fa fa-fw fa-link"></i> <a href="http://scalex.xyz" class="text-link url">http://scalex.xyz</a>
                </li>
                <li class="list-group-item p-y-1">
                    <i class="fa fa-fw fa-link"></i> <a href="http://znck.me" class="text-link url">http://znck.me</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-y-1">
                    <i class="fa fa-fw fa-graduation-cap"></i>
                    B. Tech. (IIT Guwahati)
                </li>
            </ul>
        </div>
    </div>
@endsection