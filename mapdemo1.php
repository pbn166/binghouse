<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mapbox GL JS Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.5.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.5.0/mapbox-gl.css" rel="stylesheet">
    <style>
        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
    $features = [
        [
            'type' => 'Feature',
            'properties' => [
                'name' => 'Location 1',
                'description' => 'This is location 1'
            ],
            'geometry' => [
                'type' => 'Point',
                'coordinates' => [105.801944, 21.034444]
            ]
        ],
        [
            'type' => 'Feature',
            'properties' => [
                'name' => 'Location 2',
                'description' => 'This is location 2'
            ],
            'geometry' => [
                'type' => 'Point',
                'coordinates' => [105.784167, 20.972222]
            ]
        ]
    ];
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <h3>Locations</h3>
                <ul class="list-group" id="list">
                    <?php foreach ($features as $feature): ?>
                        <li class="list-group-item" data-coordinates="<?= implode(',', $feature['geometry']['coordinates']) ?>">
                            <?= $feature['properties']['name'] ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-9">
                <div id="map"></div>
            </div>
        </div>
    </div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiaHV5bmh0aHV5IiwiYSI6ImNsZnRjcjYyczAwZXIzY215N3gwbzFzam4ifQ.Ieo0w9hgSLSF_Pt4s89EgQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [105.801944, 21.034444],
            zoom: 12
        });

        // Add markers and popups for each feature
       
               
            // Add markers and popups for each feature
            <?php foreach ($features as $feature): ?>
                var marker<?= $feature['properties']['name'] ?> = new mapboxgl.Marker()
                    .setLngLat([<?= implode(',', $feature['geometry']['coordinates']) ?>])
                    .addTo(map);

                var popup<?= $feature['properties']['name'] ?> = new mapboxgl.Popup({
                    offset: 25
                })
                    .setHTML('<h3>' + '<?= $feature['properties']['name'] ?>' + '</h3><p>' + '<?= $feature['properties']['description'] ?>' + '</p>');

                marker<?= $feature['properties']['name'] ?>.setPopup(popup<?= $feature['properties']['name'] ?>);

                // When a list item is clicked, pan to the corresponding marker and open its popup
                document.querySelector('[data-coordinates="<?= implode(',', $feature['geometry']['coordinates']) ?>"]').addEventListener('click', function () {
                    map.flyTo({
                        center: [<?= implode(',', $feature['geometry']['coordinates']) ?>],
                        zoom: 16
                    });

                    marker<?= $feature['properties']['name'] ?>.togglePopup();
                });
            <?php endforeach; ?>
        </script>
    </body>
</html>
