<template>
  <div class="container">
       <ul>
            <Post v-for='post in posts'
            :key='post.id'
            :post='post'>
            
            </Post>
        </ul>

        <button v-if="currentPage > 1"  @click='pagination(currentPage - 1)'>Indietro</button>

        <button  v-if="currentPage < lastPage " @click='pagination(currentPage + 1)'>Avanti</button>

  </div>
</template>

<script>

import Post from '../components/Post.vue';

export default {
    name: 'Index',
    components: {Post,},
        data() {
            return {
            posts : [],
            currentPage : 1,
            lastPage : '' 
            };
        },
        methods: {
            pagination(page = 1) {
                window.axios.get("/api/post?page=" + page ).then((resp) => {
                    this.lastPage = resp.data.last_page;
                    this.posts = resp.data.data;
                    this.currentPage = resp.data.current_page;
                });
            },
        },

        mounted() {
            this.pagination();
        },
    
    

}
</script>

<style>

</style>