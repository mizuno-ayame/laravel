<template>
<div>
    <div class="content">
        <div class="left">
            <div class="text-area">
                <h2 class="title">
                    <h1>施設利用料</h1>
                </h2>
                <p class="copy">
                    大浴場、コインランドリーなどスポーツ合宿に欠かせない設備が整えられています。高原の得難い環境の中で高地トレーニングしませんか。
                    また、ロッヂより徒歩10分の所に南牧村村営施設があります。予約をしていただければ村民以外の方も御利用頂けます。予約の代行も承っておりますのでお申し付け下さい。
                </p>
            </div>
        </div>
        <div class="right">
            <img src="images/icerink.jpg" alt="">
        </div>
      </div>


<!-- テキストボックス -->

        <div class="Inner">
            <div class="Card">
                <div class="Card-Item">
                    <p class="Card-Item-Title1">宿泊情報</p>
                        <ul class="Card-Item-List1">
                            <li class="Card-Item-List-Text1">1泊1人あたり9,000円（食事付き）</li>
                            <li class="Card-Item-List-Text1">最大480名宿泊可能</li>
                            <li class="Card-Item-List-Text1">※100人を超える場合はご連絡ください</li>
                        </ul>
                </div>
                <div class="Card-Item">
                        <p class="Card-Item-Title2">アイスリンク</p>
                            <ul class="Card-Item-List2">
                                <li class="Card-Item-List-Text2">リンク使用料:1時間33,000円（税込）</li>
                                <li class="Card-Item-List-Text2">暖房費:1時間6,600円（税込）</li>
                            </ul>
                </div>
                <div class="Card-Item">
                        <p class="Card-Item-Title3">道場</p>
                            <ul class="Card-Item-List3">
                                <li class="Card-Item-List-Text3">洗心剣道場:1日10,500円</li>
                                <li class="Card-Item-List-Text3">洗心弓道場:利用料無料</li>
                            </ul>
                </div>
            </div>
        </div>




</div>
</template>

<style scoped>

html {
  font-size: 100%;
}
body {
  font-family: 'Heebo', sans-serif;
  letter-spacing: 0.2em;
}
img {
  max-width: 100%;
}

.content {
  display: flex;
  width: 100%;
  margin: 100px auto;
}
.content .left {
  width: 35%;
  position: relative;
}

.content .left::before {
  content: "";
  width: 163px;
  height: 100%;
  background: #fff;
  position: absolute;
  right: -81px;
  transform: skewX(-18deg);
}
.content .left .text-area {
  position: absolute;
  top: 60px;
  left: 60px;
}
.content .left .title {
  line-height: 1;
  margin-bottom: 56px;
}

.content .left .title h1 {
  display: block;
  font-size: 4.375rem;
  font-weight: bold;
  margin-bottom: 12px;
}
.content .left .title .ja {
  display: block;
  font-size: 0.875rem;
}
.content .left .copy {
  font-size: 0.875rem;
}
.content .right {
  width: 65%;
}

.content .right img {
  width: 100%;
  height: 500px;
  vertical-align: bottom;
  object-fit: cover;
}


/* テキストボックス */
.Inner {
  margin-left: auto;
  margin-right: auto;
  max-width: 1200px;
}

p{
  margin: 0;
  padding: 0;
}
li{
  list-style: none;
}

.Card {
  position: relative;
  margin-left: auto;
  margin-right: auto;
  padding: 72px 68px;
  display: flex;
  z-index: 2;
}

.Card-Item {
  width: calc((100% - 30px) / 3);
  height: 400px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background: #efeded;
  box-sizing: border-box;
  border-radius: 20px;
  border: solid 1px #35383a;

}

.Card-Item:nth-child(n+2) {
  margin-left: 30px;
}

.Card-Item-Title1, .Card-Item-Title2, .Card-Item-Title3 {
  text-align: center;
  color: #000000;
  font-weight: bold;
  font-size: 24px;
}

.Card-Item-List1 {
  margin-top: 40px;
}
.Card-Item-List2 {
  margin-top: 40px;
}
.Card-Item-List3 {
  margin-top: 40px;
}

.Card-Item-List-Text1 {
  position: relative;
  padding-left: 16px;
  line-height: 1.5em;
  color: #000000;
  font-size: 14px;
}
.Card-Item-List-Text2 {
  position: relative;
  padding-left: 16px;
  line-height: 1.5em;
  color: #000000;
  font-size: 14px;
}
.Card-Item-List-Text3 {
  position: relative;
  padding-left: 42px;
  line-height: 1.5em;
  color: #000000;
  font-size: 14px;
}
.Card-Item-List-Text1:nth-child(2) {
  margin: 30px 15px;
}
.Card-Item-List-Text2:nth-child(2) {
  margin: 30px 15px;
}
.Card-Item-List-Text3:nth-child(2) {
  margin: 30px 15px;
}
.Card-Item-List-Text1::before {
  position: absolute;
  top: 8px;
  left: 0;
  border-radius: 50%;
  margin: 0 16px 0 0;
  width: 4px;
  height: 4px;
  background: #000000;
  display: inline-block;
}


</style>
