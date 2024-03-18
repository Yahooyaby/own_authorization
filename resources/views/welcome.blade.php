<!doctype html>
<html lang="en">

<header>
    <div class="container">
        <a href="/" class="logo" title="Логотип">
        </a>
        <nav>
            @guest('web')
                <a href={{route('login')}}>Войти</a>
            @endguest
            @auth('web')
                <a href={{route('logout')}}>Выйти</a>
                <a href={{route('index')}}>Записи сообщества</a>
            @endauth
              <a href={{route('create')}}>Регистрация</a>

        </nav>
    </div>
</header>
<body>
@guest('web')
    Зайдите на сайт
@endguest
@auth('web')
    Вы успешно Зашли на сайт, вы красачик
@endauth
</body>
</html>
