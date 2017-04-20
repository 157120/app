@extends('welcome')
@section('content')

                <ul>
                    @foreach($categories as $category)
                    <li><a href="{{route("category.get", ["id"=>$category->id])}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>

                <form method="POST">

<!--                    <div class="form-group">
                        <label>Subject name</label>
                        <input id="catName" name="name" class="form-control" type="text" placeholder="Type subject name">
                    </div>
                    
                    
                    <div class="btn-group" role="group" aria-label="...">
                        <button id="add" type="submit" class="btn btn-default" >Create</button>
                        <button type="reset" class="btn btn-default">Cancel</button>
                    </div>-->

                </form>
                

@stop