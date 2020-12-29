@extends('base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
              
                <form action="/" method="POST">
                 @csrf
                     <div class="form-group">
                         <label for="">Name</label>
                         <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @else is-valid @endif" value="{{old('name')}}">
                         <label class='small text-danger'>{{$errors->first('name')}}</label>
                     </div>
                     <div class="form-group">
                         <label for="">Contact</label>
                         <input type="text" name="contact" class="form-control  @if($errors->has('contact')) is-invalid @else is-valid @endif" value="{{old('contact')}}">
                         <label class='small text-danger'>{{$errors->first('contact')}}</label>
                     </div>
                     <div class="form-group">
                         <label for="">Email</label>
                         <input type="text" name="email" class="form-control  @if($errors->has('email')) is-invalid @else is-valid @endif" value="{{old('email')}}">
                         <label class='small text-danger'>{{$errors->first('email')}}</label>
                     </div>
                     <div class="form-group">
                         <label for="">Date Of Birth</label>
                         <input type="text" name="dob" class="form-control  @if($errors->has('dob')) is-invalid @endif" value="{{old('dob')}}">
                         <label class='small text-danger'>{{$errors->first('dob')}}</label>
                     </div>
                     <div class="form-group">
                         <label for="">About</label>
                         <input type="text" name="about" class="form-control  @if($errors->has('about')) is-invalid @endif" value="{{old('about')}}">
                         <label class='small text-danger'>{{$errors->first('about')}}</label>
                     </div>
                     <div class="form-group">
                         <input type="submit" class="btn btn-danger btn-block">
                     </div>
                </form>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <tr>
                       <th>Id</th>
                       <th>Name</th>
                       <th>Contact</th>
                       <th>Email</th>
                       <th>Dob</th>
                       <th>About</th>
                       <th>Action</th>
                    </tr>
                      @foreach ($data as $d)
                    <tr>
                       <td>{{$d->id}}</td>
                       <td>{{$d->name}}</td>
                       <td>{{$d->contact}}</td>
                       <td>{{$d->email}}</td>
                       <td>{{$d->dob}}</td>
                       <td>{{$d->about}}</td>
                       <td>
                        <a href="{{route('delete',['id'=>$d->id])}}" class="btn btn-danger">Delete</a>
                        <a href="{{route('edit',['id'=>$d->id])}}" class="btn btn-success">Edit</a>
                       </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection