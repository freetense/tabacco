<template>
    <div id="categories" class="s_nav">
        <ul>
            <li id="menu_home"> <a href="/">Home</a> </li>
            <li v-for="item in category" >
                <a v-bind:href="'/listing/' + item.link">{{ item.name }}</a>
                <div class="s_submenu">
                    <h3>{{ item.name }}</h3>
                    <ul class="s_list_1 clearfix">
                        <li> <a href="/listing">Digital Cameras</a>
                            <ul class="s_list_1 clearfix">
                                <li><a href="/listing">Compact Cameras</a></li>
                                <li><a href="/listing">Digital SLR</a></li>
                            </ul>
                        </li>
                        <li><a href="/listing">Home Audio</a></li>
                        <li><a href="/listing">Home Cinema</a></li>
                        <li><a href="/listing">Cell Phones</a></li>
                        <li><a href="/listing">MP3 Players</a></li>
                        <li><a href="/listing">Car-Audio</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "MenuDown",
    data() {
        return {
            category: null,
        };
    },
    mounted() {
        const _this = this;
        axios
            .get('/categoryAll')
            .then(response => {
                _this.category = response.data;
            })
            .catch(error => {
                console.log(error);
            });
    }
}
</script>

<style scoped>

</style>
