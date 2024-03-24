<template>
    <div class="head-line">
            <p class="mini">MINI-TWITTER</p>
            <p class="m-tweet">meine Tweets</p>
            <a href="/createtweet">
                <button>+ Tweet erstellen</button>
            </a> 
    </div>
</template>


<style scoped>
*{
    font-family: "Inter", sans-serif;
}

.head-line {
    background-color: #ffffff;
    display: flex;
    align-items: center;   
}

.mini{
    margin-right: auto;
    font-size: 24px;
    font-weight: 900;
}

.m-tweet{
    margin-right: 20px;
    font-size: 18px;
    font-weight: 400;
}

button {
    background-color: rgba(29, 155, 240, 1);
    padding: 10px 15px 10px 15px;
    border-radius: 50px;
    border: none;
    font-size: 16px;
    color: aliceblue;
}


</style>