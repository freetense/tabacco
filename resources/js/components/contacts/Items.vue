<template>
    <div>
        <Info></Info>
        <form-contacts></form-contacts>
        <Contacts></Contacts>
    </div>
</template>

<script>
import Info from "./Info";
import Contacts from "../home/Contacts";
import FormContacts from "./FormContacts";
export default {
    name: "Items",
    components: {FormContacts, Info, Contacts}
}
</script>

<style scoped>

</style>
