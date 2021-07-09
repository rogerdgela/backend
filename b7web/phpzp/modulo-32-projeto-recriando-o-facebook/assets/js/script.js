function addFriend(id, obj) {
	if(id != '') {
		$.ajax({
			type:'POST',
			url:'ajax/add_friend',
			data:{id:id},
			success: function (retorno) {
				if(retorno === 'solicitado'){
					$(obj).closest('.sugestaoitem').fadeOut();
				}
			}
		});
	}
}

function aceitarFriend(id, obj) {
	if(id != '') {
		$.ajax({
			type:'POST',
			url:'ajax/aceitar_friend',
			data:{id:id},
			success: function (retorno) {
				if(retorno === 'aceitado'){
					$(obj).closest('.requisicaoitem').fadeOut();
				}
			}
		});
	}
}

function curtir(obj) {

	var id = $(obj).attr('data-id');
	var likes = parseInt($(obj).attr('data-likes'));
	var liked = parseInt($(obj).attr('data-liked'));
	if(liked == 0) {
		likes++;
		liked = 1;
		var texto = '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>';
	} else {
		likes--;
		liked = 0;
		var texto = '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>';
	}

	$(obj).attr('data-likes', likes);
	$(obj).attr('data-liked', liked);

	$(obj).html(likes + ' ' + texto);
	
	$.ajax({
		type:'POST',
		url:'ajax/curtir',
		data:{id:id},
		success: function (retorno) {
			//console.log(retorno);
		}
	});
}

function displayComentario(obj) {
	$(obj).closest('.postitem_botoes').find('.postitem_comentario').slideToggle();
}

function comentar(obj) {
	var id = $(obj).attr('data-id');
	var txt = $(obj).closest('.postitem_comentario').find('.postitem_txt').val();

	$.ajax({
		type:'POST',
		url:'ajax/comentar',
		data:{id:id, txt:txt},
		success: function (retorno) {
			if(retorno) {
				$(obj).closest('.postitem_comentario').find('.postitem_txt').val('')
				$(obj).closest('.postitem_botoes').find('.postitem_comentario').slideToggle();
			}
		}
	});
}

















