import Vue from 'vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import ScrollReveal from 'scrollreveal';
import * as VueGoogleMaps from 'vue2-google-maps';
import Files from './components/Files.vue';

Vue.use(ElementUI);
window.sr = ScrollReveal();
Vue.component('google-map', VueGoogleMaps.Map);
Vue.component('google-marker', VueGoogleMaps.Marker);
Vue.component('files', Files);

Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyAlu17PuCOggAb8q65PiJ2RhOkIwEzUxto',
        libraries: 'places',
    },
    // Demonstrating how we can customize the name of the components
    installComponents: false,
});

const app = new Vue({
    components:{Files},
    data() {
        return {
            place: '',
            mapCenter: {
                lat: 50.028190,
                lng: 21.993747
            },
            markers: [{
                position: {
                    lat: 50.026890,
                    lng: 21.985247
                }
            }],

            mapStyle: {styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#46bcec"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ]}
        };
    },
    mounted(){
        console.log('main::mounted()');
        sr.reveal('.sr-left', {
            origin: 'left',
            distance: '500px',
            duration: 1000,
        });
        sr.reveal('.sr-right', {
            origin: 'right',
            distance: '500px',
            duration: 1000,
        });
        sr.reveal('.sr-bottom', {
            origin: 'bottom',
            distance: '200px',
            duration: 1000,
        });
        sr.reveal('.sr-bottom-slow', {
            origin: 'bottom',
            distance: '100px',
            duration: 1000,
            delay: 1000,
        });
        sr.reveal('.sr-bottom-1', {
            origin: 'bottom',
            distance: '200px',
            duration: 1000,
            delay: 200,
        });        sr.reveal('.sr-bottom-2', {
            origin: 'bottom',
            distance: '200px',
            duration: 1000,
            delay: 400,
        });        sr.reveal('.sr-bottom-3', {
            origin: 'bottom',
            distance: '200px',
            duration: 1000,
            delay: 600,
        });        sr.reveal('.sr-bottom-4', {
            origin: 'bottom',
            distance: '200px',
            duration: 1000,
            delay: 800,
        });
    }
}).$mount('#mainapp-container');
