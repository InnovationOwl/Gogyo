<template>
    <div id="page">
        <v-app>
            <page-header></page-header>
            <slot></slot>
            <page-footer></page-footer>
        </v-app>
    </div>
</template>

<script>
import pageHeader from "./header";
import pageFooter from "./footer";
export default {
    props: ["user"],
    components: {
        "page-header": pageHeader,
        "page-footer": pageFooter,
    },
    data() {
        return {
            name: "",
        };
    },
    computed: {},
    methods: {},
    created() {},
};
</script>
