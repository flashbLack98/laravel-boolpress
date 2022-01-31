<template>
  <div class="container">
      
      <h3 class="py-5">{{ post.title }}</h3>
      <p> {{ post.description }} </p>
  </div>
</template>

<script>
export default {
    name : 'PostDetails',
    data(){
        return{
            post : [],
        }
    },
    methods : {
        getData(){
            window.axios.get('/api/post/' + this.$route.params.id).then((resp) => {
                 
                this.post = resp.data
            })
        }
    },
    mounted(){
        this.getData();
    }
}
</script>

<style>

</style>