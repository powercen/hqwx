<template>
    <div class="weui-tab">
        <div class="weui-tabbar">
            <router-link :to="{name: 'home'}" class="weui-tabbar__item">
                <div class="weui-tabbar__icon">
                    <img src="/icon/training.png" alt="">
                </div>
                <p class="weui-tabbar__label">培训首页</p>
            </router-link>
            <router-link :to="{name: 'interaction'}" class="weui-tabbar__item">
                <span class="weui-badge" style="position: absolute;top: -.4em;right: 1em;">8</span>
                <div class="weui-tabbar__icon">
                    <img src="/icon/training.png" alt="">
                </div>
                <p class="weui-tabbar__label">华庆互动</p>
            </router-link>
            <router-link :to="{name: 'punchcard'}" class="weui-tabbar__item">
                <div class="weui-tabbar__icon">
                    <img src="/icon/training.png" alt="">
                </div>
                <p class="weui-tabbar__label">考勤成绩</p>
            </router-link>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
