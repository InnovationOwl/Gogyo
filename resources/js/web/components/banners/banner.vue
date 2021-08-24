<template>
	<swiper :options="swiperOption" ref="mySwiper">
		<!-- slides -->
		<swiper-slide v-for="(banner, index) in data" :key="index"><img :src="banner" alt=""></swiper-slide>
		<i class="fas fa-chevron-left swiper-button-prev swiper-button" slot="button-prev"></i>
		<i class="fas fa-chevron-right swiper-button-next swiper-button" slot="button-next"></i>
	</swiper>
</template>

<script>
  import 'swiper/dist/css/swiper.css'
  import {swiper, swiperSlide} from 'vue-awesome-swiper'
  
	export default {
    props: ['data'],
    components: {
      swiper,
      swiperSlide
    },
		data() {
      return {
        swiperOption: {
          slidesPerView: 1,
          loop: true,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        }
      }
		}
	}
</script>