mapboxgl.accessToken = 'pk.eyJ1IjoiaHV5bmh0aHV5IiwiYSI6ImNsZnRjcjYyczAwZXIzY215N3gwbzFzam4ifQ.Ieo0w9hgSLSF_Pt4s89EgQ';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v12', // style URL
            //center: [105.7664918,10.0279603], // starting position [lng, lat]
            center: [10.02218,105.77616],
            //pitch: 60,
//bearing: -60,
zoom: 10, hash:true
        });
const data = {
    "type": "FeatureCollection",
    "features": [
      {
        type: "Feature",
        geometry: {
          coordinates: [
            //105.773318,10.029433,
             //105.77061370522297,10.029943222691958,
             105.77060926275031,10.029942937096429,
            
          ],
          type:'Point'
        },
        properties: {
          'description': "Trường Đại Học Cần Thơ"
        }
      },
      {
        type: "Feature",
        geometry: {
          coordinates: [
            //105.773318,10.029433,
             //105.77061370522297,10.029943222691958,
             105.77760138238341,10.029116555621965,
            
          ],
          type: "Point"
        },
        properties: {
            name:'Đại Học Greenwich (Việt Nam) - Cơ sở Cần Thơ'
        }
      }
    ]
  }
map.on('load',(e)=>{
    map.addSource('university-src',{
        type:'geojson',
        data:data
    })
    map.addLayer({
        'id':'university-location',
        'type':'circle',
        'source':'university-src',
        'paint':{
            'circle-radius':10,
            'circle-color':'blue'
        }
    })
    map.addLayer({
      'id':'university-location',
        'type':'circle',
        'source':'university-src',
        'layout':{
          'text-field': ['get', 'description'],
'text-variable-anchor': ['top', 'bottom', 'left', 'right'],
'text-radial-offset': 0.5,
'text-justify': 'auto'
        },
        'paint':{
          'text-color':'#000ff'
        }
    })
})