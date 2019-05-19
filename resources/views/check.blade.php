@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Redirect Previous URL</div>

                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, non porro optio, adipisci veniam fuga ea quis nulla sequi quia, tenetur sapiente iure delectus pariatur accusamus, cupiditate libero animi illum!. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet culpa qui perspiciatis itaque illo odit vitae sequi ipsum ipsa quisquam, repellendus animi explicabo minima quas illum nam tempora quis deserunt.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus culpa voluptate asperiores dicta, vel deserunt nulla temporibus laboriosam, officiis dolorum molestias fuga repudiandae saepe, unde nihil eaque quibusdam ab rerum.<br><br>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, non porro optio, adipisci veniam fuga ea quis nulla sequi quia, tenetur sapiente iure delectus pariatur accusamus, cupiditate libero animi illum!. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet culpa qui perspiciatis itaque illo odit vitae sequi ipsum ipsa quisquam, repellendus animi explicabo minima quas illum nam tempora quis deserunt.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus culpa voluptate asperiores dicta, vel deserunt nulla temporibus laboriosam, officiis dolorum molestias fuga repudiandae saepe, unde nihil eaque quibusdam ab rerum.       
                </div>
                <div class="card-footer">Thanks Previous URL: {{ URL::previous() }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
