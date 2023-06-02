function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 35.6585769, lng: 139.7454506}
      });

      // クリックイベントを追加
      map.addListener('click', function(e) {
        getClickLatLng(e.latLng, map);
      });
    }

    function getClickLatLng(lat_lng, map) {

      // 座標を表示
      document.getElementById('lat').textContent = lat_lng.lat();
      document.getElementById('lng').textContent = lat_lng.lng();

      // マーカーを設置
      var marker = new google.maps.Marker({
        position: lat_lng,
        map: map
      });

      // 座標の中心をずらす
      // http://syncer.jp/google-maps-javascript-api-matome/map/method/panTo/
      map.panTo(lat_lng);
    };
//   // welcome.blade.phpで描画領域を設定するときに、id=mapとしたため、その領域を取得し、mapに格納します。
//   map = document.getElementById("map");
//   // 東京タワーの緯度は35.6585769,経度は139.7454506と事前に調べておいた
//   let tokyoTower = {lat: 35.6585769, lng: 139.7454506};
//   // オプションを設定
//   opt = {
//       zoom: 13, //地図の縮尺を指定
//       center: tokyoTower, //センターを東京タワーに指定
//   };
//   // 地図のインスタンスを作成します。第一引数にはマップを描画する領域、第二引数にはオプションを指定
//   mapObj = new google.maps.Map(map, opt);
  
//   // 追加
//   marker = new google.maps.Marker({
//       // ピンを差す位置を決めます。
//       position: tokyoTower,
//   // ピンを差すマップを決めます。
//       map: mapObj,
//   // ホバーしたときに「tokyotower」と表示されるようにします。
//       title: 'tokyotower',