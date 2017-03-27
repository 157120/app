<html>
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
</html>

<h3>{{$category->name}}</h3>
<ul>
    <!--@foreach($category->articles as $article)
    <li><a href="{{route("article.get", ["id"=>$article->id])}}">{{$article->title}}</a></li>
    @endforeach-->



</ul>
<form method="POST" action="{{route("article.post")}}">

    <div class="form-group">
        <label>Title</label>
        <input name="title" class="form-control" type="text" placeholder="Type article name">
    </div>  
    <div>
        <label>Content</label>
        <textarea name="content" class="form-control" rows="3" placeholder="Type article"></textarea>
    </div>

    <input name="category_id" class="form-control" type="hidden" value="{{$category->id}}">


    <div class="btn-group" role="group" aria-label="...">
        <button type="submit" class="btn btn-default">Create</button>
        <button type="reset" class="btn btn-default">Cancel</button>
    </div>

</form>

<script>
    
$(document).ready(function(){

    $.get("<?php echo route("xhr.category.create", ["id" => $category->id]) ?>", function (data, status)
    {
        alert("Data: " + data + "\nStatus: " + status);
    });

});
</script>