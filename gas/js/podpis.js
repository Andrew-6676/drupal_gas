jQuery(document).ready(function(){
	// alert('podpis');
		// получаем все картинки из контента
	var images = jQuery('.content img');
	img_descr(images);

})

	// функуия добавляет под картинкой подпись, текст берётся из тега alt
function img_descr(images) {
	images.each(function(i){
			// если тег не пустой, то добавляем подпись
		if (jQuery(this).attr('alt')!=undefined && jQuery(this).attr('alt')!='') {
			//alert(jQuery(this).height());
				// вставляем div с подписью после картинки
			jQuery(this).after('<div class="podpis">'+jQuery(this).attr('alt')+'</div>');
				// получаем только что вставленный div
			var div = jQuery('.podpis').last();
			//alert(jQuery(div).text());
				// задаём ширину
			jQuery(div).width(jQuery(this).width()-2);
				// задаём положение на странице
			jQuery(div).offset({top:jQuery(this).offset().top+jQuery(this).height()+1, left:jQuery(this).offset().left });
				// если div содержит больше одной строки - увеличиваем margin-bottom для картинки
			if (jQuery(div).height() > 20) {
				//alert(jQuery(div).height());
				jQuery(this).css({'margin-bottom': 6+jQuery(div).height()});
			} else {
				jQuery(this).css({'margin-bottom': 6+jQuery(div).height()});
			}
		}
	})

}