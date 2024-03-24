<script setup>
import BaseHaeder from '../componens/BaseHaeder.vue';
import BaseFooter from '../componens/BaseFooter.vue';

import axios from "axios";
import { ref, onBeforeMount } from "vue";
import {useRoute, useRouter} from "vue-router";

const route = useRoute();
const router = useRouter();
const tweet = ref({id: '', titel: '', tweet_text: '', created_at : '' });


const getTweetById = async() => {
    let response = await axios.get(`/api/singletweets/${route.params.id}`);
    tweet.value = response.data;
}


const deleteTweet = async() => {
    try{
        let response = await axios.delete(`/api/singletweets/${route.params.id}`);
        router.push('/');
    
    } catch(error){
        console.log(error);
    }

    
}


onBeforeMount(() => {
    getTweetById();
})
    

</script>


<template>
    <header>
        <BaseHaeder />
    </header>

    <main>
        <p>TWEET VOM {{ tweet.created_at }}</p>

        <div :key="tweet.id">
            
            <p class="titel">{{ tweet.titel }}</p>

            <p class="text">{{ tweet.tweet_text }}</p>

            <a :href="'/updatetweet/' + tweet.id">
                <button class="black-bnt" style="margin-right: 10px;">Tweet Bearbeiten</button>
            </a>              
            
            <button class="red-bnt" @click="deleteTweet">Tweet Löschen</button>
            
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

.titel{
    font-size: 32px;
    font-weight: 700;
}

.text{
    font-size: 24px;
    font-weight: 400;
}

.black-bnt{
    background-color: #222222;
    border-radius: 8px;
    padding: 10px 15px 10px 15px;
    color: aliceblue;
}

.bnt-container1{
    margin: 0px 10px 0px 0x;
}

.red-bnt{
    background-color: #DF1313;
    border-radius: 8px;
    padding: 10px 15px 10px 15px;
    color: aliceblue;
}

</style>