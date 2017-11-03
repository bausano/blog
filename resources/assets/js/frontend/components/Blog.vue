<template>
  <div>
    <column class="hidden-xs hidden-sm col-md-3 text-right"
      :links="left" heading="Previous" @swap="init"></column>

    <post
      class="col-sm-12 col-md-6"
      :article="current"
      v-if="articles.length > 0"></post>
    <div v-else class="col-sm-12 col-md-6" style="text-align: center">
      <h1>There is nothing here, yet.</h1>
    </div>

    <column class="hidden-xs hidden-sm col-md-3"
      :links="right" heading="Next" @swap="init"></column>
  </div>
</template>

<script>
  import Column from '../components/Column.vue'
  import Post from '../components/Post.vue'

  export default {
    component: [Column, Post],
    /**
     * @param load NumericString ID of an article to display.
     * @param raw String Stringified JSON of articles.
     */
    props: ['load', 'raw'],
    data() {
      return {
        left: [],
        right: [],
        current: {}
      }
    },

    computed: {
      articles() {
        return JSON.parse(this.raw)
      }
    },

    mounted() {
      // Sorts articles by ID.
      // TODO: Change this to Created.
      // NOTE: This could be done in backend.
      this.articles.sort((a, b) => {
        return parseInt(a.id) - parseInt(b.id)
      })

      this.init(this.load)
    },

    methods: {
      /**
       * Reloads the page and displays an article.
       *
       * @param id ID of an article to display.
       */
      init(id) {
        var key = this.articles.findIndex((article) => {
          return parseInt(article.id) === parseInt(id)
        })

        // If article doesn't exist, display first one in array.
        if (key === -1) { key = 0 }

        this.left = this.leftCol(this.articles, key)

        this.right = this.rightCol(this.articles, key)

        this.current = this.articles[key]
      },

      /**
       * Computes and returns articles that should be displayed
       * in the right column, that means previous 2 articles.
       *
       * @param arr Array of article objects.
       * @param key Position of article to display.
       *
       * @return Array of article objects.
       */
      rightCol: (arr, key) => {
        return arr.slice(key + 1, arr.length).slice(0, 2)
      },

      /**
       * Computes and returns articles that should be displayed
       * in the left column, that means next 2 articles.
       *
       * @param arr Array of article objects.
       * @param key Position of article to display.
       *
       * @return Array of article objects.
       */
      leftCol: (arr, key) => {
        let articles = arr.slice(0, key)

        return articles.slice(articles.length - 2, articles.length).reverse()
      }
    }
  }
</script>
