function dataPerson(){
    let forms = document.getElementById('frm');
    let nama = forms.nama.value;
    let pekerjaan = forms.nama.value;
    let hobby = forms.hobby.value;
    let data = `input data :
    <br> Nama: ${nama}
    <br> pekerjaan: ${pekerjaan}
    <br> hobby: ${hobby}`;
    document.getElementById('hasil').innerHTML = data;
   
}