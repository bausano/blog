<template>
  <div class="post">
    <div class="content">
      <div class="header">
        <h1>{{ article.title }}</h1>
        <h3>{{ article.subtitle }}</h3>
      </div>
      <div class="info row">
        <div class="time col-xs-6 col-md-6">
          <i class="fa fa-calendar"></i>
          {{ article.created_at }}
        </div>
        <div class="author col-xs-6 col-md-6">
          <a href="http://bausano.me" target="_blank">{{ article.user ? article.user.name : '' }}</a>
        </div>
        <div class="description col-md-12">> {{ article.description }}</div>
      </div>
      <div class="body" v-html="article.body"></div>

      <heel></heel>
    </div>
  </div>
</template>

<script>
  import Heel from '../components/Heel.vue'

  export default {
    props: ['article'],
    components: {Heel},
    watch: {
      article: () => {
        Prism.highlightAll()
      }
    }
  }
</script>
