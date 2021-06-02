function load_click(){
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
                $('#comment').val(' ');
            }
          });
    }