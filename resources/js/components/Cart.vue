<template>
    <div id="cart_menu" class="s_nav">
        <a href="/cart"><span class="s_icon"></span> <small class="s_text">Корзина</small><span class="s_grand_total s_main_color">&#8381;0.00</span></a>
        <div class="s_submenu s_cart_holder">
            <p class="s_mb_0">Корзина пуста</p>
        </div>
    </div>
</template>

<script>
const { yandexMap, ymapMarker } = require('vue-yandex-maps');
export default {
    name: "Cart",
    components: { yandexMap, ymapMarker }
}
</script>

<style scoped>

</style>
