<template>
    <div class="weui-grids">
        <router-link class="weui-grid" v-for="item in items"
                     :to="{name: 'trainingList', params: {id: item.tagid} }"
                     :key="item.tagid">
            <div class="weui-grid__icon">
                <img src="/icon/training.png">
            </div>
            <p class="weui-grid__label">
                厂部培训
            </p>
        </router-link>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                items: [{title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png', tagid: '1'},
                    {title: '666', icon: 'test.png', tagid: '2'},
                    {title: '666', icon: 'test.png', tagid: '3'},
                    {title: '666', icon: 'test.png', tagid: '4'},
                    {title: '666', icon: 'test.png', tagid: '5'},
                    {title: '666', icon: 'test.png', tagid: '6'},
                    {title: '666', icon: 'test.png', tagid: '7'},
                    {title: '666', icon: 'test.png', tagid: '8'},
                    {title: '666', icon: 'test.png', tagid: '9'},
                    {title: '666', icon: 'test.png', tagid: '10'},
                    {title: '666', icon: 'test.png', tagid: '11'},
                    {title: '666', icon: 'test.png', tagid: '12'},
                    {title: '666', icon: 'test.png', tagid: '13'},
                    {title: '666', icon: 'test.png', tagid: '14'},
                    {title: '666', icon: 'test.png', tagid: '15'},
                    {title: '666', icon: 'test.png', tagid: '16'},
                    {title: '666', icon: 'test.png', tagid: '17'},
                    {title: '666', icon: 'test.png', tagid: '18'}
                ]
            }
        }
    }
</script>
