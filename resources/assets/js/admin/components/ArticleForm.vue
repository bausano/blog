<template>
  <div>
    <div class="panel-body">
      <input type="text" name="title"
        placeholder="Title" class="form-control" v-model="article.title">
    </div>
    <div class="panel-body">
      <input type="text" name="subtitle"
        placeholder="Subtitle" class="form-control" v-model="article.subtitle">
    </div>
    <div class="panel-body">
      <textarea name="description"
        placeholder="Description"
        class="form-control"
        v-model="article.description"></textarea>
    </div>
    <div class="panel-body">
      <a href="#" v-on:click="togglePreview()" v-if="!preview">Preview</a>
      <a href="#" v-on:click="togglePreview()" v-if="preview">HTML</a>
      <textarea name="body"
        placeholder="HTML body"
        class="form-control"
        rows="15"
        v-model="article.body"
        v-if="!preview"></textarea>
      <div class="content">
        <div class="body" v-html="article.body" v-if="preview">

        </div>
      </div>
      <div>
        <pre>
          <code class="language-html">
            &lt;i class=&quot;fa fa-icon&quot;&gt;&lt;/i&gt;
            &lt;div class=&quot;comment&quot;&gt;Comment&lt;/div&gt;
            &lt;pre class=&quot;line-numbers&quot;&gt;
              &lt;code class=&quot;language-js&quot;&gt;
                // Your code
              &lt;/code&gt;
            &lt;/pre&gt;</code>
        </pre>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['raw'],
    data() {
      return {
        preview: false,
        article: {
          title: '',
          subtitle: '',
          description: '',
          body: ''
        }
      }
    },
    mounted() {
      if (this.raw != undefined) {
        this.article = JSON.parse(this.raw)
      }
    },
    methods: {
      togglePreview() {
        this.preview = !this.preview
        setTimeout(() => {
          Prism.highlightAll()
        }, 100)
      }
    },
    computed: {
    }
  }
</script>
