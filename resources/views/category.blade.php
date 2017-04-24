@extends('welcome')
@section('content')



<h3>{{$category->name}}</h3>

<ul id="list">
    @foreach($category->articles as $article)
    <li><a href="{{route("article.get", ["id"=>$article->id])}}">{{$article->title}}</a></li>
    @endforeach
</ul>


<form method="POST" action="{{route("article.post")}}" id="reg">
   
    <div class="form-group" id="title_input">
        <label for="title_id">Task</label>
        <input id="title_id" name="title" class="form-control" type="text" placeholder="Type task name">
    </div>  


    <div class="form-group" id="content_input">
        <label for="content_id">Content</label>
        <textarea id="content_id" name="content" class="form-control" rows="3" placeholder="Type article"></textarea>
    </div>

    <div><label>Type</label>
        <select Name="Type" id="type" class="form-control">
            <option value="-1" selected>Select..</option>
            <option value="Lecture">Lecture</option>
            <option value="Task">Task</option>
            <option value="Other">Other</option>
        </select></div>

    <div class="form-group">
        <form action="PINcode">
            <label>PIN code</label>
            <input type="password" name="nazwa" class="form-control" id="PINcode" placeholder="Provide a PIN code, in order to input data"/>
        </form</div>
    <br>

    <input name="category_id" class="form-control" type="hidden" value="{{$category->id}}">

    <br>
    <br>
    <div class="btn-group" role="group" aria-label="...">
        <button id="add" type="submit" class="btn btn-default">Create</button>
        <button type="reset" class="btn btn-default">Cancel</button>
    </div>


    <button type="button" id="but1">Click me</button> 


</form>



<script>
    $("#but1").click(function () {
        $.get("<?php echo route("xhr.category.create", ["id" => $category->id]) ?>", function (data, status) {
            console.log(status, data);

            for (var i = 0; i < data.length; i++) {
                $("#list").append("<li><a href='/article/" + data[i].id + "'>" + data[i].title + "'</a></li>");
            }
        }

//        alert("Data: " + data + "\nStatus: " + status);
        )
    });
</script>



@stop