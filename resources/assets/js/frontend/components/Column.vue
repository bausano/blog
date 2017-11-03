<template>
  <div class="column">
    <div class="links" v-if="links.length > 0">
      <h2>{{ heading }}</h2>
      <div class="link" v-for="link in links" v-on:click="swap(link.id)">
        <div class="title">{{ link.title }}</div>
        <div class="description">{{ truncate(link.description) }}</div>
      </div>
    </div>
  </div>
</template>

<script>
  const _ = require('lodash')

  export default {
    /**
     * @param heading String
     * @param links Array of article objects
     */
    props: ['heading', 'links'],
    methods: {
      truncate: (string) => {
        return _.truncate(string, {
          length: 70
        })
      },
      /**
       * Reloads the page with new article.
       *
       * @param id Numeric ID of article.
       */
      swap(id) {
        // Animation enables smooth data swapping.
        $('#app').fadeOut(300, () => {
          // Emits event to the Blog compoment.
          this.$emit('swap', id)

          // Changes URL for better user experience.
          history.replaceState({} , '', '/article/' + id)

          // Displays the page and enables code highlighting.
          $('#app').fadeIn(300, () => {
            Prism.highlightAll()
          })
        })
      }
    }
  }
</script>
