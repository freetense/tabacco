<template>
    <div id="content" class="container_16">


        <div id="login_page" class="grid_16">

            <div class="grid_8 alpha">
                <h2 class="s_title_1"><span class="s_secondary_color">Я новый</span> пользователь.</h2>
                <div class="clear"></div>
                <form id="account" action="forms.html">
                    <div class="s_row_3 clearfix">
                        <p>Выберите опцию:</p>
                        <label class="s_radio" for="register">
                            <input type="radio" id="register" checked="checked" />
                            <strong>Регистарция аккаунта</strong>
                        </label>
                        <label for="guest">
                            <input type="radio" id="guest" />
                            <strong>Зайти как гость</strong>
                        </label>
                        <br />
                        <p>Создав учетную запись, вы сможете совершать покупки быстрее, быть в курсе статуса заказа и отслеживать ранее сделанные заказы.</p>

                    </div>
                    <span class="clear border_ddd"></span>
                    <br />
                    <button class="s_button_1 s_main_color_bgr" type="submit"><span class="s_text">Продолжить</span></button>
                </form>
            </div>

            <div class="grid_8 omega">
                <h2 class="s_title_1"><span class="s_secondary_color">Постоянный </span> клиент</h2>

                <div class="clear"></div>
                <form id="login" action="orders.html" method="post">
                    <div class="s_row_3 clearfix">
                        Я постоянный клиент.<br />
                        <br />
                        <label><strong>E-Mail адрес:</strong></label>
                        <input type="text" size="35" class="required email" />
                        <br />
                        <br />
                        <label><strong>Пароль:</strong></label>
                        <input type="password" size="35" class="required" />
                        <br />
                    </div>
                    <span class="clear border_ddd"></span>
                    <br />
                    <div class="s_nav s_size_2 left">
                        <ul class="clearfix">
                            <li><a href="#">Забыл пароль?</a></li>
                        </ul>
                    </div>
                    <button class="s_button_1 s_main_color_bgr" type="submit"><span class="s_text">Авторизация</span></button>
                </form>
            </div>

            <div class="clear"></div>

        </div>

    </div>
</template>

<script>
export default {
    name: "Content"
}
</script>

<style scoped>

</style>
