<template>
    <div>
        <p>掲示板に投稿する</p>
        <label for="name">ニックネーム：</label>
        <input id="name" type="text" v-model="name" />
        <br />
        <br />
        <label for="comment">コメント：</label>
        <textarea id="comment" v-model="comment"></textarea>
        <button @click="createComment">送信</button>
        <h2>
            掲示板
        </h2>
        <div v-for="post in posts" :key="post.neme">
            <div>名前; {{ post.fields.name.stringValue }}</div>
            <div>名前; {{ post.fields.comment.stringValue }}</div>
            <button @click="deleteComment">削除</button><br /><br />
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            name: "",
            comment: "",
            posts: []
        };
    },
    created() {
        axios.get().then(response => {
            this.posts = response.data.documents;
            console.log(response.data.documents);
        });
    },
    methods: {
        createComment() {
            axios
                .post("", {
                    fields: {
                        name: {
                            stringValue: this.name
                        },
                        comment: {
                            stringValue: this.comment
                        }
                    }
                })
                .then(response => {
                    console.log(response);
                })
                .catch(response => {
                    console.log(error);
                });
        },
        deleteComment() {
            axios
                .delete("", {
                    params: { name: "test" }
                })
                .then(response => {
                    console.log(response);
                })
                .catch(response => {
                    console.log(error);
                });
        }
    }
};
</script>
