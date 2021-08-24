<template>
  <swiper :options="swiperOption" ref="mySwiper" class="pt-3">
    <!-- slides -->
    <swiper-slide v-for="(data, index) in content" :data-index="index" :key="index" class="item" :class="{ triangle: index == 0 }">
      <div :data-row="row" :data-color="value" v-for="(value, row) in data" class="text-center mx-auto py-3" :style="'background-image: url(\'/images/web/stones/' + value + '.png\');'"></div>
    </swiper-slide>
  </swiper>
</template>

<script>
  import {swiper, swiperSlide} from 'vue-awesome-swiper'

  export default {
    props: ['content'],
    components: {
      swiper,
      swiperSlide,
    },
    data() {
      let _this = this
      return {
        swiperOption: {
          slidesPerView: 15,
          freeMode: false,
          loop: false,
          on: {
            slideChangeTransitionEnd: function () {
              let target = document.getElementById('rotatable');
              target.style.transition = 'all 0.3s ease-in-out 0s';
              let diff = 0;

              if (this.swipeDirection == 'next') {
                // swipe prev  (left)
                if (this.realIndex != 0) {
                  diff = this.realIndex - _this.$parent.currentIndex;
                } else {
                  diff = this.realIndex - _this.$parent.currentIndex + _this.$parent.content.length;
                }

                if (_this.touch) {
                  // Only update when drag bottom silder
                  _this.$parent.next = _this.$parent.next + diff;
                  _this.$parent.prev = _this.$parent.prev + diff;
                  _this.$parent.check = _this.$parent.check + diff;
                  _this.$parent.touch = false;
                }

                // Update rotate angle of  top image
                _this.$parent.angle = _this.$parent.angle + (360 / _this.$parent.content.length * diff);
              } else {
                // swipe next (right)
                if (_this.$parent.currentIndex >= 0 && this.realIndex > _this.$parent.currentIndex) {
                  diff = _this.$parent.currentIndex - this.realIndex + _this.$parent.content.length;
                } else {
                  diff = _this.$parent.currentIndex - this.realIndex;
                }

                if (_this.$parent.touch) {
                  // Only update when drag bottom silder
                  _this.$parent.next = _this.$parent.next - diff;
                  _this.$parent.prev = _this.$parent.prev - diff;
                  _this.$parent.check = _this.$parent.check - diff;
                  _this.$parent.touch = false;
                }

                // Update rotate angle of  top image
                _this.$parent.angle = _this.$parent.angle + (360 / _this.$parent.content.length * diff * -1);
              }

              // Update current index
              _this.$parent.currentIndex = this.realIndex;
            },
            touchEnd: function () {
              _this.$parent.touch = true;
            },
          },
        }
      }
    }
  }
</script>
