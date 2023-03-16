<template>
    <div>
        <div id="content">
            <header class="column-xs main-xs-between cross-xs-center full-image-wrap">
            <h1>帝産クラブについて</h1>
            <img class="full-image" src="https://images.unsplash.com/photo-1458324124043-7803d4fec380?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=df280ed170d2a9e25506f2d3db42f4f9" alt="">
        </header>
        <main id="main">
            <section class="row-xs main-xs-center cross-xs-center">
                <h2>about us</h2>
                <p>帝産クラブには、小学１年生から社会人の選手が所属しています。ショートトラックがメインのクラブチームになりますが、冬はスピードスケートをやっている選手も多数います。<br>初心者経験者問わずクラブ員を募集しています！私たちとスケートしませんか？</p>
            </section>
            <section class="row-xs main-xs-center cross-xs-center">
                <h2>体験してみませんか</h2>
                <p>帝産クラブでは、体験入部を行っております。費用は一切かかりません！スケート靴も無料でお貸しします！<br>1回の体験では入部を決意できなければ2回目もお越しください!!</p>
            </section>
        </main>
        </div>
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
