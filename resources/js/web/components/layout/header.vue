<template lang="pug">
header#header
    v-container
        .main-menu-wapper
            v-row(align="center", justify="start")
                v-col
                    .logo
                        a(href="/")
                            img(src="/images/Logo.svg", alt="")
                v-col.menu-wrapper
                    ul.main-menu
                        li
                            a(href="") Home
                            ul.sub-menu
                        li
                            a(href="") Health
                            ul.sub-menu
                        li
                            a(href="") Domestic
                            ul.sub-menu
                        li
                            a(href="") Leisure
                            ul.sub-menu
                        li
                            a(href="") Guide
                            ul.sub-menu
                v-col#header-control
                    .dfdsa 21321321
</template>

<script>
export default {
    methods: {
        goToPage(pageName, query = null) {
            this.$root.goToPage(pageName, query);
        },
    },
};
</script>
