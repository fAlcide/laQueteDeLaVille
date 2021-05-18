function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: new google.maps.LatLng(50.276660426917786 , 3.9838389473130937),
    zoom: 12
  });
  var infoWindow = new google.maps.InfoWindow;

    // Change this depending on the name of your PHP or XML file
    downloadUrl('./api/lieux.php', function(data) {
      var json  = JSON.parse(data.responseText);

      json.forEach(element => {

        var point = new google.maps.LatLng(element.lat,element.lon);
        var infowincontent = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = element.nom
        infowincontent.appendChild(strong);
        infowincontent.appendChild(document.createElement('br'));
        infowincontent.appendChild(document.createElement('hr'));
        var text = document.createElement('text');
        text.textContent = element.description;
        infowincontent.appendChild(text);

        var marker = new google.maps.Marker({
          map: map,
          position: point
        });

        switch (element.type) {
          case '1':
              marker.setIcon("./img/fast-food.png");
            break;
          case '2':
            marker.setIcon("./img/alcohol.png");
            break;
          case '3':
            marker.setIcon("./img/mortarboard.png");
            break;
          default:
            break;
        }
        
        marker.addListener('click', function() {
          infoWindow.setContent(infowincontent);
          infoWindow.open(map, marker);
        });
      });

    });
  }

function downloadUrl(url, callback) {
  var request = window.ActiveXObject ?
      new ActiveXObject('Microsoft.XMLHTTP') :
      new XMLHttpRequest;

  request.onreadystatechange = function() {
    if (request.readyState == 4) {
      request.onreadystatechange = doNothing;
      callback(request, request.status);
    }
  };

  request.open('GET', url, true);
  request.send(null);
}

function doNothing() {}


function envoyerFormulaireAjoutLieu(){

  $data = $('#form-lieu').serialize()

  $.ajax({
    type: "POST",
    url: "/cityQuest/inc/ajouterLieu.inc.php",
    data: $data,
    dataType: 'html',
    error: function(xhr, status, error){
         var errorMessage = xhr.status + ': ' + xhr.statusText
         alert('Error - ' + errorMessage);
     },
     success: function(data){
       console.log(data);
     }
  });
}