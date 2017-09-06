<template>
  <div>
    <column class="hidden-sm col-md-3 text-right"
      :links="left" heading="Previous" @swap="init"></column>

    <post class="col-sm-12 col-md-6" :article="current"></post>

    <column class="hidden-sm col-md-3"
      :links="right" heading="Next" @swap="init"></column>
  </div>
</template>

<script>
  import Column from '../components/Column.vue'
  import Post from '../components/Post.vue'

  export default {
    component: [Column, Post],
    props: ['load'],
    data() {
      return {
        articles: require('../test.js'),
        left: [],
        right: [],
        current: {}
      }
    },
    mounted() {
      this.articles.sort((a, b) => {
        return parseInt(a.id) - parseInt(b.id)
      })

      this.init(this.load)
    },
    methods: {
      init(id) {
        var key = this.articles.findIndex((article) => {
          return parseInt(article.id) === parseInt(id)
        })
        if (key === -1) { key = 0 }

        this.left = this.leftCol(this.articles, key)
        this.right = this.rightCol(this.articles, key)
        this.current = this.articles[key]
      },

      rightCol: (arr, key) => {
        return arr.slice(key + 1, arr.length).slice(0, 2)
      },

      leftCol: (arr, key) => {
        let articles = arr.slice(0, key)

        return articles.slice(articles.length - 2, articles.length).reverse()
      }
    }
  }
</script>
