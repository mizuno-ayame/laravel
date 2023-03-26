<template>
    <div>
        <div>
        <div class="content">
        <div class="left">
            <div class="text-area">
                <h2 class="title">
                    <h1>スポーツクラブ案内</h1>
                </h2>
                <p class="copy">
                    スピードスケートのクラブチームです
                </p>
            </div>
        </div>
        <div class="right">
            <img src="images/clubtop.jpg" alt="">
        </div>
      </div>
        <main id="main">
            <section class="row-xs main-xs-center cross-xs-center">
                <h2>about us</h2>
                <p>クラブには、小学１年生から社会人の選手が所属しています。ショートトラックがメインのクラブチームになりますが、<br>冬はスピードスケートをやっている選手も多数います。初心者経験者問わずクラブ員を募集しています！</p>
            </section>
            <section class="row-xs main-xs-center cross-xs-center">
                <h2>体験してみませんか</h2>
                <p>クラブでは、体験入部を行っております。費用は一切かかりません！スケート靴も無料でお貸しします！<br>1回の体験で入部を決意できなければ2回目もお越しください!!</p>
            </section>
        </main>
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
  font-size: 3.200rem;
  font-weight: bold;
  margin-top: 130px;
}
.content .left .title .ja {
  display: block;
  font-size: 0.875rem;
}
.content .left .copy {
  font-size: 1.575rem;
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

section {
  padding: 40px 100px;
  text-align: center;
  width: 100%;
}

section:nth-child(2) {
  background: #ECF0F1;
}

.full-image-wrap {
  min-height: 100%;
  overflow: hidden;
  position: relative;
}

.full-image {
  height: auto;
  left: 0;
  min-height: 100%;
  min-width: 100%;
  position: absolute;
  top: 0;
  width: auto;
}


</style>
