<template>
    <!--BLOG AREA-->
    <section class="blog-area blog-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeIn" v-for="servicemodel in ServiceModels" :key="servicemodel.id">
                        <div class="blog-image">
                            <div class="post-heading">
                                <h3>
                                    <router-link :to="`singleservicemodel/${servicemodel.id}`">
                                        {{servicemodel.title}}
                                    </router-link>
                                </h3>
                            </div>
                            <img :src="servicemodelLoadImage(servicemodel.image)"  alt="single service model">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-ship"></i></a></div>

                            <div class="post-date">
                                <a href="#">
                                    <i class="fa fa-calendar"></i>{{servicemodel.updated_at | dateformat}}
                                </a>
                            </div>
                            <p>{{servicemodel.details}}</p>
                            <!-- <p></p> -->
                            <router-link :to="`singleservicemodel/${servicemodel.id}`" class="read-more">Read More</router-link>
                        </div>
                    </div>
                </div>
                <!-- serviceside bar -->
                <ServiceSidebar/>
                <!-- service sidebar -->
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->
</template>

<script>
import ServiceSidebar from "./ServiceSidebar.vue"

    export default {
        name:"SingleService",
        components:{
            ServiceSidebar
        },
        mounted() {
            this.$store.dispatch('ServiceModels');//a// service models per the current service id
        },
        conmputed:{
            ServiceModels(){
                return this.$store.getters.ServiceModels
            },

        },
        methods:{
            servicemodelLoadImage(servicemodel_image){
                if(servicemodel_image){
                    return "/assets/organisation/img/website/services/servicemodels"+servicemodel_image;
                }else{
                    return "/assets/organisation/img/website/empty.png";
                }
            },
            getAllServiceModels(){
                      if(this.$route.params.id !=null){
                          this.$store.dispatch('getServiceModelByServiceID', this.$route.params.id);
                      }else{
                          this.$store.dispatch('ServiceModels'); //a// service models per the current service id
                      }
            },
        },
        watch:{
            $route(to, from){
                this.getAllServiceModels(); //the method to servicemodels by service id
           }
        }
    }
</script>
