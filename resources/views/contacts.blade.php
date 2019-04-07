@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-5">
        <h2>Contact us!</h2>
        <form>
            <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Text</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter message"></textarea>
                </div>
            <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Send me free pizza</label>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
@endsection
