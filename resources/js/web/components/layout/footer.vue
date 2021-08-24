<template lang="pug">
v-footer#footer(fixed)
    v-container
        v-row
            v-col(md=12)
                .footer-left
                    img(src="/images/Logo_white.svg")
                    .companyDesc Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                    .socialIcon
                        a.footer-icon(href="")
                            i.fab.fa-fw.fa-facebook-f
                        a.footer-icon(href="")
                            i.fab.fa-fw.fa-instagram
                        a.footer-icon(href="")
                            i.fab.fa-fw.fa-twitter
                        a.footer-icon(href="")
                            i.fab.fa-fw.fa-youtube
            v-col(md=12)
                .footer-right
                    v-row
                        v-col(md=8)
                            .footer-cell
                                .title About Us
                                ul
                                    li Option 1
                                    li Option 1
                                    li Option 1
                                    li Option 1
                        v-col(md=8)
                            .footer-cell
                                .title Blog
                                ul
                                    li Gogyo
                                    li Chinese tea
                                    li FungShui
                                    li Omgea 7
                        v-col(md=8)
                            .footer-cell
                                .title Customer Service
                                ul
                                    li address
                                    li email
                                    li Line
                                    li Suggest a product
        v-row
            v-col.subscribe(md=12)
                v-text-field(
                    label="Enter email to subscribe",
                    flat,
                    rounded,
                    solo,
                    hide-details,
                    dense
                )
                v-btn.button-1 subscribe
            v-col(md=12)
                v-divider(light)
                .footer-right-bottom
                    v-row
                        v-col
                            div(style="opacity: 0.4") Copyright@Gogyomall
                        v-col
                            v-row
                                v-col
                                    v-select.select-1(
                                        :items="currencyList",
                                        v-model="currency",
                                        dense,
                                        solo,
                                        hide-details,
                                        :menu-props="{offsetY: true}"
                                    )
                                v-col
                                    v-select.select-1(
                                        :items="langsList",
                                        v-model="lang",
                                        dense,
                                        solo,
                                        hide-details,
                                        :menu-props="{offsetY: true}"
                                    )
</template>

<script>
export default {
    data: () => ({
        alignments: ["start", "center", "end"],
        currencyList: ["JPY", "HKD", "USD"],
        langsList: ["JP", "ZH", "ENG"],
        currency: "JPY",
        lang: "JP",
    }),
    methods: {
        goToPage(pageName, query = null) {
            this.$root.goToPage(pageName, query);
        },
    },
};
</script>
<style lang="sass">
#footer
	background-color: #000
	padding-top: 30px
	padding-bottom: 30px
	.companyDesc
		color: #fff
		width: 409px
		margin: 40px 0
		font-size: 16px
		opacity: 40%
		line-height: normal
	.footer-icon
		color: #fff
		padding: 9.5px 10.64px
		font-size: 17px
		border-radius: 5px
		background: #525252
		+ .footer-icon
			margin-left: 15px
		&:hover
			background: #e60012

	.subscribe
		.v-input
			width: 385px
			display: inline-block
			margin-right: 24px
		button
			font-size: 16px
	.footer-right
		.footer-cell
			.title
				color: #e60012
				font-size: 20px
				margin-bottom: 16px
				font-weight: bold
			ul
				li
					font-size: 20px
					color: #fff
					opacity: 40%
					font-weight: 300
					+ li
						margin-top: 16px
					&:hover
						opacity: 100%
	.v-divider
		margin-bottom: 24px
		border-color: rgb(255 255 255 / 40%)
	.footer-right-bottom
		div
			color: #fff
</style>
