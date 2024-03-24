
<script setup>
    import BaseHaeder from '../componens/BaseHaeder.vue';
    import BaseFooter from '../componens/BaseFooter.vue';

    import { ref, onMounted } from 'vue';
    import axios from "axios";
    import {useRouter} from "vue-router";

    const route = useRouter();

    const updatedTweet = ref({titel: '', tweet_text:''});
    // const getTweetById = async() => {
    // let response = await axios.get(`/api/singletweets/${route.params.id}`);
    // updatedTweet.value = response.data;
    // }
    // getTweetById();


    const loadTweet = async () => {
    const tweetId = route.currentRoute.value.params.id; 
  try {
        const response = await axios.get(`/api/singletweets/${tweetId}`); 
        updatedTweet.value = response.data; 
  } catch (error) {
      console.error('Fehler beim Laden des Tweets:', error);
  }
};

onMounted(() => {
  loadTweet();
});


    async function updateTweet(){
        const tweetId = route.currentRoute.value.params.id;
        try{
            const response = await axios.put(`/api/singletweets/${tweetId}`, updatedTweet.value); 
                route.push('/');
            }catch(error){
            console.log(error);
        }
        
    }
</script>

<template>
    <header>
       <BaseHaeder /> 
    </header>

    <main>
        
    <h1>Tweet Bearbeiten</h1>
    
    <div class="card">
    <div class="card-body">
        <form @submit.prevent="updateTweet">
            <div class="mb-3">
                <label for="titel" class="form-label">Titel:</label><br>
                <input type="text" class="form-control-1" id="titel" name="titel" v-model="updatedTweet.titel"><br>
            </div>

            <div class="mb-3">
                <label for="tweet_text" class="form-label">Tweet-Text:</label><br>
                <textarea class="form-control" id="tweet_text" name="tweet_text" v-model="updatedTweet.tweet_text" rows="4" cols="50"></textarea><br>
            </div>

            <div class="speichern">
                <input type="submit" class="btn btn-primary" value="Tweet aktualisieren">
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