<template>
	<div>
      <div class="content">
        <div class="left">
            <div class="text-area">
                <h2 class="title">
                    <h1>スポーツ合宿</h1>
                </h2>
                <p class="copy">
                    帝産ロッヂでは、年間を通じて国内外の健全なアスリート育成のための合宿プログラムを提供しております。八ヶ岳東麓・野辺山高原の大自然の中で、充実した各スポーツ施設をご活用ください。
                    オリンピックでメダルを取るために作られた「帝産アイススケートトレーニングセンター」を始め、十六間×１，十間×２の三つの弓道場、強い打ち込みにも安全なスプリングフロアを採用した剣道場、天然芝のランニングコース、トレーニングジム、一周200mダブルトラックローラースケート場等を備え、施設、環境、価格でトップを目指すアスリート達を応援します。
                </p>
            <a class="btn" href="#">宿泊予約はこちら</a>
            </div>
        </div>
        <div class="right">
            <img src="images/sport.jpg" alt="">
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
.btn {
  display: inline-block;
  border: solid 1px #35383a;
  border-radius: 30px;
  padding: 16px 50px;
  transition: all 0.3s ease;
}
.btn:hover {
  background-color: #efeded;
}

/*-------------------------------------------
SP
-------------------------------------------*/
@media screen and (max-width: 900px) {
 
  .pc {
    display: none;
  }
  .content {
    flex-direction: column;
  }
  .content .left {
    width: 100%;
    padding: 0 16px;
    margin-bottom: 20px;
  }

  .content .left::before {
    content: none;
  }
  .content .left .title .en {
    font-size: 2.25rem;
  }

  .content .left .text-area {
    position: static;
  }
  .content .right {
    width: 100%;
  }
}
</style>
