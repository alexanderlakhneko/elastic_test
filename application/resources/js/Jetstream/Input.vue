<template>
    <input :value="value" @input="$emit('input', $event.target.value)" class="form-input rounded-md shadow-sm"
           ref="input">
</template>

<script>
    export default {
        props: ['value'],

        methods: {
            focus() {
                this.$refs.input.focus()
            }
        }
    }
</script>

