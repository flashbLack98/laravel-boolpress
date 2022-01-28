<template>
  <div class="container">
 
    <ul class="list-group py-3">
        <router-link to='' v-for="category in categories" :key="category.id" class="list-group-item ">
            {{ category.name }}
        </router-link>
    </ul>

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
            categories: [],
            currentPage : 1,
            lastPage : '' 
            };
        },
        methods: {
            getPosts(page = 1) {
                window.axios.get("/api/post?page=" + page ).then((resp) => {
                    this.lastPage = resp.data.last_page;
                    this.posts = resp.data.data;
                    this.currentPage = resp.data.current_page;
                });
            },
            getCategories(){
                window.axios.get('/api/categories').then((resp) => {
                    this.categories = resp.data;
                    console.log(this.$route);
                });
            }
        },

        mounted() {
            this.getPosts();
            this.getCategories();
        },
    
    

}
</script>

<style>

</style>