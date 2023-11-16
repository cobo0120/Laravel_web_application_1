// ①送信先検索で非同期処理が開始
// 仕様：繰返し構文を使用してデータ数に応じた（例：５件ごとに）ページ番号を付与していく処理と初期に表示させるデータを取得ページ番号を取得していく処理
// ajax非同期通信データを取得するように設定する
$('.destination').on('click', ()=>{
  $.ajax({
    type: "GET",
    url:"../data_destination",//ルートのURLを入れる
    async: true, // 非同期通信フラグの指定
    dataType:'json',
    data: { page : 1 ,},//クエリパラメータの指定。サーバーに送信したいデータを指定？？
    
  })
  .done((data)=>{
    // データがダウンロードできたときの処理ページを作る処理を書くPageMaxを利用する
  // let createPage = $('.page-nate');
  // let pageMax = data.pageMax;
  //  for (let i = 1; i <= pageMax; i++) {
  //  ボタン作成
  // createPage.append ('<button type="button" class="btn btn-primary add" data-bs-dismiss="modal"></button>');
  // };
  // });


  // ページ数を取得
  let pageMax = data.pageMax;
  // .page-nateクラスの要素を取得
  let pageNateContainer = $('#page-nate').empty();
  // ページ数分のループを実行し、ボタンを追加
  for (let i = 1; i <= pageMax; i++) {
      // ボタンを作成
      let pageButton = $('<button>', {
          type: 'button',
          class: 'btn btn-primary add',
          text: `Page ${i}`
      });
      // ボタンをページに追加
      pageNateContainer.append(pageButton);
      // モーダルに対して必要な属性を設定
      pageNateContainer.attr({
        'data-backdrop': 'static',
        'data-bs-dismiss': 'null', 
});
};

  let tbody = $('#destination_body').empty()
   for(let i=0; i<data.users.length; i++){
  let user = data.users[i];
   tbody.append('<tr><td>'+user.id+'</td><td>'+user.name+'</td><td>'+user.department_id+'</td><td>'+user.email+'</td><td><button type="button" class="btn btn-secondary" onclick="choiceButton(\'\')" data-bs-dismiss="modal">選択</button></td></tr>');
  };
  })
  .fail((error)=>{
    // データがダウンロードできなかったときの処理
    alert('通信失敗');
  })
  // .always(()=>{
  // });
  });

  
  
  // ②検索ボタンが押されたら非同期通信が開始
  // 仕様：検索ボタンが押されたら、非同期処理が開始される
  // ajax非同期通信データを取得するように設定する
  $('').on('click', ()=>{
  $.ajax({
    type: "POST",
    dataType:'json',
    url:'data.json'})//階層場所の確認
  .done((data)=>{
    // データがダウンロードできたときの処理
  })
  .fail((error)=>{
    // データがダウンロードできなかったときの処理
  })
  .always(()=>{
  });
  });
  
  
  // ③ページのボタンが押されたら非同期処理を開始
  // 仕様：情報取得ボタンが押されたらデータ取得が開始されるがデータ数に応じたページボタンが作成される。制御構文で実行していく。
  // ajax非同期通信データを取得するように設定する
  // $('').on('click', ()=>{
  // $.ajax({
  //   type: "POST",
  //   dataType:'json',
  //   url:'data.json'})//階層場所の確認
  // .done((data)=>{
  //   // データがダウンロードできたときの処理
  // })
  // .fail((error)=>{
  //   // データがダウンロードできなかったときの処理
  // })
  // .always(()=>{
  // });
  // });