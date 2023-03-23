<template>
    <div>

      <ul>
        <li class="pink">
          <h5>宿泊情報</h5>
          <p>1泊1人あたり9,000円（食事付き<br>最大480名宿泊可能<br>※100人を超える予約の場合は1度ご連絡ください</p>
        </li>
        <li class="yellow">
          <h5>アイスリンク</h5>
          <p>リンク使用料:1時間33,000円（税込）<br>暖房費:1時間6,600円（税込）</p>
        </li>
        <li class="bule">
          <h5>道場</h5>
          <p>洗心剣道場:1日10,500円<br>洗心弓道場:利用料無料</p>
        </li>
      </ul>


    </div>
</template>

<style scoped>
li {

display: block;
width: 320px;
height: 320px;
margin: 50px;
float: left;
line-height: 100px;
text-align: center;
font-weight: bold;
border-radius: 20px;
border: solid 1px #35383a;
}
/* line-height: 1.8; */
li h5{
  font-size: 22px;
}
li p{
  margin: 10px;
  font-size: 10px;
}
.pink {
background-color: #efeded;
}

.yellow {
background-color: #efeded;
}

.bule {
background-color: #efeded;
}
</style>
