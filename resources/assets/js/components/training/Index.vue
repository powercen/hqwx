<template>
    <div class="weui-grids">
        <a class="weui-grid" v-for="item in items">
            <div class="weui-grid__icon">
                <img src="/icon/training.png">
            </div>
            <p class="weui-grid__label">
                厂部培训
            </p>
        </a>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                items: [{title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'},
                    {title: '666', icon: 'test.png'}
                ]
            }
        }
    }
</script>
