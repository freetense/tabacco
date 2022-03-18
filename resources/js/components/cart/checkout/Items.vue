<template>
    <div>
        <info></info>
        <checkout></checkout>
    </div>
</template>

<script>
import Info from "./Info";
import Checkout from "./checkout";
export default {
    name: "Items",
    components: {Checkout, Info}
}
</script>

<style scoped>

</style>
