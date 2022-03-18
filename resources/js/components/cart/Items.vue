<template>
<div>
    <info></info>
    <cart></cart>
    <Contacts></Contacts>
</div>
</template>

<script>
import Info from "./Info";
import Cart from "./Cart";
import Contacts from "../home/Contacts";
export default {
    name: "Items",
    components: {Cart, Info, Contacts}
}
</script>

<style scoped>

</style>
