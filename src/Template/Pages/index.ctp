<section id="home_carousel" class="bg-inverse p-y-0">
    <div class="owl-carousel owl-slide full-height">
        <div v-for="item in this.CarouselData" :key="item.id" class="carousel-item" :style="{ 'background-image': 'url(' + item.background + ')' }">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption">
                <div>
                    <h3 class="carousel-title">{{ item.title }}</h3>
                    <p>{{item.description}}</p>
                    <a class="btn btn-primary btn-rounded btn-shadow btn-lg" :href="item.button.url" data-lightbox role="button">{{ item.button.text }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Vue({
            el: '#home_carousel',
            data:{
                CarouselData : []
            },
            created() {
                this.getCarouselData();
            },
            methods: {
                getCarouselData() {
                    this.CarouselData.push({
                        id: 1,
                        title: "Opal Garden",
                        description: "Căn hộ cao cấp Phạm văn Đồng",
                        button: {
                            url: "https://www.youtube.com/watch?v=XYwStW8Sb9A",
                            text: "Dự án nổi bật"
                        },
                        background: "https://img.youtube.com/vi/XYwStW8Sb9A/maxresdefault.jpg"
                    });
                    this.CarouselData.push({
                        id: 2,
                        title: "Opal Riverside",
                        description: "Khu căn hộ resort cao cấp",
                        button: {
                            url: "https://www.youtube.com/watch?v=viN7D5tMTGM",
                            text: "Dự án nổi bật"
                        },
                        background: "https://img.youtube.com/vi/viN7D5tMTGM/maxresdefault.jpg"
                    });
                    this.CarouselData.push({
                        id: 3,
                        title: "Luxcity Office-Tel",
                        description: "Khu căn hộ Office-Tel cao cấp",
                        button: {
                            url: "https://www.youtube.com/watch?v=OKxlzO3A6Rg",
                            text: "Dự án nổi bật"
                        },
                        background: "https://img.youtube.com/vi/OKxlzO3A6Rg/maxresdefault.jpg"
                    });
                }
            },
            mounted() {
                $(function () {
                    "use strict";
                    // Full Width Carousel
                    $('.owl-slide').owlCarousel({
                        nav: true,
                        loop: true,
                        autoplay: true,
                        items: 1
                    });

                    // Recent Reviews
                    $('.owl-list').owlCarousel({
                        margin: 25,
                        nav: true,
                        dots: false,
                        responsive: {
                            0: {
                                items: 1
                            },
                            500: {
                                items: 2
                            },
                            701: {
                                items: 3
                            },
                            1000: {
                                items: 4
                            }
                        }
                    });

                    // lightbox
                    $('[data-lightbox]').lightbox();
                })
            }
        })

    }, false);
</script>