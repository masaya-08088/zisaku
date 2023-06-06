const inputAddress = document.getElementById("add");
// const inputAddress = $('#add').val(); ////bladeのinputタグに表示させてDBに登録
// console.log($('#add').val());
        const button = document.getElementById("button");
        const lat = document.getElementById("latitude");
        const lng = document.getElementById("longitude");
        button.onclick = initMap;
        const createAddress = document.getElementById("address"); //住所を入力するフォームのid
        function initMap() {
          // console.log(inputAddress.value);
            // 地図を表示させる -------------------------------------------------------------------------
            maps = document.getElementById("map"); //bladeの地図を表示させたいidを取得
            // 東京タワーの緯度は35.6585769,経度は139.7454506と事前に調べておいた
            let tokyoTower = {lat: 35.6585769, lng: 139.7454506}; //センターにしたい場所の緯度、経度を取得
            // オプションを設定
            opt = {
                zoom: 17, //地図の縮尺を指定
                center: tokyoTower, //センターを東京タワーに指定
            };
            // 地図のインスタンスを作成します。第一引数にはマップを描画する領域、第二引数にはオプションを指定
            map = new google.maps.Map(maps, opt); //これでマップの表示ができる
            // ----------------------------------------------------------------------------------------
            // 住所で緯度、経度を取得する
        const geocoder = new google.maps.Geocoder(); // Googlgのサーバーと通信するためのインスタンスを生成
        geocoder.geocode(
            {
            address: inputAddress.value, // フォームに入力された値を渡す
            region: "jp",
            },
            function (result, status) {
            // ↑の検索結果に対しての処理
            if (status == google.maps.GeocoderStatus.OK) {
                const location = result[0].geometry.location;
                const marker = new google.maps.Marker({
                position: location, // 検索結果の緯度・経度を設定
                map: map, // マップの描画設定
                title: location.toString(), // アイコンにカーソルが重なった際に表示されるテキスト
                draggable: false, // trueにすることでアイコンを自由に移動できる
                });
                map.setCenter(location); // マップ中央にアイコンが表示される
                document.getElementById("lat").textContent = location.lat(); //マーカーの場所
                document.getElementById("lng").textContent = location.lng(); //マーカーの場所
                $('#lat').val(document.getElementById("lat").textContent); //bladeのinputタグに表示させてDBに登録
                $('#lng').val(document.getElementById("lng").textContent); //bladeのinputタグに表示させてDBに登録
                $('#address').val(inputAddress.value); ////bladeのinputタグに表示させてDBに登録
        } else if (status == google.maps.GeocoderStatus.ZERO_RESULTS) { //住所検索して見つからなかったらアラート表示
            alert("住所が見つかりませんでした。");
        }else if (status == google.maps.GeocoderStatus.ERROR) {
            alert("サーバ接続に失敗しました。");
        // }
        // else if (status == google.maps.GeocoderStatus.INVALID_REQUEST) {
        //     alert("リクエストが無効でした。");
        } else if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
            alert("リクエストの制限回数を超えました。");
        } else if (status == google.maps.GeocoderStatus.REQUEST_DENIED) {
            alert("サービスが使えない状態でした。");
        } else if (status == google.maps.GeocoderStatus.UNKNOWN_ERROR) {
            alert("原因不明のエラーが発生しました。");
        }
        if (status !== google.maps.GeocoderStatus.OK) {
            $('#address').val(''); //住所が無かった時にbladeのinputタグに表示させてたのを消す
            $('#lat').val(''); //住所が無かった時にbladeのinputタグに表示させてたのを消す
            $('#lng').val(''); //住所が無かった時にbladeのinputタグに表示させてたのを消す
        }
            }
        );
    }