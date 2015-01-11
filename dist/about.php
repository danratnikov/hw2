<?php @include "_head.php" ?>

    <body>
      <div class="wrapper">

        <?php @include "_header.php" ?>

        <div class="divider">			</div>
        <div class="main">
          <div class="container">
            
            <?php @include "_sidebar.php" ?>

            <div class="content">
              <div class="b-content main-info">
                <h2 class="b-content__header"><span>Основная информация</span></h2>
                <div class="b-content__body">
                  <div class="main-info__photo"><img src="../img/face.png" class="main-info__img"></div>
                  <div class="main-info__props">
                    <dl class="prop">
                      <div class="prop-line">
                        <dt class="prop__name">Меня зовут</dt>
                        <dd class="prop__val prop__val__name">Ратников Данил Геннадьевич</dd>
                      </div>
                      <div class="prop-line">
                        <dt class="prop__name">Мой возраст</dt>
                        <dd class="prop__val prop__val__age">33 года</dd>
                      </div>
                      <div class="prop-line">
                        <dt class="prop__name">Мой город</dt>
                        <dd class="prop__val prop__val__town">Нижний Тагил, Россия</dd>
                      </div>
                      <div class="prop-line">
                        <dt class="prop__name">Моя специализация</dt>
                        <dd class="prop__val prop__val__profile">FRONTEND разработчик</dd>
                      </div>
                      <div class="prop-line">
                        <dt class="prop__name">Ключевые навыки</dt>
                        <dd class="prop__val prop__val__skills"><span class="prop__skill">html</span><span class="prop__skill">css</span><span class="prop__skill">javascript</span><span class="prop__skill">gulp</span><span class="prop__skill">git</span>
                        </dd>
                      </div>
                    </dl>
                  </div>
                </div>
              </div>
              <div class="b-content jobs-info">
                <h2 class="b-content__header"><span>Опыт работы</span></h2>
                <div class="b-content__body">
                  <ul class="content-list">
                    <li class="content-list__item content-list__item__job">
                      <h4 class="content-list__header">"ИП Боровицкий" - Продавец дисков</h4>
                      <p class="content-list__text">Сентябрь 2004 - Август 2008</p>
                    </li>
                    <li class="content-list__item content-list__item__job">
                      <h4 class="content-list__header">"ООО Системы безопастности" - Системный администратор</h4>
                      <p class="content-list__text">Июнь 2008 - Июль 2010</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="b-content edu-info">
                <h2 class="b-content__header"><span>Образование</span></h2>
                <div class="b-content__body">
                  <ul class="content-list">
                    <li class="content-list__item content-list__item__edu">
                      <h4 class="content-list__header">Незаконченное высшее. СПБГУ ИТМО</h4>
                      <p class="content-list__text">Октябрь 2012 - по настоящее время</p>
                    </li>
                    <li class="content-list__item content-list__item__sheet">
                      <h4 class="content-list__header">Курсы Loftschool.ru</h4>
                      <p class="content-list__text">Ноябрь 2014 - по настоящее время</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php @include "_footer.php" ?>

    </body>
  </head>
</html>