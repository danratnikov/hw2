<?php @include "_head.php" ?>
    
    <body>
      <div class="wrapper">

        <?php @include "_header.php" ?>
        
        <div class="divider"></div>
        <div class="main">
          <div class="container">

            <?php @include "_sidebar.php" ?>

            <div class="content">
              <div class="feedback">
                <form id="feedback">
                  <h2 class="form__header">У вас интересный проект? Напишите мне</h2>
                  <div class="divider-blue"></div>
                  <div class="form-content">
                    <div class="form-container">
                      <div class="form__row">
                        <div class="form__col">
                          <label class="form__label">Имя
                            <input type="text" placeholder="Как к Вам обращаться" class="form__input">
                          </label>
                        </div>
                        <div class="form__col form__col__right">
                          <label class="form__label">Email
                            <input type="email" placeholder="Куда мне писать" class="form__input">
                          </label>
                        </div>
                      </div>
                      <div class="form__row">
                        <label class="form__label">Сообщение
                          <textarea placeholder="Кратко в чем суть" class="form__input form__input__textarea"></textarea>
                        </label>
                      </div>
                      <div class="form__row">
                        <label class="form__label">Введите код, указанный на картинке
                          <div class="form__captcha">
                            <div class="form__input form__input__img-captcha"><img src="img/captcha.jpg" class="form__input__img"></div>
                            <input type="text" placeholder="Введите код" class="form__input form__input__captcha">
                          </div>
                        </label>
                      </div>
                      <div class="form__row form__row__buttons">
                        <div class="form__col">
                          <input type="submit" value="Отправить" class="form__button form__button__submit">
                        </div>
                        <div class="form__col form__col__right">
                          <input type="button" value="Очистить" class="form__button form__button__clear">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php @include "_footer.php" ?>

    </body>
  </head>
</html>