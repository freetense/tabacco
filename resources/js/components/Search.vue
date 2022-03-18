<template>
    <div id="site_search">
        <a id="show_search" href="javascript:;" title="Search:"></a>
        <div id="search_bar" class="clearfix">
            <input type="text" id="filter_keyword" />
            <select id="filter_category_id">
                <option value="0">Все категории</option>
                <option value="1">Категория 1</option>
                <option value="2">Категория 2</option>
            </select>
            <a class="s_button_1 s_secondary_color_bgr"><span class="s_text">Найти</span></a> <a class="s_advanced s_main_color" href="">Расширеный поиск</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "Search"
}
</script>

<style scoped>

</style>
