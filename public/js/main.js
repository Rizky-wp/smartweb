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
                    html+='<a href="#" class="list-group-item list-group-item-action"><img src="'+episode.images[1].url+'" alt="">'+episode.name+'</a>'
                    html+='</div>'
                })
                $('#tambah').before(html)
            }
          });
    }