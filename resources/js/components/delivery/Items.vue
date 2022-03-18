<template>
<div>
    <info></info>
    Привет!
    <Contacts></Contacts>
</div>
</template>

<script>
import Contacts from "../home/Contacts";
import Info from "./Info";
export default {
    name: "Items",
    components: {Info, Contacts}
}
</script>

<style scoped>

</style>
