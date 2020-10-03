<form action="{{ route('galerias.create') }}" method="post" enctype="multipart/form-data">
  @csrf
  <input class="custom-file-input" type="text" name="title">
  <input class="custom-file-input" type="file" name="file">
  <button class="btn btn-primary" type="submit">Enviar Imagens</button>
</form>
