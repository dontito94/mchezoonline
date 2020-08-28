<template>
<div>
<!--    header component-->
    <header-component></header-component>

<!--    main component-->
    <main-component></main-component>
<!--    footer component-->
    <footer-component></footer-component>
</div>
</template>

<script>
    import HeaderComponent from "./HeaderComponent";
    import FooterComponent from "./FooterComponent";
    import MainComponent from "./MainComponent";
    export default {
        name: "Home",
        components: {FooterComponent, MainComponent, HeaderComponent}
    }
</script>

<style scoped>

</style>
