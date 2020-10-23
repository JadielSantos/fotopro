@extends('logged-in.home')

@section('tool')
  <form action="{{ route('galleries.update') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input class="custom-file-input" type="file" name="file">
    <button class="btn btn-primary" type="submit">Enviar Imagens</button>
  </form>
@endsection
