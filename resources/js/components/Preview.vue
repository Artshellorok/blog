<template>
    <div>
        {{tags}}
    </div>
</template>

<script>
    export default {
        methods: {
        },
        data() { 
            return {
                tags: '{!! $view_name !!s}'
            }
        }
    }
</script>
