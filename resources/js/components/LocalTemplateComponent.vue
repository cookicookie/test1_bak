<template>
<div>
    <h1>ローカル登録</h1> 
　  <p>いいね{{ halfnumber }}</p>
    <button @click='increment'>+1</button>
</div>
</template>

<script>
export default {
    props: {
        number: Number
    },
    computed: {
        halfnumber() {
            return this.number / 2;
        }
    },
    methods: {
        increment() {
             this.$emit("click", this.number + 1);
        }
    }
};

</script>

<style scope>
/* div {
    color: 1px solid red;
} */
</style>