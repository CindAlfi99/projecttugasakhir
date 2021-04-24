

let tombolCari = document.getElementById('tombol-cari');
let container = document.getElementById('container');
tombolCari.addEventListener('click', () => {

    //buat object ajax
    let keyword = document.getElementById('keyword');
    
        // if(keyword !== ''){
    let ajax = new XMLHttpRequest();
    // cek kesiapan ajax
    ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                container.innerHTML = ajax.responseText;

            }
        }
        ////ekseskusi ajax
    ajax.open('GET', 'ajax/resii.php?keyword=' + keyword.value, true);
    ajax.send();
    // }else{
    //     container.innerHTML = 'Masukkan Nomor resi anda!';
    // }


})
