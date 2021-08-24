<template>
  <div>
    <b-container>
      <div class="text-right" @click="goToListPage">
        更多款式...
      </div>
      <b-row>
        <b-col col cols="6" v-for="(value, index) in data" :key="index" class="list mb-3">
          <div class="logo">
            <img :src="value.image" alt="">
          </div>
          <div class="title">
            {{ value.title }}
          </div>
          <div class="attrs">
            <div class="attr py-1 px-2 d-inline-block mr-1" v-for="attr in value.attrs">
              {{ attr }}
            </div>
          </div>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
	export default {
    props: ['data'],
    methods: {
      goToListPage() {
        // this.$router.push({path: '/list'});
      }
    }
	}
</script>
