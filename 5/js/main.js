// 登録確認
function AddCheck(){
    let flg = confirm("登録しますか？");
    if(flg == false){
        event.preventDefault();
    }
}

//削除確認
function deleteCheck(){
    let flg = confirm("削除しますか？");
    if(flg == false){
        event.preventDefault();
    }
}