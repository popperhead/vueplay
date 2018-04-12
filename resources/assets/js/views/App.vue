<!--  this is our template for vue.js index location  -->
<template>
    <div>
        <h1>VUE JS DEMO</h1>
        <div>
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Hello World</router-link> |
            <router-link :to="{ name: 'app1' }">Hello APP1</router-link>
        </div>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>