<template>
  <div class="heel row">
    <div class="social col-md-6">
      <div class="link">
        <a href="http://github.com/bausano" target="_blank">
          <i class="fa fa-github fa-lg"></i>
          github.com/bausano
        </a>
      </div>
      <div class="link">
        <a href="https://twitter.com/BausanoMichael" target="_blank">
          <i class="fa fa-twitter fa-lg"></i>
          twitter.com/BausanoMichael
        </a>
      </div>
      <div class="link">
        <a href="https://www.linkedin.com/in/bausano/" target="_blank">
          <i class="fa fa-linkedin fa-lg"></i>
          linkedin.com/in/bausano/
        </a>
      </div>

      <div class="link" v-on:click="selectMe()">
        <i class="fa fa-envelope fa-lg"></i>
        <input class="select-me"
          value="bausanomichal@gmail.com"
          readonly/>
      </div>

      <div class="copyright">I ♥ memes &copy; Michael Bausano 2017</div>
    </div>
    <div class="disclaimer col-md-6">
      <div class="link">
        <a href="#" target="_blank">
          <i class="fa fa-sitemap fa-lg"></i>
          List all scrolls
        </a>
      </div>
      <p>
        This blog is both a personal project of
        <a href="http://bausano.me" target="_blank">mine</a>.
        You can always tell me how much it sucks at
        <strong>bausanomichal&commat;gmail.com</strong>.
      </p>
      <p>
        If you'd like to submit some code for desecration you can get
        in touch with me via any <strong>social media</strong>
        or <strong>email</strong>.
      </p>
      <p><a>#desecratemycode</a></p>
    </div>
  </div>
</template>

<script>
  export default {
    methods: {
      selectMe: () => {
        $('.select-me').select()
      }
    }
  }
</script>
