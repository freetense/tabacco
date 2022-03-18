<template>
    <div id="content" class="container_16">



        <div id="contacts" class="s_info_page grid_12">

            <h2><span class="s_secondary_color">Контакты</span> </h2>
            <p class="grid_4"><strong>Телефон:</strong><br /> +7 (951) 9066351</p>
            <br />
            <span class="clear border_ddd"></span>
            <br />


            <h2><span class="s_secondary_color">Отправить</span> отзыв</h2>

            <form id="contact_form" action="#" method="post" enctype="multipart/form-data">
                <div id="contact_form_icon"></div>

                <div class="s_row_3 clearfix">
                    <label><strong>Имя:</strong> *</label>
                    <input type="text" size="40" class="required" title="Имя должно быть от 3 до 32 символов!" />
                </div>
                <div class="s_row_3 clearfix">
                    <label><strong>E-Mail адрес:</strong> *</label>
                    <input type="text" size="40" class="required email" />
                </div>
                <div class="s_row_3 clearfix">
                    <label><strong>Отзыв:</strong> *</label>
                    <div class="s_full">
                        <textarea id="enquiry" style="width: 98%;" rows="10" class="required" title="Отзыв должен быть от 10 до 3000 символов!"></textarea>
                    </div>
                </div>
                <a class="s_button_1 s_main_color_bgr" onclick="$('#contact_form').submit();"><span class="s_text">Отправить</span></a>
            </form>

        </div>

        <div id="right_col" class="grid_3">

            <div id="information_module" class="s_box">
                <h2>Информация</h2>
                <ul class="s_list_1">
                    <li><a href="/">На главную</a></li>
                    <li><a href="static.html">Политика</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                    <li><a href="sitemap.html">Карта сайта</a></li>
                </ul>
            </div>

            <div id="featured_side" class="s_box clearfix">
                <h2>Избранное</h2>
                <div class="s_item s_size_1 clearfix">
                    <a class="s_thumb" href="/product"><img src="images/dummy/pic_8.jpg" width="38" height="38" alt="White football trainers" /></a>
                    <h3><a href="/product">White football trainers</a></h3>
                    <p><a href="/product"><span class="s_main_color"><span class="s_currency s_before">£</span>117.50</span></a></p>
                </div>
                <div class="s_item s_size_1 clearfix">
                    <a class="s_thumb" href="/product"><img src="images/dummy/pic_7.jpg" width="38" height="38" alt="Hubo Boss Emotion" /></a>
                    <h3><a href="/product">Hubo Boss Emotion</a></h3>
                    <p><a href="/product"><span class="s_main_color"><span class="s_currency s_before">£</span>2,350.00</span></a></p>
                </div>
                <div class="s_item s_size_1 clearfix">
                    <a class="s_thumb" href="/product"><img src="images/dummy/pic_6.jpg" width="38" height="38" alt="Christian Dior J'adore" /></a>
                    <h3><a href="/product">Christian Dior J'adore</a></h3>
                    <p><a href="/product"><span class="s_main_color"><span class="s_currency s_before">£</span>328.99</span></a></p>
                </div>
            </div>

        </div>

        <div class="clear"></div>

    </div>
</template>

<script>
export default {
    name: "FormContacts"
}
</script>

<style scoped>

</style>
