@extends('logged-in.home')

@section('tool')
  <section class="section-gallery">
    <form action="{{ route('galleries.store') }}" class="form" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form__group u-flex-basis-100">
        <input id="title" type="text" class="form__input" name="title" placeholder="Título" value="{{ old('name') }}" required autocomplete="title" autofocus>
        <label for="title" class="form__label">{{ __('Título') }}</label>
      </div>

      <div class="flex u-margin-bottom-medium">
        <div class="u-flex-basis-50">
          <div class="form__group">
            <label for="deadline" class="form__label">{{ __('Prazo para seleção (dias)') }}</label>
            <select id="deadline" class="form__select" name="deadline" value="{{ old('deadline') }}" required>
              <option value="7">7</option>
              <option value="15">15</option>
              <option value="30">30</option>
              <option value="60">60</option>
            </select>
          </div>

          <div class="form__group">
            <label for="deadline" class="form__label">{{ __('Permitir cópia') }}</label>
            <select id="allow_copy" class="form__select" name="allow_copy" value="{{ old('allow_copy') }}" required>
              <option value="0">Não</option>
              <option value="1">Sim</option>
            </select>
          </div>

          <div class="form__group">
            <label for="deadline" class="form__label">{{ __('Permitir comentário individual') }}</label>
            <select id="allow_individual_comment" class="form__select" name="allow_individual_comment" value="{{ old('allow_individual_comment') }}" required>
              <option value="1">Sim</option>
              <option value="0">Não</option>
            </select>
          </div>
        </div>

        <div class="u-flex-basis-50">
          <div class="form__group">
            <label for="deadline" class="form__label">{{ __('Tamanho da foto ampliada') }}</label>
            <select id="image_size" class="form__select" name="image_size" value="{{ old('image_size') }}" required>
              <option value="800x600">800 x 600</option>
              <option value="1024x768">1024 x 768</option>
            </select>
          </div>

          <div class="form__group">
            <label for="deadline" class="form__label">{{ __("Usar marca d'água") }}</label>
            <select id="use_water_mark" class="form__select" name="use_water_mark" value="{{ old('use_water_mark') }}" required>
              <option value="2">Sim, em fotos ampliadas e miniaturas</option>
              <option value="1">Sim, somente em fotos ampliadas</option>
              <option value="0">Não</option>
            </select>
          </div>

          <div class="form__group">
            <label for="deadline" class="form__label">{{ __('Botão preto e branco') }}</label>
            <select id="allow_black_white" class="form__select" name="allow_black_white" value="{{ old('allow_black_white') }}" required>
              <option value="1">Sim</option>
              <option value="0">Não</option>
            </select>
          </div>
        </div>
      </div>

      <div class="form__group u-center-text">
        <input id="images" class="form__input--file" placeholder="Imagens" style="border-bottom: 3px solid transparent;" value="{{ old('images') }}" type="file" name="images[]" data-multiple-caption="{count} foto(s) selecionadas" multiple>
        <label class="form__label" for="images">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
          </svg>
          <span>Escolha as fotos&hellip;</span>
        </label>
      </div>

      <div class="form__group u-flex-basis-100">
        <input id="password" type="password" class="form__input" name="password" placeholder="Senha" value="{{ old('password') }}" required autofocus>
        <label for="password" class="form__label">{{ __('Senha') }}</label>
      </div>

      <div class="form__group">
        <label for="is_public" class="form__label">{{ __('Galeria pública?') }}</label>
        <select id="is_public" class="form__select" name="is_public" value="{{ old('is_public') }}" required>
          <option value="1">Sim</option>
          <option value="0">Não</option>
        </select>
      </div>

      <div class="form__group u-flex-basis-100">
        <input id="customers" type="text" class="form__input" name="customers[]" placeholder="Clientes" value="{{ old('customers') }}" required autofocus>
        <label for="customers" class="form__label">{{ __('Clientes') }}</label>
      </div>

      <div class="form__group u-flex-basis-50">
        <input id="unit_price" type="text" class="form__input" name="unit_price" placeholder="Preço por foto" value="{{ old('unit_price') }}" required autofocus>
        <label for="unit_price" class="form__label">{{ __('Preço por foto') }}</label>
      </div>

      <div class="form__group u-center-text">
        <button class="btn btn--green" type="submit">Criar Galeria</button>
      </div>
    </form>
  </section>
@endsection
