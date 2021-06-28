$(document).ready(function(){

  $.ajax({
    type: "POST", // HTTP通信の種類を指定
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
