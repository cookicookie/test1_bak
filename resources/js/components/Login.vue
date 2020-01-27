<template>
    <div>
        <p>ログイン</p>
        <label for="email">Email;</label>
        <input id="email" type="email" v-model="email" />
        <br />
        <br />
        <label for="password">パスワード；</label>
        <input id="password" type="password" v-model="password" />
        <button @click="login">送信</button>
    </div>
</template>

<script>
import axios from "../axios-auth";

export default {
    data() {
        return {
            email: "",
            password: ""
        };
    },
    methods: {
        login() {
            axios
                .post(
                    "/accounts:signInWithPassword?key=AIzaSyBebth8W5PdJl_42Ci-ioBcC3TlOGyhwCo",
                    {
                        email: this.email,
                        password: this.password,
                        returnSecureToken: true
                    }
                )
                .then(response => {
                    console.log(response);
                })
                .catch(response => {
                    console.log(1);
                });
        }
    }
};
</script>
