<template>
     <li v-on:click="bought = !bought" v-bind:class="{ bought: bought }">
       <div>{{ title }}</div>
     </li>
   </template>
   <script>
     export default {
       props: [ 'title' ],
       data: function() {
         return {
           bought: false
}; }
     }
   </script>
   <style>
     .bought 
     {
       opacity: 0.5;
     } 
</style>