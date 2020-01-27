<template>
    <div>
      <p　v-border:dotted="{width: '40px', color: 'blue'}">bind</p>
      <p>{{ title |  }}</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: "Takahashi Daiki",
            subtitle: "aaaaaaa",
            num: 123456787
        };
    },
    filters: {
        capitalize(value) {
            return value.capitalize();
        },
        lowerCase(value) {
            return value.toLowerCase();
        }
    },
    // computed: {
    //     upperCaseTitle() {
    //         return this.subtitle.toUpperCase();
    //     }
    // },
    directives: {
        border(el, binding) {
                el.style.border = "solid red 0.1px";
    el.style.borderWidth = binding.value.width;
    el.style.borderColor = binding.value.color;
    el.style.borderStyle = binding.arg;

        }
    }
};
</script>

