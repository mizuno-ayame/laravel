<template>

    <div>
        <div id="content">
            <header class="column-xs main-xs-between cross-xs-center full-image-wrap">
                <img :src="'images/teisanp.png'" alt="" width="1500px" height="800px">
        </header>
        <main id="main">
            <section class="row-xs main-xs-center cross-xs-center">
                <h2>about us</h2>
                <p>帝産ロッヂは、１９８１年に総合スポーツ合宿施設として誕生しました。最大収容人数４８０名。野辺山高原は八ヶ岳東麓、標高１３５０ｍの冷涼な地です。八ヶ岳中信高原国立公園内に位置し、<br>８月の平均気温は１８度。広大な空と大地、澄んだ空気。アイススケートリンク、弓道場、剣道場、飯盒炊さん場やキャンプファイヤー場などを完備。<br>スポーツ合宿、移動教室など専門のスタッフが計画などをお手伝いします。お気軽にご相談下さい。</p>
            </section>
            <section class="row-xs main-xs-center cross-xs-center">
                <h2>教育旅行</h2>
                <p>帝産ロッヂでは十数年来、学年全体の皆様と一校一館を基本として受け入れをして参りました。<br>分宿では決して味わえない一同にしての食事、普段は体験することのない大部屋での宿泊など、<br>オーソドックスな事が一番大切と信じています。<br>一日を通して先生と友と一緒に行動し、大切な時間を有効に組み立てる、そのお手伝いをしていくことが帝産ロッヂの使命です。</p>
            </section>
            <section class="row-xs main-xs-center cross-xs-center">
                <h2>スポーツ合宿</h2>
                <p>帝産ロッヂでは、年間を通じて国内外の健全なアスリート育成のための合宿プログラムを提供しております。八ヶ岳東麓・野辺山高原の大自然の中で、充実した各スポーツ施設をご活用ください。<br>オリンピックでメダルを取るために作られた「帝産アイススケートトレーニングセンター」を始め、十六間×1,十間×2の三つの弓道場、強い打ち込みにも安全なスプリングフロアを採用した剣道場、<br>天然芝のランニングコース、トレーニングジム、一周200mダブルトラックローラースケート場等を備え、施設、環境、価格でトップを目指すアスリート達を応援します。</p>
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
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale
}

html,
body {
  color: #444;
  font: 400 14px/1.5 Montserrat, sans-serif;
}

a,
a:hover,
a:focus {
  color: inherit;
  outline: none;
  text-decoration: none;
}

h3 {
  font-size: 1.5rem;
  margin: 0;
}

header {
  color: #FFF;
  height: 100vh;
  text-align: center;
}

header h1 {
  font-size: 3rem;
  line-height: 1.2;
  margin: 0;
  padding: 0;
  flex-grow: 1;
  z-index: 1
}

.down-arr {
  font-size: 2rem;
  padding: 0 20px 20px 20px;
  z-index: 1
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
