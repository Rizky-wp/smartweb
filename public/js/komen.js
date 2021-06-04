function submit_click(){
    let id_user = $('#id_user').val();
    let id_pod = $('#id_pod').val();
    let id_episode = $('#id_episode').val();
    let isi = $('#comment').val();
    $.ajax({  
            type: "POST",
            url: site_url+"/search/save" ,
            data: {
                id_user : id_user,
                id_pod : id_pod,
                id_episode : id_episode,
                isi : isi,
            }, //last_id kita berarti 15
            success: function(data){
                data = JSON.parse(data)

                console.log(data.data)
                
                if (data.data == "oke"){
                    alert("Komentar Berhasil Ditambahkan");
                    $('#comment').val('');
                    $('#comment').attr("placeholder", "Isi Komentar");
                }
                else if(data.data == "gagal"){
                    alert("Komentar Gagal Ditambahkan");
                    $('#comment').val('');
                    $('#comment').attr("placeholder", "Isi Komentar");
                }
                
            }
          });
    }
function load_click(){
    let id_episode = $('#id_episode').val();
    let page = $('#page').val();
    $.ajax({  
        type: "POST",
        url: site_url+"/search/getkomen" ,
        data: {
            page : page,
            id_episode : id_episode
        }, 
        success: function(data){
            
            data = JSON.parse(data)
            if(data.data.length == 0 ){
                $('#komen').addClass("visually-hidden")
            };
            $('#page').val(data.page)
            let html = ''
            // console.log(data)
            data.data.map(komen => {
                const time = new Date(komen.created_at);
                html+='<div class=" card-comment mt-3"><div class="card-header">'+komen.name+' '+time.getHours()+':'+time.getMinutes()+' '+time.toLocaleString('default', { month: 'short' })+' '+time.getDate()+'</div>'
                html+='<div class="card-body"><h4>'+komen.isi+'</h4></div></div>'
            })
            $('#tambah').before(html)
            
            
        }
      });
}