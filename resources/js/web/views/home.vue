<template lang="pug">
<page>
    v-container Bryant is genius
        #bryant.class 123213
            #purple.isOn99 purple is on 99
        v-select.select-1(
            :items="items",
            v-model="items",
            label="Solo field",
            dense,
            solo,
            :menu-props="{offsetY: true}"
        )
</page>
</template>

<script>
import page from "../components/layout/page";

export default {
    props: ["user"],
    components: {"page": page},
    data() {
        return {
            name: "",
            items: ["Foo", "Bar", "Fizz", "Buzz"],
        };
    },
    computed: {},
    methods: {},
    created() {},
};
</script>

<style lang="sass">
#bryant
    background-color: red
    #purple
        background-color: green
</style>
