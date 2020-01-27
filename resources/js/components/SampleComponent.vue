<template>
<div>
    <h2>{{ number }}</h2>
    <localTemplate v-bind:number="number" v-on:click="number = $event"></localTemplate>
    <button @click="currentComponent = 'Home'">Home</button>
    <button @click="currentComponent = 'About'">About</button>
    <keep-alive>
    <About v-if="currentComponent === 'About'"></About>
    <Home v-if="currentComponent === 'Home'"></Home>
    </keep-alive>
</div>
</template>

<script>
import localTemplate from './LocalTemplateComponent.vue';
import About from './About.vue';
import Home from './Home.vue';

export default {
    data: function(){
        return {
            name: 'takahashi',
            number: 12,
            currentComponent: "Home" 
        };
    },
        components: {
        localTemplate,
        About,
        Home
    },
};
</script>

<style scope>
/* div {
    border: 1px solid blue;
} */
</style>