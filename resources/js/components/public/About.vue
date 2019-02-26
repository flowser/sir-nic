<template>
    <!--ABOUT DETAILS AREA-->
    <section class="about-details-area section-padding wow fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>{{Organisation.about.title}}</h2>
                        <h4>{{Organisation.about.subtitle}}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <ul class="about-details-menu">
                        <li class="active"><a data-toggle="tab" href="#company">Company Profile</a></li>
                        <li><a data-toggle="tab" href="#team">Team Member</a></li>
                        <li><a data-toggle="tab" href="#services">Services</a></li>
                        <li><a data-toggle="tab" href="#features">Features</a></li>
                        <li><a data-toggle="tab" href="#adverts">Adverts</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="tab-content about-details-content">
                        <div id="company" class="about-company tab-pane fade in active">
                            <div class="row">
                                <div class="card col-md-6 col-lg-6 col-sm-12 col-xs-12 border-0">
                                    <div class="card-body">
                                        <p>{{Organisation.about.why_choose_us}}</p>
                                    </div>
                                </div>
                                <div class="card col-md-6 col-lg-6 col-sm-12 col-xs-12 border-0" style="border:opx">
                                    <div class="card-body">
                                        <img :src="aboutLoadFrontImage(Organisation.about.front_image)"  alt="history">
                                        <!-- load -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-4 col-lg-4 col-sm-12 col-xs-12 border-0">
                                    <div class="card-body">
                                        <h3>Who We Are</h3>
                                        <p>{{Organisation.about.who_we_are}}</p>
                                    </div>
                                </div>
                                <div class="card col-md-4 col-lg-4 col-sm-12 col-xs-12 border-0">
                                    <div class="card-body">
                                        <img :src="organisationLoadLogo(Organisation.logo)" alt="history">
                                    </div>
                                </div>
                                <div class="card col-md-4 col-lg-4 col-sm-12 col-xs-12 border-0">
                                    <div class="card-body">
                                        <h3>What We Do</h3>
                                        <p>{{Organisation.about.what_we_do}}</p>
                                        <!-- <a href="#" class="read-more">Learn More</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="team" class="team-list tab-pane fade">
                            <div class="row ">
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 d-flex" v-for="director in Organisation.organisationdirectors" :key="director.id">
                                    <div class="card flex-fill" >
                                         <img class="card-img-top " :src="directorLoadPassPhoto(director.pivot.photo)" alt="member">
                                        <div class="card-body">
                                            <h3>{{director.full_name}}</h3>
                                            <p>{{director.position_name}}</p>
                                                <ul class="social-bookmark">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 d-flex" v-for="admin in Organisation.organisationadmins" :key="admin.id">
                                    <div class="card flex-fill" >
                                           <img class="card-img-top " :src="adminLoadPassPhoto(admin.pivot.photo)" alt="member">
                                       <div class="card-body">
                                            <h3>{{admin.full_name}}</h3>
                                            <p>{{admin.position_name}}</p>

                                            <ul class="social-bookmark">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 d-flex" v-for="employee in Organisation.organisationemployees" :key="employee.id">
                                    <div class="card flex-fill" >
                                            <img class="card-img-top " :src="employeeLoadPassPhoto(employee.pivot.photo)" alt="member">
                                        <div class="card-body">
                                            <h3>{{employee.full_name}}</h3>
                                            <p>{{employee.position_name}}</p>
                                            <ul class="social-bookmark">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="adverts" class="support-content tab-pane fade">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="single-promo">
                                        <div class="promo-icon"><i class="fa fa-anchor"></i></div>
                                        <div class="promo-details">
                                            <h3>Our Location</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="single-promo">
                                        <div class="promo-icon"><i class="fa fa-newspaper-o"></i></div>
                                        <div class="promo-details">
                                            <h3>Latest News</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="single-promo">
                                        <div class="promo-icon"><i class="fa fa-umbrella"></i></div>
                                        <div class="promo-details">
                                            <h3>24/7 Support</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="single-promo">
                                        <div class="promo-icon"><i class="fa fa-bicycle"></i></div>
                                        <div class="promo-details">
                                            <h3>Fast Delevery</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="promo-img">
                                        <img src="" alt="promo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="features" class="support-content tab-pane fade" v-for="feature in Organisation.features" :key="feature.id">
                            <div class="row">
                                <div class="col-md-4 d-flex">
                                    <div class="card flex-fill" >
                                        <img class="card-img-top" :src="featureLoadImage(feature.image)">
                                        <div class="card-body">
                                            <h3>{{feature.title}}</h3>
                                            <p >{{feature.details}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="services" class="support-content tab-pane fade" v-for="service in Organisation.services" :key="service.id">
                            <div class="row">
                                <div class="col-md-4 d-flex">
                                    <div class="card flex-fill" >
                                        <img class="card-img-top" :src="serviceLoadImage(service.service_image)">
                                        <div class="card-body">
                                            <h2>{{service.title}}</h2>
                                            <h3>{{service.servce_title}}</h3>
                                            <p >{{service.service_details}}</p>
                                            <router-link  :to="`/servicemodels/${service.id}`"
                                                class="pull-right blue"> View More Service Models
                                                <i class="icon-angle-right">
                                            </i></router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT DETAILS AREA END-->
</template>


<script>
    export default {
        mounted() {
            this.loadOrganisation();
            this.loadAbout();
            this.loadService();
            this.loadFeatures();
            this.loadServiceModel();
            this.loadAdverts();
        },
        computed:{
            Organisation(){
               return this.$store.getters.Organisation
            },
            Director(){
                console.log(this.$store.getters.director)
               return this.$store.getters.director//reminder to updater index
            },
            Admin(){
                console.log(this.$store.getters.Admin)
               return this.$store.getters.Admin//reminder to updater index
            },
            Employee(){
                console.log(this.$store.getters.Employee)
               return this.$store.getters.Employee//reminder to updater index
            },
            About(){
               return this.$store.getters.About
            },
            Service(){
               return this.$store.getters.Service
            },
            Features(){
               return this.$store.getters.Features
            },
            ServiceModel(){
               return this.$store.getters.ServiceModel
            },
            Adverts(){
               return this.$store.getters.Adverts
            },
        },
        methods:{
            loadOrganisation(){
                return this.$store.dispatch( "organisation")//get all from organisation. organisation linked to user
            },
            loadAbout(){
                return this.$store.dispatch( "about")
            },
            loadAdverts(){
                return this.$store.dispatch( "adverts")
            },
            loadService(){
                return this.$store.dispatch( "service")
            },
            loadFeatures(){
                return this.$store.dispatch( "features")
            },
            loadServiceModel(){
                return this.$store.dispatch( "servicemodel")
            },
            aboutLoadFrontImage(front_image_id){
                if(front_image_id){
                    return "/assets/organisation/img/website/frontimage/"+front_image_id;
                }else{
                    return "/assets/organisation/img/website/empty.png";
                }
            },
            organisationLoadLogo(logo_id){
                 if(logo_id){
                    return "assets/organisation/img/logo/"+logo_id;
                }else{
                    return "/assets/organisation/img/website/empty.png";
                }
            },
            directorLoadPassPhoto(directorpivot_photo){
                if(directorpivot_photo){
                    return "/assets/organisation/img/directors/passports/"+directorpivot_photo;
                }else{
                    return "/assets/organisation/img/website/empty.png";
                }
            },
            adminLoadPassPhoto(adminpivot_photo){
                if(adminpivot_photo){
                    return "/assets/organisation/img/admins/passports/"+adminpivot_photo;
                }else{
                    return "/assets/organisation/img/website/empty.png";
                }
            },
            employeeLoadPassPhoto(employeepivot_photo){
                if(employeepivot_photo){
                    return "/assets/organisation/img/employees/passports/"+employeepivot_photo;
                }else{
                    return "/assets/organisation/img/website/empty.png";
                }
            },
            featureLoadImage(image_id){
                if(image_id){
                    return "/assets/organisation/img/website/features/"+image_id;
                }else{
                    return "/assets/organisation/img/website/empty.png";
                }
            },
            serviceLoadImage(image_id){
                if(image_id){
                    return "/assets/organisation/img/website/services/"+image_id;
                }else{
                    return "/assets/organisation/img/website/empty.png";
                }
            },

        }
    }
</script>
