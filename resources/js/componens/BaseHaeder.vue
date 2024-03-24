<template>
    <haeder class="haed">
        <div class="head-line">
            <p class="mini">MINI-TWITTER</p>
            <p class="m-tweet">meine Tweets</p>
            <a href="/createtweet">
                <button>+ Tweet erstellen</button>
            </a> 
        </div>
    </haeder>
</template>


<style scoped>
*{
    font-family: "Inter", sans-serif;
}
.haed{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}

.head-line {
    background-color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: space-between;   
}

.mini{
    margin-right: auto;
    font-size: 24px;
    font-weight: 900;
    padding: 0px 0px 0px 150px;
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