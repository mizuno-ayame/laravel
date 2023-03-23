<template>
	<div>
        <header class="column-xs main-xs-between cross-xs-center full-image-wrap">
            <img :src="'images/home.jpg'" alt="" width="1500px" height="800px">
        </header>

        <body>
            <div class="home_company">
            <div class="text">
                <h2 class="company">OUR SERVICES</h2>
                <p class="large_company">
                帝産ロッヂでは、オリンピックでメダルを取るために作られた「帝産アイススケートトレーニングセンター」を始め、その他スポーツ合宿にもご利用頂けます。まずはご相談ください。
                </p>
                <a class="btn" href="#">詳細はこちら</a>
            </div>
            <div class="img_company">
                <img src="images/20200702_171923.jpg" alt="">
            </div>
            </div>

            <div class="home_sport">
            <div class="text">
                <h2 class="sport">スポーツに特化した宿泊施設</h2>
                <p class="large_sport">
                東京から約2時間。そこには豊かな自然と、さまざまな可能性が待っています。八ヶ岳東麓・野辺山高原の大自然の中で、充実した各スポーツ施設をご活用ください。
                </p>
                <a class="btn" href="#">詳細はこちら</a>
            </div>
            <div class="img_sport">
                <img src="images/nobeyama.jpg" alt="">
            </div>
            </div>

            <div class="home_guide">
            <div class="text">
                <h2 class="guide">フロアガイド</h2>
                <p class="large_guide">
                最大収容数４８０名の宿泊が可能です。全館利用、またはフロアー貸切り等、人数に合わせて対応させていただきます。
                </p>
                <a class="btn" href="#">詳細はこちら</a>
            </div>
            <div class="img_guide">
                <img src="images/20200914_213703.jpg" alt="">
            </div>
            </div>

            <div class="home_access">
            <div class="text">
                <h2 class="access">交通案内</h2>
                <p class="large_access">
                    野辺山駅から徒歩で約10分。八ヶ岳の東麓、標高1350mの冷涼な野辺山高原に帝産ロッヂはあります。
                </p>
                <a class="btn" href="#">詳細はこちら</a>
            </div>
            <div class="img_access">
                <img src="images/train.jpg" alt="">
            </div>
            </div>

            <div class="home_club">
            <div class="text">
                <h2 class="club">スケートしませんか</h2>
                <p class="large_club">
                    帝産ロッヂではスケートクラブを運営しております。小学生からオリンピックを目指す社会人アスリートまで所属。<br>部員は随時募集中！！！
                </p>
                <a class="btn" href="#">詳細はこちら</a>
            </div>
            <div class="img_club">
                <img src="images/clubtop.jpg" alt="">
            </div>
            </div>
        </body>
    </div>

</template>

<style scoped>
body {
  background-color: #efeded;
  color: #35383a;
  font-family: 'Noto Serif JP', serif;
}
a {
  color: #35383a;
  text-decoration: none;
}
img {
  max-width: 100%;
}

.home_company {
  max-width: 1000px;
  height: 698px;
  margin: 100px auto;
  position: relative;
}

.text {
  max-width: 680px;
  background-color: #fff;
  padding: 84px 160px 84px 84px;
  position: absolute;
  left: 0;
  font-family: 'Heebo', sans-serif;
}
.text p {
  line-height: 1.8;
  margin-bottom: 35px;
}

.text .company {
  border-bottom: solid 1px #35383a;
  display: inline-block;
  font-size: 1.875rem;
  font-weight: normal;
  margin-bottom: 30px;
}
.text .large_company {
  font-size: 1.875rem;
}

.text .btn {
  display: inline-block;
  border: solid 1px #35383a;
  border-radius: 30px;
  padding: 16px 50px;
  transition: all 0.3s ease;
}
.text .btn:hover {
  background-color: #efeded;
}

.img_company {
  max-width: 400px;
  position: absolute;
  top: 140px;
  right: 20px;
}

.img img {
  vertical-align: bottom;
}
.home_sport {
  max-width: 1000px;
  height: 698px;
  margin: 100px auto;
  position: relative;
}
.text .sport {
  border-bottom: solid 1px #35383a;
  display: inline-block;
  font-size: 1.875rem;
  font-weight: normal;
  margin-bottom: 30px;
}
.text .large_sport {
  font-size: 1.875rem;
}
.img_sport {
  max-width: 400px;
  position: absolute;
  top: 140px;
  right: 20px;
}
.home_guide {
  max-width: 1000px;
  height: 698px;
  margin: 100px auto;
  position: relative;
}
.text .guide {
  border-bottom: solid 1px #35383a;
  display: inline-block;
  font-size: 1.875rem;
  font-weight: normal;
  margin-bottom: 30px;
}
.text .large_guide {
  font-size: 1.875rem;
}
.img_guide {
  max-width: 400px;
  position: absolute;
  top: 140px;
  right: 20px;
}
.home_access {
  max-width: 1000px;
  height: 698px;
  margin: 100px auto;
  position: relative;
}
.text .access {
  border-bottom: solid 1px #35383a;
  display: inline-block;
  font-size: 1.875rem;
  font-weight: normal;
  margin-bottom: 30px;
}
.text .large_access {
  font-size: 1.875rem;
}
.img_access {
  max-width: 400px;
  position: absolute;
  top: 140px;
  right: 20px;
}
.home_club {
  max-width: 1000px;
  height: 698px;
  margin: 100px auto;
  position: relative;
}
.text .club {
  border-bottom: solid 1px #35383a;
  display: inline-block;
  font-size: 1.875rem;
  font-weight: normal;
  margin-bottom: 30px;
}
.text .large_club {
  font-size: 1.875rem;
}
.img_club {
  max-width: 400px;
  position: absolute;
  top: 140px;
  right: 20px;
}
/* @media screen and (max-width: 1000px) {
  .content {
    height: auto;
    position: static;
    margin: 0;
  }
  .text {
    max-width: 100%;
    padding: 60px 20px;
    position: static;
  }
  .img {
    max-width: 100%;
    position: static;
  } */
/* } */
</style>
