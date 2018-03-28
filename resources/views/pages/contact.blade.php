@extends('layouts.app')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Contact</h1>
            <p class="lead">Please use this form to contact the page owner</p></div>
        <div class="card-body">

            <form role="form" id="contact-form" class="contact-form" method="POST" action="{{route('contact.store')}}">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for="subject">Name</label>
                    <input type="text" class="form-control" name="name" autocomplete="off" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="subject">Email</label>
                    <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                </div>

                <div class="form-group">
                    <label for="body">Mesage</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>

@endsection