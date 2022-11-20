<div class="content-wrapper">
  @include('template.header')
  @include('template.sidebar')

<h1>Index Data</h1>
<a href="asset/upload">Tambah Data</a>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Path</td>
        <td>Size</td>
        <td>Aksi</td>
    </tr>
    @foreach($asset as $b)
        <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->name}}</td>
            <td>{{$b->path}}</td>
            <td>{{$b->size}}</td>
            <td>
                <a href="/asset/{{$b->id}}/edit">Edit</a>
                <form action="/asset/{{$b->id}}" method="POST">
                    @csrf @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>

</div>
@include('template.footer')