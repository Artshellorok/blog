<template>
    <div class='search-popover'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <h1 @click='hide'>dasdass</h1>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        },
        methods: {
            reveal() {
                const targets = this.$el;
                this.$anime({
                    targets,
                    translateY: [
                        { value: '-100%', duration: 0},
                        { value: '0', duration: 500}
                    ],
                    easing: 'easeInOutSine',
                });
            },
            hide() {
                const targets = this.$el;
                this.$anime({
                    targets,
                    translateY: [
                        { value: '0', duration: 0},
                        { value: '-100%', duration: 500}
                    ],
                    easing: 'easeInOutSine',
                });
            }
        }
    }
</script>
