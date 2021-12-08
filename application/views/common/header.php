<header class="row">
    <div class="col-2 align-self-end">
        <a class="header-logo" href="/">
            <h1>TTT.ua</h1>
        </a>
    </div>
    <div class="col-8">
        <div class="input-group">
            <input class="form-control" type="text">
            <button class="btn btn-outline-secondary" type="button">Поиск</button>
        </div>
    </div>
    <div class="col-2 align-self-end">
        <div class="container header-user">
            <div class="row">
                <?php
                if (/*!Session::get("succes")*/true)
                    echo '<a class="col" href="/account/login">Войти</a>';
                else
                    echo '<a class="col" href="/account/profile">Профиль</a>';
                ?>
                <a class="col" href="/basket/show">Корзина</a>
            </div>
        </div>
    </div>
</header>