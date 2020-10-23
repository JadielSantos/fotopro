<section class="section-book">
  <div class="row">
    <div class="book">
      <div class="book__form">
        <form action="{{ route('register') }}" class="form">
          <div class="u-margin-bottom-medium">
            <h2 class="heading-secondary">
              Comece agora!
            </h2>
          </div>
          <div class="form__group">
            <input type="text" class="form__input" placeholder="Nome Completo" id="name" required>
            <label for="name" class="form__label">Nome Completo</label>
          </div>
          <div class="form__group">
            <input type="email" class="form__input" placeholder="E-mail" id="email" required>
            <label for="email" class="form__label">E-mail</label>
          </div>

          {{--          <div class="form__group u-margin-bottom-medium">--}}
          {{--            <div class="form__radio-group">--}}
          {{--              <input type="radio" class="form__radio-input" id="small" name="size">--}}
          {{--              <label for="small" class="form__radio-label">--}}
          {{--                <span class="form__radio-button"></span>--}}
          {{--                Small tour group--}}
          {{--              </label>--}}
          {{--            </div>--}}

          {{--            <div class="form__radio-group">--}}
          {{--              <input type="radio" class="form__radio-input" id="large" name="size">--}}
          {{--              <label for="large" class="form__radio-label">--}}
          {{--                <span class="form__radio-button"></span>--}}
          {{--                Large tour group--}}
          {{--              </label>--}}
          {{--            </div>--}}
          {{--          </div>--}}

          <div class="form__group">
            <button class="btn btn--green">Próximo passo &rarr;</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
