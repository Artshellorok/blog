<template>
    <div class="search-popover">
        <div class='modal-dialog'>
            <div class='modal-content'>
                 <form method="GET">
                    <div class="form-group my-0 py-5 px-5 ">
                        <div class="bg-light py-3 px-3 rounded">
                            <div class="">
                                <input type="text" class="form-control border-0 mb-3 mt-2 px-2 " id="exampleFormControlInput1" placeholder=" Логин">
                            </div>

                            <div>
                                <input type="password" class="form-control border-0 "  id="inputPassword" placeholder="Пароль">
                            </div>
                            <div class="row mt-3">
                                <div>
                                    <button type="button" class="btn btn-primary ml-2 mr-2" @click ='hide'>Отмена</button>
                                </div>
                                
                                <div>
                                    <button type="button" class="btn btn-primary">Продолжить</button>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>    
                 </form>
                <h1 @click='hide'>
                   
                </h1>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            reveal() {
                const targets = this.$el;
                let animate = this.$anime({
                    targets,
                    top: [
                        { value: '0', duration: 450}
                    ],
                    easing: 'easeInOutSine',
                });
                animate.complete = () => {
                    document.body.style.overflow = 'hidden';
                }
            },
            hide() {
                const targets = this.$el;
                document.body.style.overflow = 'visible';
                let animate = this.$anime({
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