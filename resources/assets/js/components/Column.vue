<template>
  <div>
    <div class="links">
      <h2>{{ heading }}</h2>
      <div class="link" v-for="link in links">
        <div class="title">{{ link.title }}</div>
        <div class="description">{{ truncate(link.description) }}</div>
      </div>
    </div>
  </div>
</template>

<script>
  const _ = require('lodash')

  export default {
    props: ['heading'],
    data() {
      return {
        links: [
          {
            title: 'Dante\'s hell #3: Eval',
            description: 'Accusamus tempore magnam totam earum quis quisquam. Rerum laboriosam cum voluptatum voluptatibus, fugit asperiores!',
            id: '431'
          },
          {
            title: 'Dante\'s hell #3: Eval',
            description: 'Rerum laboriosam cum voluptatum voluptatibus, fugit asperiores!',
            id: '433'
          }
        ]
      }
    },

    methods: {
      truncate: (string) => {
        return _.truncate(string, {
          length: 70
        })
      }
    }
  }
</script>
