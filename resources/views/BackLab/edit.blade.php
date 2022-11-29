@extends('BackLab.Back')

@section('contient')

<div class="container">
    
    <form action="{{ url('update-PosteLap/'.$PosteLap->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h3>Edit PosteLap <span>{{$PosteLap->Name}} </span></h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Name *"
                        value="{{$PosteLap->Name}}" />
                </div>
                <div class="form-group" style="display:flex;">
                    <input type="date" name="sdx" class="form-control" style="width: 50%;font-size: .75rem;"
                        placeholder="Start Date *" value="{{$PosteLap->Day_s}}" />
                    <input type="date" name="fdx" class="form-control" style="width: 50%;font-size: .75rem;"
                        placeholder="Fin Date *" value="{{$PosteLap->Day_f}}" />
                </div>
                <div class="form-group">
                    <input type="text" name="pst" class="form-control" placeholder="Post *"
                        value="{{$PosteLap->DevPost}}" />
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Description *"
                        style="width: 100%; height: 150px;">{{$PosteLap->Description}}</textarea>
                </div>
            </div>
        </div>

    </form>
</div>

@endsection