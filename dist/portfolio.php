<?php @include "_head.php" ?>

    <body>
      <div class="wrapper">

        <?php @include "_header.php" ?>

        <div class="divider">			</div>
        <div class="main">
          <div class="container">

            <?php @include "_sidebar.php" ?>

            <div class="content">
              <div class="b-content">
                <h2 class="b-content__header"><span>Мои работы</span></h2>
                <div class="b-content__body">
                  <ul class="works-list">
                    <li class="works-list__item"><a href="#" class="works-list__link">
                        <div class="works-list__thumb"><img src="img/works/work_1.jpg" class="works-list__img">
                          <div class="works-list__hover">
                            <p class="works-list__title"><span class="works-list__title-in">Название</span></p>
                          </div>
                        </div>
                        <p class="works-list__url">www.site.ru</p>
                        <p class="works-list__desc">Информация о проекте 1 превью 2 строки</p></a></li>
                    <li class="works-list__item"><a href="#" class="works-list__link">
                        <div class="works-list__thumb"><img src="img/works/work_2.jpg" class="works-list__img">
                          <div class="works-list__hover">
                            <p class="works-list__title"><span class="works-list__title-in">Название</span></p>
                          </div>
                        </div>
                        <p class="works-list__url">www.site.ru</p>
                        <p class="works-list__desc">Информация о проекте 2 превью 2 строки</p></a></li>
                    <li class="works-list__item"><a href="#" class="works-list__link">
                        <div class="works-list__thumb"><img src="img/works/work_3.jpg" class="works-list__img">
                          <div class="works-list__hover">
                            <p class="works-list__title"><span class="works-list__title-in">Название</span></p>
                          </div>
                        </div>
                        <p class="works-list__url">www.site.ru</p>
                        <p class="works-list__desc">Информация о проекте 3 превью 2 строки</p></a></li>
                    <li class="works-list__item"><a href="#" class="works-list__link">
                        <div class="works-list__thumb"><img src="img/works/work_4.jpg" class="works-list__img">
                          <div class="works-list__hover">
                            <p class="works-list__title"><span class="works-list__title-in">Название</span></p>
                          </div>
                        </div>
                        <p class="works-list__url">www.site.ru</p>
                        <p class="works-list__desc">Информация о проекте 4 превью 2 строки</p></a></li>
                    <li class="works-list__item"><a href="" class="add-work__link"><img src="img/add-works.png" class="works-list__img works-list__img__add-item"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php @include "_footer.php" ?>
      
      <div class="modal-box hidden">
        <div class="add-form">
          <form id="addform"></form>
          <h2 class="form__header form__header__addform">Добавление проекта<a href="" class="close-icon"></a></h2>
          <div class="divider-blue"></div>
          <div class="form-content">
            <div class="addform-container">
              <div class="form__row">
                <div class="form-error hidden">
                  <h4 class="form-error__title">Ошибка!</h4>
                  <p class="form-error__desc">Невозможно добавить проект.</p>
                </div>
              </div>
              <div class="form__row">
                <label class="form__label">Название проекта
                  <input type="text" placeholder="Введите название" class="form__input">
                </label>
              </div>
              <div class="form__row">
                <label class="form__label">Картинка проекта<a href="" class="upload-icon"></a>
                  <input type="text" placeholder="Загрузите изображение" class="form__input">
                </label>
              </div>
              <div class="form__row">
                <label class="form__label">URL проекта
                  <input type="text" placeholder="Добавьте ссылку" class="form__input">
                </label>
              </div>
              <div class="form__row">
                <label class="form__label">Описание
                  <textarea placeholder="Пара слов о вашем проекте" class="form__input form__input__textarea"></textarea>
                </label>
              </div>
              <div class="form__row">
                <input type="submit" value="Отправить" class="form__button form__button__submit form__button__addform">
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  </head>
</html>