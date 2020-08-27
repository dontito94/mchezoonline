<template>
<div>
<!--    header component-->
    <header></header>

<!--    main component-->

    <main></main>

<!--    footer component-->
    <footer></footer>
</div>
</template>

<script>
    import Header from "./Header";
    import Footer from "./Footer";
    import Main from "./Main";
    export default {
        name: "Home",
        components: {Main, Footer, Header}
    }
</script>

<style scoped>

</style>
