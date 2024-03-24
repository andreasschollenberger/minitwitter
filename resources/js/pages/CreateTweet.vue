<script setup>
import BaseHaeder from '../componens/BaseHaeder.vue'; 
import BaseFooter from '../componens/BaseFooter.vue';

import { useRouter } from 'vue-router'; 
import { ref } from 'vue'; 
import axios from 'axios';  

const router = useRouter();  
const newTweet = ref({   titel: '',   tweet_text: '' });  
const createTweet = async () => {   
    try { console.log({ titel: newTweet.value.titel, tweet_text: newTweet.value.tweet_text });    
        let response = await axios.post('/api/createtweet', { titel: newTweet.value.titel, tweet_text: newTweet.value.tweet_text });  
        router.push('/');         
} catch (error) {     
    console.error('Fehler beim Erstellen des Tweets:', error);   } };
    

</script>

<template>
    <header>
        <BaseHaeder />
    </header>

    <main>
        
    <h1>Tweet erstellen</h1>
    <p>was willst du mitteilen?</p>
    
    <div class="card">
    <div class="card-body">
      <form @submit.prevent="createTweet">
        <div class="mb-3">
          <label for="title" class="form-label">Titel:</label>
          <input type="text" class="form-control-1" id="titel" name="titel" v-model="newTweet.titel">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Inhalt:</label>
          <textarea class="form-control" id="content" name="tweet_text" v-model="newTweet.tweet_text" rows="4" cols="50"></textarea>
        </div>
        <div class="speichern">
            <button type="submit" class="btn btn-primary">Tweet speichern</button>
        </div>
      </form>
    </div>
  </div>
        
    </main>
    <footer>

        <BaseFooter />
    </footer>
</template>


<style scoped>
*{
    font-family: "Inter", sans-serif;
}
main {
    display: grid;
    justify-content: center;
}

h1{
    font-size: 32px;
    font-weight: 700;
    margin: 40px 0px 0px 0px;
}

p{
    font-size: 24px;
    font-weight: 400;
    color: #666666;
    margin: 0px 0px 30px 0px;
}

.card {
  width: 768px;
  height: 444px;
  background-color: #ffffff;
  border-radius: 4px;
  border: 1px solid #f1f1f1; 
}

.card-body {
  padding: 20px;
}

.mb-3{
    padding: 30px 0px 10px 25px;
}


.form-label {
  font-size: 24px;  
  font-weight: 400;
}

.form-control-1 {
  width: 681px;
  height: 56px;
  border-radius: 4px;
  border: 1px solid #999999;
  font-size: 24px;
}

.form-control {
  width: 681px;
  height: 152px;
  border-radius: 4px;
  border: 1px solid #999999;
  font-size: 24px;
}

.btn-primary {
    border-radius: 8px;
    padding: 10px 15px 10px 15px;
    background-color: #1D9BF0;
    border: none;
    font-size: 16px;
    color: aliceblue;
}

.speichern{
    padding: 13px 0px 0px 25px;
}

</style>