<form action='#' method='POST'>
    <a href="{{ route('socios.edit', $id)}}" type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></a>
    @csrf
    @method('DELETE')
    <!-- <button type='submit' class='eliminar btn btn-danger' data-toggle='modal'><i class='fa fa-trash-o'></i></button> -->
</form>





