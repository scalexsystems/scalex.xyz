@extends('_includes.contact')

@section('contact')
    <div class="container-fluid p-y-3 vcard">
        <div class="text-xs-center">
            <img src="/assets/images/qr/suwardhan.jpg" alt="Suwardhan Ahirrao" class="profile">
        </div>
        <h4 class="text-xs-center m-y-1 fn">Suwardhan Ahirrao</h4>
        <div class="text-xs-center">
            <img src="/assets/images/logo.svg" alt="Scalex Systems Pvt. Ltd." class="company"> <span class="org">Scalex Systems Pvt. Ltd.</span>
        </div>
        <br>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <i class="fa fa-fw fa-phone"></i> <a href="tel:+918473994808" class="text-link tel">+91-84-73-994943</a>
                </li>
                <li class="list-group-item">
                    <i class="fa fa-fw fa-envelope"></i> <a href="mailto:suwardhan@scalex.xyz" class="text-link email">suwardhan@scalex.xyz</a>
                </li>
                <li class="list-group-item">
                    <i class="fa fa-fw fa-link"></i> <a href="http://suwardhan.com" class="text-link url">http://suwardhan.com</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <i class="fa fa-fw fa-graduation-cap"></i> B.Des., IIT Guwahati
                </li>
            </ul>
        </div>
    </div>
@endsection