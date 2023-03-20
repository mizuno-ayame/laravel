 <template>
        <div class="d-flex justify-content-around align-items-center">
        <li class="nav-item mr-1">
        <router-link v-bind:to="{name: 'company'}">会社概要</router-link>
        </li>
        <li class="nav-item mr-1">
        <router-link v-bind:to="{name: 'sport'}">スポーツ合宿</router-link>
        </li>
        <li class="nav-item mr-1">
        <router-link v-bind:to="{name: 'guide'}">フロアガイド</router-link>
        </li>
        <li class="nav-item mr-1">
        <router-link v-bind:to="{name: 'access'}">アクセス</router-link>
        </li>
        <li class="nav-item mr-1">
        <router-link v-bind:to="{name: 'clubteam'}">クラブ紹介</router-link>
        </li>
        </div>
 </template>

 <script>
     export default {}
 </script>
