@extends('base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-3 mx-auto">
              
                <form action="{{ route('updateData',['id'=>$record->id])}}" method="POST">
                 @csrf
                     <div class="form-group">
                         <label for="">Name</label>
                         <input type="text" name="name" class="form-control" value="{{$record->name}}">
                         <label class='small text-danger'>{{$errors->first('name')}}</label>
                     </div>
                     <div class="form-group">
                         <label for="">Contact</label>
                         <input type="text" name="contact" class="form-control" value="{{$record->contact}}">
                         <label class='small text-danger'>{{$errors->first('contact')}}</label>
                     </div>
                     <div class="form-group">
                         <label for="">Email</label>
                         <input type="text" name="email" class="form-control" value="{{$record->email}}">
                         <label class='small text-danger'>{{$errors->first('email')}}</label>
                     </div>
                     <div class="form-group">
                         <label for="">Date Of Birth</label>
                         <input type="text" name="dob" class="form-control" value="{{$record->dob}}">
                         <label class='small text-danger'>{{$errors->first('dob')}}</label>
                     </div>
                     <div class="form-group">
                         <label for="">About</label>
                         <input type="text" name="about" class="form-control" value="{{$record->about}}">
                         <label class='small text-danger'>{{$errors->first('about')}}</label>
                     </div>
                     <div class="form-group">
                         <input type="submit" class="btn btn-danger btn-block">
                     </div>
                </form>
            </div>
           
        </div>
    </div>

@endsection
