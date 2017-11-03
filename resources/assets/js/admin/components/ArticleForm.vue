<template>
  <div>
    <!-- Heading. -->
    <div class="panel-body">
      <input type="text" name="title" required
        placeholder="Title" class="form-control" v-model="article.title">
    </div>

    <!-- Subtitle. -->
    <div class="panel-body">
      <input type="text" name="subtitle" required
        placeholder="Subtitle" class="form-control" v-model="article.subtitle">
    </div>

    <!-- Description. -->
    <div class="panel-body">
      <textarea name="description"
        placeholder="Description"
        class="form-control" required
        v-model="article.description"></textarea>
    </div>

    <!-- Tags. -->
    <div class="panel-body" v-if="raw === undefined">
      <input type="text" name="tags"
        placeholder="Tags separated by space"
        class="form-control"
        v-model="article.tags">
    </div>

    <!-- Body. -->
    <div class="panel-body">
      <a href="#" v-on:click="togglePreview()" v-if="!preview">Preview</a>
      <a href="#" v-on:click="togglePreview()" v-if="preview">HTML</a>
      <textarea name="body"
        placeholder="HTML body"
        class="form-control"
        rows="15" required
        v-model="article.body"
        v-if="!preview"></textarea>

      <!-- Article preview. -->
      <div class="content">
        <div class="body" v-html="article.body" v-if="preview">

        </div>
      </div>

      <!-- Helper HTMl. -->
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
          tags: '',
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
      /**
       * Code preview mode toggle.
       */
      togglePreview() {
        this.preview = !this.preview
        setTimeout(() => {
          Prism.highlightAll()
        }, 100)
      }
    }
  }
</script>
