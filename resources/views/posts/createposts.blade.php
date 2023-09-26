<h1>Create POStS</h1>
<form action="{{route('post.insert')}}" method="post">
    @csrf
    
    <input type="text" name="title">
    <input type="text" name="body">
    <button type="submit">save</button>
    </form>