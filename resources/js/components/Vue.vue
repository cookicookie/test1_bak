<template>
    <div>
        <router-view></router-view>
        <P>チュートリアル</P>
        <p>コメント</p>
        <ul>
            <li v-for="(todo, index) in todos" :key="index">
                <label v-bind:class="{ done: todo.isChecked }">
                    <input type="checkbox" v-model="todo.isChecked" />
                    {{ todo.title }}<br />{{ todo.isChecked }}
                </label>
            </li>
        </ul>
        <p>
            <input
                type="text"
                v-model="newTodo"
                v-on:keyup.enter="addTodo(newTodo)"
            />
        </p>
        <button @click="deleteTodo()">チェック済み削除する</button>
        <button @click="allCheck()">全てを選択</button>
        <button @click="change()">コンポーネント切り替え</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            todos: [
                { title: "once", isChecked: true },
                { title: "twice", isChecked: true }
            ],
            newTodo: ""
        };
    },
    watch: {
        contents: {
            handler: function(val, oldVal) {
                //値に変化が合った時点で検出する
                console.log("sample changed");
            },
            deep: true,
            immediate: true //初期描画時に発火
        }
    },
    methods: {
        addTodo: function(newTitle) {
            this.todos.push({
                title: newTitle,
                isChecked: false
            });
            this.saveTodo();
        },
        saveTodo: function() {
            localStorage.setItem("todos", JSON.stringify(this.todos));
        },
        deleteTodo: function() {
            this.todos = this.todos.filter(function(todo) {
                return todo.isChecked === false; //
            });
            this.saveTodo(); //ブラウザに保存
        },
        loadTodo: function() {
            this.todos = JSON.parse(localStorage.getItem("todos")); //ローカルストレージの値をJSONで取得し変換
        },
        allCheck: function() {
            this.todos.forEach((object, index) => {
                if (object.isChecked === false) {
                    this.$set(this.todos[index], "isChecked", true);
                    console.log(1);
                } else if (object.isChecked === true) {
                    this.$set(this.todos[index], "isChecked", true);
                    console.log(2);
                } else {
                    this.$set(this.todos[index], "isChecked", false);
                    console.log(3);
                }
            });
            this.saveTodo();
        },
        change() {
            this.$router.push("users");
        }
    },
    mounted: function() {
        //初期描画時にlodeTodoを走らせる
        this.loadTodo();
    }
};
</script>
<style scoped>
.done {
    text-decoration: line-through;
}
</style>
// コメントの変更に対してウォッチャを走らせる
