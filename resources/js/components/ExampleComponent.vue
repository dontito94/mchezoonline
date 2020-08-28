<template>
    <div class="container">
        <home></home>
    </div>
</template>

<script>
    import Home from "./home/HomeComponent";
    export default {
        components: {Home},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
