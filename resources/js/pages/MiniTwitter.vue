<script setup>
import BaseHaeder from '../componens/BaseHaeder.vue';
import BaseFooter from '../componens/BaseFooter.vue';

import axios from "axios";
import { ref } from "vue";

const response = ref();

    const getAllTweets = async () => {
        try {
            let apiResponse = await axios.get("/api/tweets");
            response.value = apiResponse.data;
        } catch (error) {
            // Do something with the error
            console.log(error);
        }
    };

    getAllTweets();


</script>


<template>
    <header>
        <BaseHaeder />
    </header>

    <main>
        <p class="feed">FEED VON</p>
        <h1>Andreas Schollenberger</h1>

        
        <div class="tweet-card" v-for="tweet in response" :key="tweet.id">
    <div class="tweet-content">
        <p class="time">{{ tweet.created_at }}</p>
        <p class="titel">{{ tweet.titel }}</p>
        <p class="text">{{ tweet.tweet_text }}</p>
    </div>
    <div class="tweet-footer">
        <a :href="'/singletweet/' + tweet.id">
            <button>Tweet ansehen</button>
        </a>
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


.feed{
    position: relative;
    top: 22px;
    margin: 0px;
    font-weight: 700;
    color: rgba(136, 136, 136, 1);
}

h1{
    margin-bottom: 50px;
}

.tweet-card{
    border: 1px solid #f1f1f1;
    border-radius: 8px;
    padding: 10px;
    margin-bottom: 20px;
    background-color: #ffffff;
    max-width: 768px;
}
.tweet-content {
    margin-bottom: 10px;
}

.time{
    display: flex;
    justify-content: flex-end;
}

.titel{
    font-size: 18px;
    font-weight: 700;
    margin: 21.78px 0px 0px 21.78px ;
}

.text{
    right: 40px;
    font-size: 18px;
    font-weight: 400;
    margin: 9px 0px 0px 21.78px ;
}

.tweet-footer {
    text-align: left;
    margin: 21.78px 0px 21.78px 21.78px ;
}

button {
    color: aliceblue;
    background-color: black;
    border-radius: 9px;
    padding: 10px 15px 10px 15px;
}

</style>