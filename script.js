$(document).ready(function(){

  $.ajax({
    type: "GET", // HTTP通信の種類を指定
    url: "json.php", // リクエスト先のURL
    dataType: "json", // サーバに送信する値
  }).done(function(data, dataType){
    // 結果が0の場合
    if(data == null) alert('登録メニューはありません');
    
    // 返ってきたデータの表示
    var $content = $('#content');
    for(var i = 0; i<data.length; i++){
      $content.append("<p>" + data[i].m_cat + "：" + data[i].m_name + "：" + data[i].m_price + "円</p>");
    }
  }).fail(function(XMLHttpRequest, textStatus, errorThrown){
    alert('ERROR：'+ errorThrown);
  });  
});

// #add_menuがクリックされた時の処理
$('#add_menu').on('click',function(){
  // 確認メッセージを表示
  // OKならtrue,キャンセルならfalseが代入される
  var confirmResult = window.confirm("新規メニュー登録しますか？");

  if(confirmResult) {
      $.ajax({
          type: "POST", // 送信方法
          url: "exec_addmenu.php", // 送信先ファイル名
          datatype: "json", // 受け取りデータの種類
          // 送信データ
          data: {
              "m_cat" : $('#m_cat').val(), // #nameと#priceのvalueをセット
              "m_name" : $('#m_name').val(),
              "m_price" : $('#m_price').val()
          },
          // 通信が成功した時
          success: function(data) {
              $('#add_result').html("<p>" + data[0].m_name + "が" + data[0].m_price + "円のデータを登録しました。</p>");

              console.log("通信成功");
              console.log(data);

              // 一覧に追加したレコードを追記
              $.each(data, function(key, value){
                  $('#all_show_result').append("<tr><td>" + value.id + "</td><td>" + value.name + "</td><td>" + value.price + "</td></tr>");
              });
          },

          // 通信が失敗した時
          error: function(data) {
              console.log("通信失敗");
              console.log(data);
          }
      });
  }
  return false;
});
