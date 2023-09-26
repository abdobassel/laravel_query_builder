<h1>All POStS</h1>
<a href="{{route('posts.delete.all')}}" class="f" role="button">Delete All -> new insert start from last id</a><br>
<a href="{{route('posts.delete.all.truncate')}}" class="f" role="button">Delete All by Truncate => id start first</a>
<table>
<thead>
    <tr>
        <th>title</th>
        <th>body</th>
        <th>pro</th>
        <th></th>
    </tr>
</thead>
<tbody>
    @foreach ($posts as $post)
    <tr>
        <th>{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>

       <td> <a href="{{route('post.edit',$post->id)}}" class="f" role="button">Edit</a>
        <a href="{{route('post.delete',$post->id)}}" class="f" role="button">Delete</a></td>
    </tr>
    @endforeach
</tbody>

</table>




