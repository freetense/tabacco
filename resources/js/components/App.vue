<template>
    <div>
        <div id="header" class="container_12">
            <div class="grid_12">
                <a id="site_logo" href="/">Shoppica store - Premium e-Commerce Theme</a>
                <Menu></Menu>
                <search></search>
                <menu-down></menu-down>
                <Cart></Cart>
            </div>
        </div>
    </div>
</template>
<script>
    import Search from "./Search";
    import Menu from "./Menu";
    import MenuDown from "./MenuDown";
    import Cart from "./Cart";

    export default {
        components: {Cart, MenuDown, Menu, Search},
        data() {
            return {
            };
        },
        mounted() {
        }
    }
</script>
<style scoped>
</style>


