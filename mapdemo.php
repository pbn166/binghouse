<!DOCTYPE html>
<?php
  include './config/config.php';
  $tinh="select * from tinh";
  $tinhsql = mysqli_query($conn,$tinh);
  $huyen="select * from huyen";
  $huyensql = mysqli_query($conn,$huyen);
  session_start();
  $map= "select * from truong";
  $mapsql=mysqli_query($conn,$map);
  

 
  
  

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <style>
      * {
    margin: 0;
    padding: 0;
}

.wrapper {
    width: 100%;
    min-height: 100vh;
    position: relative;
}

#map {
    width: 100%;
    height: 100vh;
}

.left-panel {
    position: absolute;
    width: 300px;
    height: calc(100vh - 2rem);
    left: 1rem;
    top: 1rem;
    z-index: 10;
    background-color: #fff;
    transition: 1s ease;
}

.right-panel {
    position: absolute;
    width: 300px;
    max-height: calc(100vh - 2rem);
    right: 1rem;
    top: 1rem;
    z-index: 10;
    background-color: #fff;
    height: 200px;
}

.btn-open-leftpanel {
    width: 40px;
    height: 40px;
    background-color: #fff;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
    position: absolute;
    z-index: 9;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
}
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="left-panel">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Chức năng<i class="fas fa-arrow-left" style="float: right;" onclick="closeLeftPanel()"></i></h5>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             Danh sách
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush" id="lstUnv">
                                     <li class ="list-group-item">And a fifth</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-open-leftpanel" onclick="openLeftPanel()">
            <i class="fas fa-arrow-right"></i>
        </div>
        <div id='map'></div>
        
        <!-- <button style="position: fixed;top:10px;left: 10px;" onclick="offEvent()">  Clear </button> -->
    </div>
</body>
<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiaHV5bmh0aHV5IiwiYSI6ImNsZnRjcjYyczAwZXIzY215N3gwbzFzam4ifQ.Ieo0w9hgSLSF_Pt4s89EgQ';
  const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [105.77577,10.03825], // starting position [lng, lat]
    zoom: 6.09, // starting zoom
    hash: 'map'
});
    function createIcon(icon) {
    var el = document.createElement('div');
    el.style.backgroundImage = 'url(' + icon.url + ')';
    el.style.width = icon.size[0] + 'px';
    el.style.height = icon.size[1] + 'px';
    el.style.backgroundSize = '100%';
    el.style.backgroundRepeat = 'no-repeat';
    el.style.backgroundPosition = 'center';
    el.style.borderRadius = '50%';
    return el;
}
    <?php
  foreach ($mapsql as $key => $value){?>
  
 
    
  var name = <?php echo json_encode($value['T_TENTRUONG']); ?>;
  //alert(name);
  var popupHtml = '<p>'+'<strong>' + name +'</strong>'+ '</p>';
  var popup = new mapboxgl.Popup({
    offset: 25
  }).setHTML(popupHtml);
  var icon = {
    url: './icon/<?php echo $value['T_ICON'] ;?>', // đường dẫn đến file hình ảnh icon
    size: [40,40], // kích thước của icon
    anchor: [20,20], // vị trí neo của icon, tính từ góc trái trên cùng
};
    
var marker = new mapboxgl.Marker({
    element: createIcon(icon), // tạo element mới chứa hình ảnh icon
})
    .setLngLat([<?php echo $value['LONG_TRUONG'] ?>,<?php echo $value['LAT_TRUONG'] ?>])
    .setPopup(popup) // đặt vị trí địa lý cho đối tượng Marker
    .addTo(map);

  

<?php } ?>




listener = {}
listener['evtClickMap'] = evtClickMap.bind(this);

function evtClickMap(e) {
    console.log(e);
}

map.on('click', listener['evtClickMap'])

function offEvent() {
    map.off('click', listener['evtClickMap'])
}

function getDataToHtml(data, elmParentId, fieldVisible) {
  var content = "";
  var elm = document.getElementById(elmParentId);
  if (elm) {
    <?php foreach ($mapsql as $key => $value){?>
      var name = <?php echo json_encode($value['T_TENTRUONG']); ?>;
      var lat = <?php echo json_encode($value['LAT_TRUONG']); ?>;
      var lng = <?php echo json_encode($value['LONG_TRUONG']); ?>;
      content += '<li class="list-group-item" onclick="flyToSchool(' + lat + ', ' + lng + ')">' + name + '</li>';
    <?php } ?>
    elm.innerHTML = content;
  }
}




getDataToHtml(null, 'lstUnv', 'T_TENTRUONG');
function flyToSchool(lat, lng) {
  map.flyTo({
    center: [lng, lat],
    zoom: 16,
    essential: true
  });
}

// Lặp qua các phần tử li trong danh sách và thêm sự kiện click
function closeLeftPanel() {
    var elm = document.querySelector('.wrapper .left-panel');
    if (elm) {
        elm.style.left = '-100%';
    }
    document.querySelector('.wrapper .btn-open-leftpanel').style.display = 'flex';
}

function openLeftPanel() {
    var elm = document.querySelector('.wrapper .left-panel');
    if (elm) {
        elm.style.left = '1rem';
    }
    document.querySelector('.wrapper .btn-open-leftpanel').style.display = 'none';
}

function closeRightPanel() {
    var elm = document.querySelector('.wrapper .right-panel');
    if (elm) {
        elm.style.display = 'none';
    }
}

function openRightPanel() {
    var elm = document.querySelector('.wrapper .right-panel');
    if (elm) {
        elm.style.display = 'block';
    }
}


</script>

</html>