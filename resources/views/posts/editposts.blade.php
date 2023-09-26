<h1>edit {{$post->title}}</h1>
<form action="{{route('post.update', $post->id)}}" method="post">
    @csrf
    @method('PUT')
    
    
    <input type="text" name="title" value="{{$post->title}}">
    <input type="text" name="body" value="{{$post->body}}">
    <button type="submit">save</button>
    </form>