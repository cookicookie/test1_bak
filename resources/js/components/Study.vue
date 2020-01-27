<template>
    <div class="main">
        <!-- <button @click="show = !show">切り替え</button>
        <button @click="myanimation = 'slide'">slide</button>
        <button @click="myanimation = 'fade'">fade</button>
        <transition　:name="myanimation">
        　<p v-if="show">test</p>
        </transition>
        <transition　name="slide" enter-active-class="animated bounce" appear>
          <div v-if="show">
        　<p>test</p>
        </div>
        </transition> -->
        <div id="app">
            <slide right="right">
                <a id="home" href="#">
                    <span>Home</span>
                </a>
                <a id="about" href="#">
                    <span>About</span>
                </a>
                <a id="contact" href="#">
                    <span>Contact</span>
                </a>
            </slide>
            <div id="page-wrap"></div>
        </div>
        <p v-on:mouseover="mouseover" v-on:mouseleave="mouseleave">list</p>
        <div>
            <ul v-if="mes === true" class="list">
                <li v-for="list in listlabel" class="list-item">
                    <a
                        href="#"
                        v-bind:class="{ active: active === list }"
                        @click="dropdown(list)"
                        >{{ list }}</a
                    >
                    <ul v-if="active === list">
                        <li v-if="list === methods" v-for="item in directive">
                            <button class="button" v-on:click="show">
                                {{ item }}
                            </button>
                            <modal name="modal-area">
                                <div class="modal-area-inner">
                                    <p></p>
                                    <p>
                                        モーダルウィンドウが表示されました。
                                    </p>
                                    <span class="hide" v-on:click="hide"
                                        >閉じる[close]</span
                                    >
                                </div>
                            </modal>
                        </li>
                        <li v-if="list === Property" v-for="item in content">
                            <button class="button" v-on:click="show">
                                {{ item }}
                            </button>
                            <modal name="modal-area">
                                <div class="modal-area-inner">
                                    <p>
                                        モーダルウィンドウが表示されました。
                                    </p>
                                    <span class="hide" v-on:click="hide"
                                        >閉じる[close]</span
                                    >
                                </div>
                            </modal>
                        </li>
                        <li v-if="list === code" v-for="item in sample">
                            <button class="button" v-on:click="show">
                                {{ item }}
                            </button>
                            <modal name="modal-area">
                                <div class="modal-area-inner">
                                    <p>
                                        モーダルウィンドウ
                                    </p>
                                    <span class="hide" v-on:click="hide"
                                        >閉じる[close]</span
                                    >
                                </div>
                            </modal>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- <img :src="'../img/sansui_shop.jpg'"> -->
    </div>
</template>
<script>
import { Slide } from "vue-burger-menu";
Vue.component("slide", Slide);
import VModal from "vue-js-modal";
Vue.use(VModal);
export default {
    data() {
        return {
            chang: true,
            mes: false,
            showModal: false,
            listlabel: ["methods", "Property", "code"],
            directive: ["v-html", "v-bind", "v-on", "ad"],
            content: ["1", "2", "3", "4"],
            sample: ["あ", "い", "う", "え"],
            active: "",
            myanimation: "slide",
            isActive: "",
            methods: "methods",
            Property: "Property",
            code: "code"
        };
    },
    methods: {
        mouseover: function() {
            this.mes = true;
            this.showModal = true;
        },
        mouseleave: function() {
            this.mes = true;
            this.showModal = true;
        },
        dropdown(list) {
            this.active = this.active === list ? "" : list; //クリックしたら、listのデータに該当するものがactiveに代入される仕組み
            console.log(list);
        },
        show: function() {
            this.$modal.show("modal-area");
        },
        hide: function() {
            this.$modal.hide("modal-area");
        }
    }
};
</script>
<style scoped>
.fade-enter {
    /* 現れる時の最初の状態 */
    opacity: 0;
}
.fade-enter-active {
    /* 現れる時のトランジションの状態 */
    transition: opacity 2s;
}
.fade-enter-to {
    /* 現れる時の最後の状態 */
    opacity: 1;
}
.fade-leave {
    /* 消える時の最初の状態 */
    opacity: 1;
}
.fade-leave-active {
    /* 消える時のトランジションの状態 */
    transition: opacity 2s;
}
.fade-leave-to {
    /* 消える時の最後の状態 */
    opacity: 0;
}

.slide-enter,
.slide-leave-to {
    opacity: 0;
}

.slide-enter-active {
    /* 現れる時のトランジションの状態 */
    animation: slide-in 2s;
    transition: opacity 2s;
}
.slide-leave-active {
    /* 消える時のトランジションの状態 */
    animation: slide-in 2s reverse;
    transition: opacity 2s;
}

@keyframes slide-in {
    from {
        transform: translateX(100px);
    }
    to {
        transform: translateX(0);
    }
}

.main {
    margin: auto;
    text-align: center;
    width: 70%;
    padding-top: 2rem;
}

ul {
    padding: 0;
}
li {
    list-style: none;
}
a {
    color: #333;
    text-decoration: none;
}
.list {
    padding: 0;
    border: solid 1px #ccc;
}
.list-item a {
    position: relative;
    padding: 8px;
    border-bottom: solid 1px #ccc;
}
.list-item a {
    display: block;
}
.list-item:last-of-type a {
    border-bottom: none;
}
.list-item > a::after {
    content: "▼";
    position: absolute;
    top: 12px;
    right: 10px;
    font-size: 10px;
}
.list-item > a.active::after {
    content: "▲";
}
.sublist-item {
    font-size: 0.75rem;
}

.modal-area-inner {
    padding: 10px;
    box-sizing: border-box;
    position: relative;
}
.modal-area-inner .hide {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 12px;
}
</style>
