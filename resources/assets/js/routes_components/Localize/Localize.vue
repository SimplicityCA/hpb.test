<template>
    <div class="localize-page container-fluid">
      <div class="row">
        <div id='maps'>
          <h2>Encuentra Nuestros Productos en la Tienda de Repuestos Más Cercana</h2>
            <div id="search-container">
              <div class="map-container col-sm-offset-1 col-sm-10">
                <gmap-map
                  :center="center"
                  :zoom="12"
                  style="width:100%; min-height:500px"
                >
                  <gmap-info-window :options="infoOptions" :position="infoWindowPos" :opened="infoWinOpen" @closeclick="infoWinOpen=false">
                  <span v-html="infoContent"></span>
                  </gmap-info-window>
                  <gmap-marker
                    :position="marker.position"
                    :clickable="false"
                    :draggable="false"
                  ></gmap-marker>
                  <gmap-marker
                    v-bind:key="i"
                    v-for="(location,i) in locations"
                    :position="location.position"
                    icon="/img/local.png"
                    :clickable="true"
                    @click="toggleInfoWindow(location,i)"
                  >
                  </gmap-marker>
                </gmap-map>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
module.exports = {
  name: 'localize',
  mounted: function () {
      var self = this;
      axios.post('/api/localize/center',{ center:this.center}).then(response => {
        if(response.data){
          console.log('primera entrada');
          this.locations=response.data;
        }
      });
      axios.get('/types_localize').then(response => {
        if(response.data){
          this.types=response.data;
        }
      });
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function (position) {
              let pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude
              };
              self.center.lat = pos.lat;
              self.center.lng = pos.lng;
              self.marker['position'] = {lat: pos.lat, lng: pos.lng};
              self.geocodeLatLng(new google.maps.Geocoder, pos, google.maps.InfoWindow);
              axios.post('/api/localize/center', { center:self.center}).then(response => {
                if(response.data){
                  self.locations=response.data;
                }
              });
          });
      }
  },
  data () {
    var self=this;
    return {
      openerText:'search',
      isOpen: false,
      center: {lat: -0.180653, lng: -78.467834},
      marker: {
        position: {lat: -0.180653, lng: -78.467834}
      },
      types:{},
      types_selected:[],
      infoContent: '',
      locations:{

      },
      infoWinOpen: false,
      currentMidx: null,
      infoOptions: {
        pixelOffset: {
          width: 0,
          height: -35
        }
      },
      infoWindowPos: {
        lat: 0,
        lng: 0
      },
      latLng: {},
      place: null

    }
  },
  methods: {
      setDescription(description){
          this.description = description
      },
      setPlace(place){
        this.center.lat = place.geometry.location.lat();
        this.center.lng = place.geometry.location.lng();
        this.marker.position.lat = place.geometry.location.lat();
        this.marker.position.lng = place.geometry.location.lng();
      },
      setType(){
        axios.post('/api//localize/center',{ center:this.center, types:this.types_selected}).then(response => {
          if(response.data){
              this.locations=response.data;
            }
        });
      },
      getPosition(position){
        console.log(position);
      },
      updateChild(object, field, {lat, lng}) {
      if (field === 'position') {
        object.position = {
          lat: lat(),
          lng: lng(),
        };
      }
      },
      geocodeLatLng(geocoder, map, infowindow){
          geocoder.geocode({'location':this.center}, function(results, status){
              // console.log(results, status); 
          });
      },
      toggleInfoWindow: function(marker, idx) {
        address = marker.local.address;
        this.infoWindowPos = marker.position;
        this.infoContent =
        '<div style="width:190px; margin-left:2px;">'
        +'<p><strong>nombre</strong>:'
        +marker.local.name+'</p>'+
        '<p><strong>Dirección</strong>:'
        +marker.local.address+'</p>';
        if(marker.local.phone){
        this.infoContent+= '<p><strong>Teléfono</strong>: '
          +marker.local.phone+'</p>'; 
        }
        if(marker.local.phone){
           this.infoContent+= '<p><strong>Celular</strong>: '
          +marker.local.cellphone+'</p>'; 
        }
         this.infoContent+= '<strong><a href="https://google.com/maps/?q='+marker.position.lat+','+marker.position.lng+'">Ver en Google Maps</a></strong>'
          +'</div>';

        //check if its the same marker that was selected if yes toggle
        if (this.currentMidx == idx) {
          this.infoWinOpen = !this.infoWinOpen;
        }
        //if different marker set infowindow to open and reset current marker index
        else {
          this.infoWinOpen = true;
          this.currentMidx = idx;

        }
      },
    open() {
      this.openerText = 'close';
      this.isOpen = true;
      this.$refs.toolbar.scrollTop = 0;
    },
    close() {
      this.openerText = 'search';
      this.isOpen = false;
    },
    toggle() {
      if (this.isOpen) {
        this.close();
      } else {
        this.open();
      }
    }

  }
}
</script>
