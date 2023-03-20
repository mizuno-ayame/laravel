<template>
	<div>
        <div id="content">
            <header class="column-xs main-xs-between cross-xs-center full-image-wrap">
                <img class="homeimage" :src="'/home.jpg'" alt="">
            </header>
        </div>
        <main>
            <div class="home_company">
                    <div class="company_text">
                        <p>帝産ロッヂでは、オリンピックでメダルを取るために作られた「帝産アイススケートトレーニングセンター」を始め、その他スポーツ合宿にもご利用頂けます。まずはご相談ください。</p>
                    </div>
                <div class="company_img">
                    <img src="20200702_171923">
                </div>
            </div>
            <div class="home_sport">
                <div class="sport_text">
                    <p>東京から約2時間。そこには豊かな自然と、さまざまな可能性が待っています。</p>
                </div>
                <div class="sport_img">
                    <img src="20200702_171923">
                </div>
            </div>
            <div class="home_guide">
                <div class="guide_text">
                    <p>フロアガイド<br>最大収容数４８０名の宿泊が可能です</p>
                </div>
                <div class="guide_img">
                    <img src="20200702_171923">
                </div>
            </div>
            <div class="home_access">
                <div class="access_text">
                    <p>野辺山駅から徒歩で約10分。八ヶ岳の東麓、標高1350mの冷涼な野辺山高原に帝産ロッヂはあります</p>
                </div>
                <div class="access_img">
                    <img src="/train.jpg">
                </div>
            </div>
            <div class="home_club">
                <div class="access_text">
                    <p>帝産ロッヂではスケートクラブを運営しております。小学生からオリンピックを目指す社会人アスリートまで所属。<br>部員は随時募集中！！！</p>
                </div>
                <div class="access_img">
                    <img src="/clubtop.jpg">
                </div>
            </div>

        </main>
    </div>

</template>

<style scoped>
.homeimage{
    box-shadow: 0 0 5px #333;
}
.main img{
  display: block;
  transition-duration: 0.3s;
}
.main img{
  transform: scale(1.6);
  transition-duration: 0.3s;
}

.home_compan {
  display: flex; /*横並び*/
}
.company_text{
    margin: 0 0 0 20px;
    padding: 0;
}
.company_img{
  width: 640px; /*画像サイズ指定*/
  margin: 0;
  padding: 0;
  overflow: hidden;
  position: relative;
}
</style>
