@extends('_includes.base')

@section('body')
  <div class="welcome">
    <div class="container text-xs-center">
      <img class="logo" src="/assets/images/logo-inv.svg" alt="Scalex Systems Pvt. Ltd."> <br>

      <h1 class="m-y-3" style="color: #fff; font-weight: 300">Building Scalable Experiences</h1>
    </div>
  </div>

  <div class="container m-y-3">
    <div class="row">
      <div class="col-xs-12 text-xs-center">
        <p>We believe Open Technology will drive growth and create new opportunities.</p>

        <p>With our product Zero, we aim to make seamless digital infrastructure accessible to every educational
          institution in the country.</p>
      </div>
      <div class="col-xs-12 text-xs-center m-b-2 m-t-1">
        <a href="http://zero.institute/" class="btn m-b-1">
          <img src="/assets/images/zi.svg" alt="Zero for Institutes" style="height: 1.5rem">
        </a>
      </div>
    </div>
  </div>

  <div class="container about">
    <div class="row">
      <div class="col-xs-12 col-md-6 fl">
        <div class="card contact-card fl-a">
          <div class="card-block clearfix">
            <div class="row">
              <div class="hidden-xs-down col-sm-4">
                <img src="/assets/images/mac.png" alt="Contact Us" class="pull-left">
              </div>
              <div class="col-xs-12 col-sm-8">
                <h4>Contact Us</h4>
                <p>
                  To know more about our product, or business enquiry or to just have a chat, reach us here:
                </p>
                <p>
                  <i class="fa fa-fw fa-phone-square"></i> &nbsp; <a href="tel:+918473994808">+91-847 399 4808</a>
                </p>
                <p>
                  <i class="fa fa-fw fa-envelope"></i> &nbsp; <a href="mailto:hello@scalex.xyz">hello@scalex.xyz</a><br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 fl">
        <div class="card join-card fl-a">
          <div class="card-block clearfix">
            <div class="row">
              <div class="hidden-xs-down col-sm-4">
                <img src="/assets/images/join.png" alt="Work with us" class="pull-left">
              </div>
              <div class="col-xs-12 col-sm-8">
                <h4>Work with us!</h4>
                <p>Want to be a part of a team who believes to deliver the best experiences to the customers, then drop
                  us a mail and we will get in touch with you.</p>
                <p>
                  <a href="/team" class="btn btn-primary-outline">The Team</a>
                  <a href="https://angel.co/scalexsystems/jobs" class="btn btn-primary">View Openings</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
