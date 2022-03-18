<template>
<div>
    <Description></Description>
    <SpecialsProducts></SpecialsProducts>
    <Banners></Banners>
    <LatestHome></LatestHome>
    <Contacts></Contacts>
</div>
</template>

<script>
import SpecialsProducts from "./SpecialsProducts";
import Description from "./Description";
import Banners from "./Banners";
import LatestHome from "./LatestHome";
import Contacts from "./Contacts";
export default {
    name: "Items",
    components: {Contacts, LatestHome, Banners, Description, SpecialsProducts}
}
</script>

<style scoped>

</style>
