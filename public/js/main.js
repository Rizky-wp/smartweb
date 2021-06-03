function load_click(){
    let page = $('#page').val();
    let id_pod = $('#id_pod').val();
    $.ajax({  
            type: "POST",
            url: site_url+"/search/get" ,
            data: {
                page : page,
                id_pod : id_pod
            }, //last_id kita berarti 15
            success: function(data){
                // $(".episode").append(data);
                data = JSON.parse(data)
                $('#page').val(data.page)
                let html = ''
                // console.log(data.data)
                data.data.items.map(episode => {
                    html+='<div class="list-group episode">'
                    html+='<a href="'+site_url+'/search/episode/'+episode.id+'" class="list-group-item list-group-item-action">'
                    html+='<div class="container-fluid "><div class="d-flex flex-row"><div class="d-inline-flex flex-column me-3"><img src="'+episode.images[1].url+'" alt=""></div>'
                    html+='<div class=" d-flex align-items-center col "><div class="name">'+episode.name+'</div></div></div>'
                    html+='<div class="d-flex flex-row"><div class=" d-flex flex-column deskripsi my-2">"'+episode.description+'"</div></div><div class="d-flex flex-row">'
                    html+='<div class=" d-flex flex-column">'
                    const date1 = new Date(episode.release_date);
                    html+=date1.toLocaleString('default', { month: 'short' })+' '+date1.getDate()
                    html+=' . '+Math.ceil(episode.duration_ms/60000)+' min</div></div></div>'
                    html+='</a>'
                    html+='</div>'
                })
                $('#tambah').before(html)
            }
          });
    }