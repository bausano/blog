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
    props: ['heading', 'links'],
    methods: {
      truncate: (string) => {
        return _.truncate(string, {
          length: 70
        })
      },
      swap(id) {
        $('#app').fadeOut(300, () => {
          this.$emit('swap', id)
          history.replaceState({} , '', '/article/' + id)
          $('#app').fadeIn(300, () => {
            Prism.highlightAll()
          })
        })
      }
    }
  }
</script>
