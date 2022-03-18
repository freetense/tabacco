<template>
    <div>
        <info></info>
        <listing></listing>
        <contacts></contacts>
    </div>
</template>

<script>
import Info from "./Info";
import Listing from "./listing";
import Contacts from "../home/Contacts";
export default {
    name: "Items",
    components: {Contacts, Listing, Info}
}
</script>

<style scoped>

</style>
