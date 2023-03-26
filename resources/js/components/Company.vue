<template>
<div>
    <div>
        <div class="content">
        <div class="left">
            <div class="text-area">
                <h2 class="title">
                    <h1>施設概要</h1>
                </h2>
            </div>
        </div>
        <div class="right">
            <img src="images/teisanp.png" alt="">
        </div>
      </div>

        <main id="main">
            <section class="row-xs main-xs-center cross-xs-center">
                <h2>about us</h2>
                <p>ロッヂは、１９８１年に総合スポーツ合宿施設として誕生しました。最大収容人数４８０名。野辺山高原は八ヶ岳東麓、標高１３５０ｍの冷涼な地です。八ヶ岳中信高原国立公園内に位置し、<br>８月の平均気温は１８度。広大な空と大地、澄んだ空気。アイススケートリンク、弓道場、剣道場、飯盒炊さん場やキャンプファイヤー場などを完備。<br>スポーツ合宿、移動教室など専門のスタッフが計画などをお手伝いします。お気軽にご相談下さい。</p>
            </section>
            <section class="row-xs main-xs-center cross-xs-center">
                <h2>教育旅行</h2>
                <p>ロッヂでは十数年来、学年全体の皆様と一校一館を基本として受け入れをして参りました。<br>分宿では決して味わえない一同にしての食事、普段は体験することのない大部屋での宿泊など、<br>オーソドックスな事が一番大切と信じています。<br>一日を通して先生と友と一緒に行動し、大切な時間を有効に組み立てる、そのお手伝いをしていくことが帝産ロッヂの使命です。</p>
            </section>
            <section class="row-xs main-xs-center cross-xs-center">
                <h2>スポーツ合宿</h2>
                <p>ロッヂでは、年間を通じて国内外の健全なアスリート育成のための合宿プログラムを提供しております。八ヶ岳東麓・野辺山高原の大自然の中で、充実した各スポーツ施設をご活用ください。<br>オリンピックでメダルを取るために作られた「帝産アイススケートトレーニングセンター」を始め、十六間×1,十間×2の三つの弓道場、強い打ち込みにも安全なスプリングフロアを採用した剣道場、<br>天然芝のランニングコース、トレーニングジム、一周200mダブルトラックローラースケート場等を備え、施設、環境、価格でトップを目指すアスリート達を応援します。</p>
            </section>
        </main>
        </div>
        <!-- <img :src="'images/20200702_171923.jpg'" alt=""> -->
    </div>

</template>


<style scoped>
    /*
Flexbox grid: https://github.com/anacoelhovicente/tangerine
*/

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
  margin-top: 130px;
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



section {
  padding: 40px 100px;
  text-align: center;
  width: 100%;
}

section:nth-child(2) {
  background: #ECF0F1;
}




</style>
