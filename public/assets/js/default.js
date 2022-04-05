function jam() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('waktu').innerHTML =  h + ":" + m + ":" + s;
    setTimeout(jam, 1000);
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}

function showprofilemenu() {
    let pm = document.getElementById('profilemenu');
    let nt = document.getElementById('notifikasi');
    if(pm.className === "absolute z-[999] bg-white rounded-md w-[200px] right-0 shadow-md m-2 py-4"){
        pm.setAttribute('class', 'display-none w-0 h-0 overflow-hidden');
    }else{
        nt.setAttribute('class', 'display-none w-0 h-0 overflow-hidden');
        pm.setAttribute('class', 'absolute z-[999] bg-white rounded-md w-[200px] right-0 shadow-md m-2 py-4');
    }
    return false;
}

function shownotifikasi() {
    let pm = document.getElementById('profilemenu');
    let nt = document.getElementById('notifikasi');
    if(nt.className === "absolute bg-white w-[250px] top-[60px] right-0 bottom-0 z-[99]"){
        nt.setAttribute('class', 'display-none w-0 h-0 overflow-hidden');
    }else{
        loadkontennotifikasi();
        pm.setAttribute('class', 'display-none w-0 h-0 overflow-hidden');
        nt.setAttribute('class', 'absolute bg-white w-[250px] top-[60px] right-0 bottom-0 z-[99]');
    }
    return false;
}

async function loadkontennotifikasi () {
    document.getElementById('kontennotifikasi').innerHTML = "Tidak ada notifikasi";
}

if(window.location.search.substr(1).split('=')[0] == 'folder'){
    function loadmanajer(folder) {
        let urlfolder = "3312022145";
        if(folder !== "/"){
            urlfolder = folder;
        }
        document.getElementById('loadfolder').innerHTML='loading..';
        $(document).ready(async () => {
            $.ajax({
                url: baseurl + "/file?get="+urlfolder,
                success: function(msg) {
                    document.getElementById('loadfolder').innerHTML=msg;
                    return false;
                }
            });
        });
    }
}

loadmanajer('/');

