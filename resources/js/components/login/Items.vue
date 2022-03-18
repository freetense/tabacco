<template>
    <div>
        <Info></Info>
        <Content></Content>
        <Contacts></Contacts>
    </div>
</template>

<script>
import Info from "./Info";
import Content from "./Content";
import Contacts from "../home/Contacts";
export default {
    name: "Login",
    components: {Contacts, Content, Info}
}
</script>

<style scoped>

</style>
