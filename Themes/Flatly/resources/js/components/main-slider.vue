<template>
    <div class="main-slider-wrapper main-banner">
        <!-- swiper -->
        <swiper v-if="sliderLoaded" :options="swiperOption" @slideChange="slideChanged" ref="swiperTop">
            <swiper-slide :style="getSlideBackground(slide.img)" v-if="sliderLoaded" class="d-flex slide"
                          v-for="(slide, index) in slides" v-bind:key="index" v-bind:data-swiper-slide-index="index">
                <div class="absolute-text sr-bottom">
                    <h1>
                        {{slide.translations.title}}
                    </h1>
                    <div class="sub-title">
                        {{slide.translations.uri}}
                    </div>
                    <div class="caption">
                        <p class="ml-auto mr-auto">{{slide.translations.caption}}</p>
                    </div>
                </div>
            </swiper-slide>

            <div class="swiper-pagination" slot="pagination"></div>
            <div class="swiper-button-next swiper-button-white" slot="button-next"></div>
            <div class="swiper-button-prev swiper-button-white" slot="button-prev"></div>

        </swiper>
        <!-- <div class="container position-relative">
            <div class="pagination">
                <div class="navigate"> <span class="color"><span v-if="current<=9">0</span>{{current}}</span><span class="size"> / <span v-if="current<=9">0</span>{{total}}</span>
                </div>
                <div class="swiper-pagination swiper-pagination-bullets"></div>
            </div>
        </div> -->
    </div>
</template>

<script>
    import 'swiper/dist/css/swiper.css';
    import {
        swiper,
        swiperSlide
    } from "vue-awesome-swiper";

    export default {
        components: {
            swiper,
            swiperSlide
        },
        props: ['slides'],
        data() {
            return {
                sliderLoaded: false,
                swiperOption: {
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true
                    }

                },
                swiperGalleryThumbsUrl: [],
                total: "",
                current: ""
            };
        },
        methods: {
            getSlideBackground(img) {
                return `background-image: url(${img})`;
            },
            slideChanged() {
                this.current = this.$refs.swiperTop.swiper.activeIndex + 1;
            }
        },
        mounted() {
            this.sliderLoaded = true;
            console.log('slides', this.slides);


            // let slideThumbs = document.querySelectorAll("#mainSlideThumbs > img");
            // slideThumbs.forEach(val => {
            //     this.swiperGalleryThumbsUrl.push({src: val.src, uri: val.dataset.href});
            // });


        }
    };
</script>