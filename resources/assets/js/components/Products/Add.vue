<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Product Add Info</div>

                    <div class="card-body">
                        <form @submit.prevent="create">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" v-model="product.name" id="name" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="text" v-model="product.year" name="year" id="year" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input name="price" v-model="product.price" type="text" id="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Create Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                product: {}
            }
        },

        methods: {
            create() {
                let uri = "http://127.0.0.1:8000/products";
                axios.post(uri, this.product).then((response) => {
                    window.location.reload();
                })
            }
        }
    }
</script>
