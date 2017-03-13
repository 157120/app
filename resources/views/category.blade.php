<h3>{{$category->name}}</h3>
<ul>
    @foreach($category->articles as $articles)
    <li>{{$article->title}}</li>
    @endforeach
</ul>