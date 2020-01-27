<template>
    <div>
        <header>
            <router-link to="/comments" class="header-item">掲示板</router-link>
            <router-link to="/login" class="header-item">ログイン</router-link>
            <router-link to="/register" class="header-item">登録</router-link>
        </header>
        <router-view></router-view>
        <div>
            <p>{{ count }}</p>
        </div>
    </div>
</template>

<script>
export default {
    computed: {
        count() {
            return this.$store.state.count;
        }
    }
};
</script>

<style>
.header-item {
    padding: 10px;
    text-align: center;
}

* {
    text-align: center;
}
</style>
