<template>
    <div id="content" class="container_12">
        <div id="shopping_cart" class="grid_12">
            <form id="cart" class="clearfix" action="/checkout">
                <table class="s_table_1" width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <th width="65">Remove</th>
                        <th width="60">Image</th>
                        <th width="320">Name</th>
                        <th>Model</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                    <tr class="even">
                        <td valign="middle"><input type="checkbox" /></td>
                        <td valign="middle"><a href="/product"><img src="images/dummy/pic_1.jpg" width="60" height="60" alt="Panasonic Lumix" /></a></td>
                        <td valign="middle"><a href="/product"><strong>Panasonic Lumix</strong></a></td>
                        <td valign="middle">Product 4</td>
                        <td valign="middle"><input type="text" size="3" /></td>
                        <td valign="middle">94.00<span class="s_currency s_after"> eur</span></td>
                        <td valign="middle">94.00<span class="s_currency s_after"> eur</span></td>
                    </tr>
                    <tr class="odd">
                        <td valign="middle"><input type="checkbox" /></td>
                        <td valign="middle"><a href="/product"><img src="images/dummy/pic_2.jpg" width="60" height="60" alt="Armani Acqua di Gioia" /></a></td>
                        <td valign="middle"><a href="/product"><strong>Armani Acqua di Gioia</strong></a></td>
                        <td valign="middle">Product 4</td>
                        <td valign="middle"><input type="text" size="3" /></td>
                        <td valign="middle">822.50<span class="s_currency s_after"> eur</span></td>
                        <td valign="middle">822.50<span class="s_currency s_after"> eur</span></td>
                    </tr>
                    <tr class="even">
                        <td valign="middle"><input type="checkbox" /></td>
                        <td valign="middle"><a href="/product"><img src="images/dummy/pic_3.jpg" width="60" height="60" alt="Jameson Whiskey Special Reserve 12 yers" /></a></td>
                        <td valign="middle"><a href="/product"><strong>Jameson Whiskey Special Reserve 12 yers</strong></a></td>
                        <td valign="middle">Product 8</td>
                        <td valign="middle"><input type="text" size="3" /></td>
                        <td valign="middle">117.50<span class="s_currency s_after"> eur</span></td>
                        <td valign="middle">117.50<span class="s_currency s_after"> eur</span></td>
                    </tr>
                </table>
                <br />
                <p class="s_total"><strong>Цена:</strong> 880.00<span class="s_currency s_after"> руб.</span></p>
                <p class="s_total"><strong>Скидка:</strong> 154.00<span class="s_currency s_after"> руб.</span></p>
                <p class="s_total s_secondary_color last"><strong>Итог:</strong> 1,034.00<span class="s_currency s_after"> руб.</span></p>

                <div class="clear"></div>
                <br />

                <a class="s_button_1 s_ddd_bgr left"><span class="s_text">Продолжить покупки</span></a>
                <button class="s_button_1 s_main_color_bgr" type="submit"><span class="s_text">Оформить</span></button>
                <a class="s_button_1 s_main_color_bgr"><span class="s_text">Обновить</span></a>
            </form>

        </div>
        <div class="clear"></div>
        <br />
        <br />
    </div>
</template>

<script>
export default {
    name: "Cart"
}
</script>

<style scoped>

</style>
