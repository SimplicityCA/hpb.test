<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Downloads</div>

                    <div class="panel-body">
                        ruta descargas
                        <pulse-loader :loading="true" color="red" size="50px"></pulse-loader>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('downloads mounted.')
        }
    }
</script>
