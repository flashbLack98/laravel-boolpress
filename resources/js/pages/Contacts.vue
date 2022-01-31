<template>
  <div class="container">

      <h1>Contattaci</h1>

      <form @submit.prevent='onSubmit' v-if='!formSubmitted'>

         <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" name='name' id="name" v-model='form.name'>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name='email' id="email" v-model='form.email'>
        </div> 


        <div class="form-floating">
          <label for="message">Messaggio</label>
          <textarea class="form-control" placeholder="Scrivi il tuo messaggio qui..." id="message"  v-model='form.message' style="height: 100px"></textarea>
        </div>

      <button class="btn btn-success my-3" >Invia</button>        
      </form>

      <div class="alert alert-success" v-if='formSubmitted'> la sua mail è stata inviata </div>

  </div>
</template>

<script>
export default {

  data(){
    return{

      formSubmitted : false,

      form : {
        name : '',
        email : '',
        message : '',
      },
    };
  },

  methods : {
    onSubmit(){
      window.axios.post('/api/contacts', this.form).then((resp) => {

        this.formSubmitted = true
      });

    },
  },

};
</script>

<style>

</style>