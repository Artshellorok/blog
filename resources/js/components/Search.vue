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
                    top: [
                        { value: '0', duration: 450}
                    ],
                    easing: 'easeInOutSine',
                });
            },
            hide() {
                const targets = this.$el;
                this.$anime({
                    targets,
                    top: [
                        { value: '-100%', duration: 450}
                    ],
                    easing: 'easeInOutSine',
                });
            }
        }
    }
</script>
