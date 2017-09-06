<template>
  <div class="post">
    <div class="content">
      <h1>{{ article.title }}</h1>
      <h3>{{ article.subtitle }}</h3>
      <div class="info row">
        <div class="time col-xs-6 col-md-6">
          <i class="fa fa-calendar"></i>
          {{ article.time }}
        </div>
        <div class="author col-xs-6 col-md-6">
          <i class="fa fa-user"></i>
          {{ article.author }}
        </div>
        <div class="description col-md-12">> {{ article.description }}</div>
      </div>
      <div class="body">
        <h1>Incidunt aut natus</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio rerum cupiditate sunt voluptatem laborum tenetur, harum assumenda. Tempore distinctio vitae natus aspernatur in, iste! Ipsum quia illum ipsam ratione rerum.</p>
        <h3>Subtitle</h3>
        <p>Eum consectetur nulla <strong>accusamus</strong> ad vel. Dolorum natus aperiam exercitationem, animi nemo ab impedit nobis sequi repellendus, qui ipsam asperiores molestias quae eum accusamus minus recusandae explicabo porro quia officia!</p>
        <p>Incidunt aut natus ad asperiores, cum atque voluptas saepe autem hic nesciunt similique in minima et iure voluptates facere laudantium unde repellat id beatae eius, repellendus, nemo veritatis laborum! Quia.</p>

        <div class="comment">This is a comment for following code:</div>
        <pre class="line-numbers">
          <code class="language-js">
            /**
             * First we will load all of this project's JavaScript dependencies which
             * includes Vue and other libraries. It is a great starting point when
             * building robust, powerful web applications using Vue and Laravel.
             */

            require('./bootstrap')

            window.Vue = require('vue')

            /**
             * Next, we will create a fresh Vue application instance and attach it to
             * the page. Then, you may begin adding components to this application
             * or customize the JavaScript scaffolding to fit your unique needs.
             */

            Vue.component('column', require('./components/Column.vue'))
            Vue.component('post', require('./components/Post.vue'))

            const app = new Vue({
                el: '#app'
            })

          </code>
        </pre>

        <h1>Incidunt aut natus</h1>
        <p>Laborum veniam repudiandae, magni et numquam voluptates architecto error perspiciatis ullam est, ipsa odio illo ratione minus quo sequi nobis delectus animi recusandae alias repellat quas suscipit. Eligendi provident, dolor?</p>
        <p>Adipisci similique voluptate inventore officiis dolorum, corporis aliquam minus. Corrupti nulla repudiandae dolores dignissimos accusamus fugit culpa odio excepturi. Aliquam velit fugiat necessitatibus reiciendis reprehenderit placeat, magnam numquam consequatur iure.</p>

        <ul>
          <li>First</li>
          <li>Second</li>
          <li>Third</li>
        </ul>

        <p>
          <a href="#">This is a link.</a>
        </p>
      </div>

      <heel></heel>
    </div>
  </div>
</template>

<script>
  import Heel from '../components/Heel.vue'

  export default {
    components: {Heel},
    data() {
      return {
        article: {
          title: 'Dante\'s hell, second level',
          subtitle: 'Welcome to the series of doom. My minions are ready!',
          description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero deleniti tempora labore, ipsum impedit sunt eum voluptatibus blanditiis voluptas saepe beatae modi expedita laudantium laboriosam dolores tenetur nesciunt itaque. Est.',
          time: 'Wed Sep 06 2017 00:49:44',
          author: 'Michael Bausano',
        }
      }
    }
  }
</script>
